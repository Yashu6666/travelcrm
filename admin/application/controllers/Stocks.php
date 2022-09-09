<?php
defined('BASEPATH') or exit('No direct script access allowed');

class stocks extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->library('Image_Slug');
	}



	public function view_stock()
	{
		$data['view'] = $this->db->get('stocks')->result();
		$this->load->view('stocks/view', $data);
	}

	public function sell_stock()
	{
		$data['view'] = $this->db->get_where('sold_stocks', ['sold_by' => $this->session->userdata('admin_username')])->result();
		$this->load->view('stocks/sell', $data);
	}

	public function add_stock()
	{
		$data['ticket_date'] = date('m/d/Y');
		$this->load->view('stocks/add', $data);
	}

	public function dashboardstock()
	{
		$graph = $this->db->get('stocks')->result();
		$total_ticket = 0;
		$remaning_ticket = 0;
		$date = date('m-d-Y');
		$weekdate = date('m-d-Y', strtotime('-7 days'));
		$month = date('m-d-Y', strtotime('-30 days'));
		$year = date('m-d-Y', strtotime('-365 days'));


		$today_total = 0;
		$today_remaining = 0;

		$week_total = 0;
		$week_remaining = 0;

		$month_total = 0;
		$month_remaining = 0;

		$year_total = 0;
		$year_remaining = 0;

		foreach ($graph as $val) {
			if ($date == $val->created_at) {
				$today_total = $today_total + $val->no_ticket;
				$today_remaining = $today_remaining + $val->remaining_ticket;
			}
			if ($val->created_at >= $weekdate) {
				$week_total = $week_total + $val->no_ticket;
				$week_remaining = $week_remaining + $val->remaining_ticket;
			}

			if ($val->created_at >= $month) {
				$month_total = $month_total + $val->no_ticket;
				$month_remaining = $month_remaining + $val->remaining_ticket;
			}


			if ($val->created_at >= $year) {
				// print_r($val->created_at);
				$year_total = $year_total + $val->no_ticket;
				$year_remaining = $year_remaining + $val->remaining_ticket;
			}
			// die();
			$total_ticket += $val->no_ticket;
			$remaning_ticket += $val->remaining_ticket;
		}

		$data['total_ticket'] = $total_ticket;
		$data['remaning_ticket'] = $remaning_ticket;

		$data['today_total'] = $today_total;
		$data['today_remaining'] = $today_remaining;

		$data['week_total'] = $week_total;
		$data['week_remaining'] = $week_remaining;

		$data['month_total'] = $month_total;
		$data['month_remaining'] = $month_remaining;


		$data['year_total'] = $year_total;
		$data['year_remaining'] = $year_remaining;

		$this->load->view('dashboardstock/view', $data);
	}

	public function edit_stock($id)
	{
		$data['edit'] = $this->db->where('id', $id)->get('stocks')->row();
		$this->load->view('stocks/edit', $data);
	}

	public function addstocks()
	{

		$file_path = '';

		if ($_FILES['files']['name']) {
			$file_path = $this->image_slug->upload_image('files', '', 'stocks');
			$pdf = file_get_contents($file_path);
			$number = preg_match_all("/\/Page\W/", $pdf, $dummy);

			$ticket_name = $this->input->post('ticket_name');
			$query = $this->db->get_where('stocks', ['ticket_name' => $ticket_name])->result();
			if (count($query) > 0 && $query[0]->validity < date('Y-m-d')) {
				// //$remaining_ticket=$number-$this->input->post('ticket_sold');
				// if ($remaining_ticket >= 0) {
				//  $data = array(
				//      'created_at' => date('m-d-Y'),
				//      'ticket_name' => $this->input->post('ticket_name'),
				//      'validity' => $this->input->post('validity'),
				//      'remaining_ticket' => $number,
				//      'no_ticket' => $number,
				//      'uploaded_files' => $file_path,
				//      'uploaded_by' => $this->session->userdata('admin_username')
				//  );
				//  $this->db->insert('stocks', $data);
				//  $data['view'] = $this->db->get('stocks')->result();
				//  redirect('stocks/view_stock', 'refresh');
				//$this->load->view('stocks/view_stock');
				$data = array(
					'created_at' => date('m-d-Y'),
					'ticket_name' => $this->input->post('ticket_name'),
					'validity' => $this->input->post('validity'),
					'remaining_ticket' => $number,
					'no_ticket' => $number,
					'uploaded_files' => $file_path,
					'uploaded_by' => $this->session->userdata('admin_username')
				);
				$this->db->where('ticket_name', $ticket_name)->update('stocks', $data);
				$this->session->set_flashdata('success', 'Stock Updated Successfully');
				redirect('stocks/view_stock', 'refresh');
			} elseif (count($query) == 0) {
				$data = array(
					'created_at' => date('m-d-Y'),
					'ticket_name' => $this->input->post('ticket_name'),
					'validity' => $this->input->post('validity'),
					'remaining_ticket' => $number,
					'no_ticket' => $number,
					'uploaded_files' => $file_path,
					'uploaded_by' => $this->session->userdata('admin_username')
				);
				$this->db->insert('stocks', $data);
				$data['view'] = $this->db->get('stocks')->result();
				$this->session->set_flashdata('success', 'Stock Added Successfully');
				redirect('stocks/view_stock', 'refresh');
			} else {
				$this->session->set_flashdata('error', 'You can add this Stock after existing stocks expires');
				redirect('stocks/view_stock', 'refresh');
			}
		}
	}

	public function sellStocks()
	{
		$ticket_name = $this->input->post('ticket_name');
		$no_of_stocks = $this->input->post('no_of_tickets');
		$query = $this->db->get_where('stocks', ['ticket_name' => $ticket_name])->result();
		if (count($query) > 0) {
			$id = $query[0]->id;
			$remaining_stocks = $query[0]->remaining_ticket;

			if ($remaining_stocks == 0) {
				$this->session->set_flashdata('error', 'No Tickets left for this Stock');
				redirect('stocks/sell_stock', 'refresh');
			} elseif ($no_of_stocks > $remaining_stocks) {
				$this->session->set_flashdata('error', 'Entered No. of Stocks greater than Remaining Stock(s) (' . $remaining_stocks . ')');
				redirect('stocks/sell_stock', 'refresh');
			} else {
				$remaining_stocks_after_sell = $remaining_stocks - $no_of_stocks;
				$this->db->where('id', $id)->update('stocks', ["remaining_ticket" => $remaining_stocks_after_sell]);

				$data = [
					'stock_id' => $id,
					'company_first_name' => $this->input->post('f_name'),
					'company_last_name' => $this->input->post('l_name'),
					'ticket_name' => $ticket_name,
					'no_of_tickets' => $this->input->post('no_of_tickets'),
					'sold_date' => date('d-m-Y'),
					'sold_by' => $this->session->userdata('admin_username'),
				];
				$this->db->insert('sold_stocks', $data);

				$this->session->set_flashdata('success', 'Stock Sold Successfully');
				redirect('stocks/sell_stock', 'refresh');
			}
		} else {
			$this->session->set_flashdata('error', 'Stock Not Found');
			redirect('stocks/sell_stock', 'refresh');
		}
	}

	public function delete_stock($id)
	{
		$this->db->where('id', $id)->update('stocks', ["remaining_ticket" => 0]);
		$this->session->set_flashdata('success', 'Stock Removed Successfully');
		redirect('stocks/view_stock', 'refresh');
	}

	public function delete_stock2($id)
	{
		$this->db->where('id', $id)->update('stocks', ["remaining_ticket" => 0]);
		$this->session->set_flashdata('success', 'Stock Removed Successfully');
		redirect('stocks/sell_stock', 'refresh');
	}

	public function searchStockName()
	{
		$query = $this->input->get('query');
		$this->db->like('ticket_name', $query);
		$data = $this->db->get("stocks")->result();
		$names = [];
		foreach ($data as $key => $val) {
		  $names[] = $val->ticket_name;
		}
		echo json_encode($names);
	}

	public function updateStockDetails()
	{
		//print_r($this->input->post('remaining_ticket'));die();
		$remaining_ticket = $this->input->post('remaining_ticket') - $this->input->post('ticket_sold');
		$id = $this->input->post('id');
		if ($remaining_ticket >= 0) {
			$data = array(
				'remaining_ticket' => $remaining_ticket

			);
			$this->db->where('id', $id)->update('stocks', $data);
			redirect('stocks/view_stock', 'refresh');
		} else {
			redirect('stocks/edit_stock/' . $id, 'refresh');
		}
	}
}
