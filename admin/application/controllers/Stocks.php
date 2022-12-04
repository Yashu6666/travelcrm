<?php
defined('BASEPATH') or exit('No direct script access allowed');

// start by dharmanshu for pdf changes regarding ticket
// echo $_SERVER['DOCUMENT_ROOT'].'travelcrm/admin/application/libraries/fpdf/fpdf.php'; die;
require_once(APPPATH.'libraries/fpdf/fpdf.php');
require_once(APPPATH.'libraries/fpdi/src/autoload.php');
require_once(APPPATH.'third_party/fpdf_merge.php');
use \setasign\Fpdi\Fpdi;
// end by dharmanshu for pdf changes regarding ticket

class stocks extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('Image_Slug');
	}



	public function view_stock()
	{
		$this->db->from('stocks');
		$this->db->order_by("id", "desc");
		$query = $this->db->get(); 
		$data['view'] =  $query->result();
		// $data['view'] = $this->db->get('stocks')->order_by('id','desc')->result();
		$this->load->view('stocks/view', $data);
	}

	public function sell_stock()
	{
		$this->db->from('sold_stocks');
		$this->db->where(['sold_by' => $this->session->userdata('admin_username')]);
		$this->db->order_by("id", "desc");
		$query = $this->db->get(); 
		$data['view'] = $query->result();
		// $data['view'] = $this->db->get_where('sold_stocks', ['sold_by' => $this->session->userdata('admin_username')])->result();
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
				$today_total = $today_total + $val->adult_ticket + $val->child_ticket;
				$today_remaining = $today_remaining + $val->remaining_ticket_adult + $val->remaining_ticket_child;
			}
			if ($val->created_at >= $weekdate) {
				$week_total = $week_total + $val->adult_ticket + $val->child_ticket;
				$week_remaining = $week_remaining + $val->remaining_ticket_adult + $val->remaining_ticket_child;
			}

			if ($val->created_at >= $month) {
				$month_total = $month_total + $val->adult_ticket + $val->child_ticket;
				$month_remaining = $month_remaining + $val->remaining_ticket_adult + $val->remaining_ticket_child;
			}


			if ($val->created_at >= $year) {
				// print_r($val->created_at);
				$year_total = $year_total + $val->adult_ticket + $val->child_ticket;
				$year_remaining = $year_remaining + $val->remaining_ticket_adult + $val->remaining_ticket_child;
			}
			// die();
			$total_ticket += $val->adult_ticket + $val->child_ticket;
			$remaning_ticket += $val->remaining_ticket_adult + $val->remaining_ticket_child;
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

		

		$remaing_tickets = $this->db->select("ticket_name,remaining_ticket_adult,remaining_ticket_child")
					->from('stocks')												
					->get()->result();
		$tickets_graph_data =  array();
		foreach ($remaing_tickets as $tickets) {
			$tickets_graph_data[$tickets->ticket_name] = $tickets->remaining_ticket_adult+$tickets->remaining_ticket_child;
		}
		$ticket_key = implode(",", array_keys($tickets_graph_data));
		$data['formatted_ticket_key'] = "'" . str_replace(",", "','", $ticket_key) . "'";
		$ticket_values = implode(",", array_values($tickets_graph_data));
		$data['formatted_ticket_values'] = "'" . str_replace(",", "','", $ticket_values) . "'";

		// echo "<pre>";print_r($result_string);exit;
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
			$pax_type = $this->input->post('pax_type_select');
			
			$query = $this->db->get_where('stocks', ['ticket_name' => $ticket_name])->result();
			
			if (count($query) > 0 && $query[0]->adult_ticket  || count($query) > 0 && $query[0]->child_ticket  || count($query) > 0 && $query[0]->validity < date('Y-m-d')) {
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
					// 'remaining_ticket' => $number,
					'no_ticket' => $number,
					'uploaded_files' => $file_path,
					'uploaded_by' => $this->session->userdata('admin_username')
				);
				
				if($pax_type == "Adult"){
					$data['adult_ticket'] = $number;
					$data['ticket_type_adult'] = $this->input->post('tkt_type');
					$data['remaining_ticket_adult'] = $number;
				}else{
					$data['child_ticket'] = $number;
					$data['ticket_type_child'] = $this->input->post('tkt_type');
					$data['remaining_ticket_child'] = $number;
				}
				$this->db->where('ticket_name', $ticket_name)->update('stocks', $data);
				$this->session->set_flashdata('success', 'Stock Updated Successfully');
				redirect('stocks/view_stock', 'refresh');
			} elseif (count($query) == 0) {
				$data = array(
					'created_at' => date('m-d-Y'),
					'ticket_name' => $this->input->post('ticket_name'),
					'validity' => $this->input->post('validity'),
					// 'remaining_ticket' => $number,
					'no_ticket' => $number,
					'uploaded_files' => $file_path,
					'uploaded_by' => $this->session->userdata('admin_username')
				);
				$pax_type = $this->input->post('pax_type_select');
				if($pax_type == "Adult"){
					$data['adult_ticket'] = $number;	
					$data['ticket_type_adult'] = $this->input->post('tkt_type');
					$data['remaining_ticket_adult'] = $number;	
	
				}else{
					$data['child_ticket'] = $number;
					$data['ticket_type_child'] = $this->input->post('tkt_type');
					$data['remaining_ticket_child'] = $number;

				}
				$this->db->insert('stocks', $data);
				$data['view'] = $this->db->get('stocks')->result();
				$this->session->set_flashdata('success', 'Stock Added Successfully');
				redirect('stocks/view_stock', 'refresh');
			}else {
				$this->session->set_flashdata('error', 'You can add this Stock after existing stocks expires');
				redirect('stocks/view_stock', 'refresh');
			}
		}
	}

	public function sellStocks()
	{
		$ticket_name = $this->input->post('ticket_name');
		//by dharmanshu
		$merge = new FPDF_Merge(); //by dharmanshu
		$uploaded_files_adult = '';
		$uploaded_files_child = '';
		// end
		// $no_of_stocks = $this->input->post('no_of_tickets');
		$no_of_tickets_adults = !empty($this->input->post('no_of_tickets_adults')) ? $this->input->post('no_of_tickets_adults') : '0';
		$no_of_tickets_childs = !empty($this->input->post('no_of_tickets_childs')) ? $this->input->post('no_of_tickets_childs') : '0';
		$pax_type = $this->input->post('pax_type_select');
		//by dharmanshu
		if($pax_type == 'Adult'){
			$no_of_tickets_childs = 0;
		}
		if($pax_type == 'Child'){
			$no_of_tickets_adults = 0;
		}
		//end
		$query = $this->db->get_where('stocks', ['ticket_name' => $ticket_name])->result();
		if (count($query) > 0) {
			$id = $query[0]->id;
			// $remaining_stocks = $query[0]->remaining_ticket;			
			$adult_stocks = $query[0]->adult_ticket;	
			$no_ticket = $query[0]->no_ticket;
			$child_stocks = $query[0]->child_ticket;
			$ticket_type_adult = $query[0]->ticket_type_adult;
			$ticket_type_child = $query[0]->ticket_type_child;
			$remaining_stocks_adult = $query[0]->remaining_ticket_adult;
			$remaining_stocks_child = $query[0]->remaining_ticket_child;

			if ($pax_type == "Adult"  && $ticket_type_adult != $this->input->post('tkt_type')) {				
				$this->session->set_flashdata('error', 'No tickets left with pax type Adult and ticket type '.$ticket_type_adult.' for this stock');
				redirect('stocks/sell_stock', 'refresh');
			}else if ($pax_type == "Child"  &&  $ticket_type_child != $this->input->post('tkt_type')) {				
				$this->session->set_flashdata('error', 'No tickets left with pax type Child and ticket type '.$ticket_type_child.' for this stock');
				redirect('stocks/sell_stock', 'refresh');
			} 

			else if ($pax_type == "Adult"  && $remaining_stocks_adult == 0) {
				$this->session->set_flashdata('error', 'No Adult Tickets left for this Stock');
				redirect('stocks/sell_stock', 'refresh');
			}else if ($pax_type == "Child"  &&  $remaining_stocks_child == 0) {
				$this->session->set_flashdata('error', 'No Child Tickets left for this Stock');
				redirect('stocks/sell_stock', 'refresh');
			} elseif ($pax_type == "Both"  && $no_of_tickets_adults > $remaining_stocks_adult) {
				$this->session->set_flashdata('error', 'Entered No. of Adult Stocks greater than Remaining Stock(s) (' . $remaining_stocks_adult . ')');
				redirect('stocks/sell_stock', 'refresh');
			}elseif ($pax_type == "Both"  && $no_of_tickets_childs > $remaining_stocks_child) {
				$this->session->set_flashdata('error', 'Entered No. of Child Stocks greater than Remaining Stock(s) (' . $remaining_stocks_child . ')');
				redirect('stocks/sell_stock', 'refresh');
			} else {
				$file = explode('/',$query[0]->uploaded_files);
				$file = end($file);
				$pdf_path = FCPATH.'public/uploads/stocks/'.$file;
				$remaining_stocks_adult_after_sell = ($remaining_stocks_adult - $no_of_tickets_adults) > 0 ? $remaining_stocks_adult - $no_of_tickets_adults : 0;
				$remaining_stocks_child_after_sell = ($remaining_stocks_child - $no_of_tickets_childs) > 0 ? $remaining_stocks_child - $no_of_tickets_childs : 0;
				
				if($pax_type == 'Adult'){
					$sold_stocks = $this->db->get_where('sold_stocks',['stock_id'=>$id,'no_of_tickets_adults !='=>0])->result();
					// echo $this->db->last_query();
					if(!count($sold_stocks) > 0){
						
						$file_name = $this->split_pdf($pdf_path,false,1,$no_of_tickets_adults);
						if(!empty($file_name)){
							foreach($file_name as $k=>$v){
								$file = explode('/',$v);
								$merge->add(FCPATH.'public/uploads/stocks/'.end($file));
								unlink(FCPATH.'public/uploads/stocks/'.end($file));
							}
						}
						$merge->output(FCPATH.'public/uploads/soldstocks/'.strtotime(date('Y-m-d h:i:s')).'.pdf');
						$uploaded_files_adult = ''.strtotime(date('Y-m-d h:i:s')).'.pdf';
					}
					if(count($sold_stocks) > 0){
						$sold_stocks = $this->db->select('sum(no_of_tickets_adults) as sum_adult')->from('sold_stocks')->where(['stock_id'=>$id,'no_of_tickets_adults !='=>0])->get()->row();
						$count = $sold_stocks->sum_adult+1;
						$no_of_tickets_adults_count= $no_of_tickets_adults+$sold_stocks->sum_adult;
						$file_name = $this->split_pdf($pdf_path,false,$count,$no_of_tickets_adults_count);
						if(!empty($file_name)){
							foreach($file_name as $k=>$v){
								$file = explode('/',$v);
								$merge->add(FCPATH.'public/uploads/stocks/'.end($file));
								unlink(FCPATH.'public/uploads/stocks/'.end($file));
							}
						}
						$merge->output(FCPATH.'public/uploads/soldstocks/'.strtotime(date('Y-m-d h:i:s')).'.pdf');
						$uploaded_files_adult = ''.strtotime(date('Y-m-d h:i:s')).'.pdf';
					}
					$this->db->where('id', $id)->update('stocks', ["remaining_ticket_adult" => $remaining_stocks_adult_after_sell, "remaining_ticket_child" => $remaining_stocks_child_after_sell]);
				}
				if($pax_type == 'Child'){
					$sold_stocks = $this->db->get_where('sold_stocks',['stock_id'=>$id,'no_of_tickets_childs !='=>0])->result();
					// echo $this->db->last_query();
					if(!count($sold_stocks) > 0){
						
						$file_name = $this->split_pdf($pdf_path,false,1,$no_of_tickets_childs);
						if(!empty($file_name)){
							foreach($file_name as $k=>$v){
								$file = explode('/',$v);
								$merge->add(FCPATH.'public/uploads/stocks/'.end($file));
								unlink(FCPATH.'public/uploads/stocks/'.end($file));
							}
						}
						$merge->output(FCPATH.'public/uploads/soldstocks/'.strtotime(date('Y-m-d h:i:s')).'.pdf');
						$uploaded_files_child = ''.strtotime(date('Y-m-d h:i:s')).'.pdf';
					}
					if(count($sold_stocks) > 0){
						$sold_stocks = 
						$this->db->select('sum(no_of_tickets_childs) as sum_adult')->from('sold_stocks')->where(['stock_id'=>$id,'no_of_tickets_childs !='=>0])->get()->row();
						$count = $sold_stocks->sum_adult+1;
						$no_of_tickets_childs_count= $no_of_tickets_childs+$sold_stocks->sum_adult;
						$file_name = $this->split_pdf($pdf_path,false,$count,$no_of_tickets_childs_count);
						if(!empty($file_name)){
							foreach($file_name as $k=>$v){
								$file = explode('/',$v);
								$merge->add(FCPATH.'public/uploads/stocks/'.end($file));
								unlink(FCPATH.'public/uploads/stocks/'.end($file));
							}
						}
						$merge->output(FCPATH.'public/uploads/soldstocks/'.strtotime(date('Y-m-d h:i:s')).'.pdf');
						$uploaded_files_child = ''.strtotime(date('Y-m-d h:i:s')).'.pdf';
					}
					$this->db->where('id', $id)->update('stocks', ["remaining_ticket_adult" => $remaining_stocks_adult_after_sell, "remaining_ticket_child" => $remaining_stocks_child_after_sell]);
				}
				
				if($pax_type == 'Both'){
					//for child
					$sold_stocks = $this->db->get_where('sold_stocks',['stock_id'=>$id,'no_of_tickets_childs !='=>0])->result();
					// echo $this->db->last_query();
					if(!count($sold_stocks) > 0){
						
						$file_name = $this->split_pdf($pdf_path,false,1,$no_of_tickets_childs);
						if(!empty($file_name)){
							foreach($file_name as $k=>$v){
								$file = explode('/',$v);
								$merge->add(FCPATH.'public/uploads/stocks/'.end($file));
								unlink(FCPATH.'public/uploads/stocks/'.end($file));
							}
						}
						$merge->output(FCPATH.'public/uploads/soldstocks/'.strtotime(date('Y-m-d h:i:s')).'.pdf');
						$uploaded_files_child = ''.strtotime(date('Y-m-d h:i:s')).'.pdf';
					}
					if(count($sold_stocks) > 0){
						$sold_stocks = 
						$this->db->select('sum(no_of_tickets_childs) as sum_adult')->from('sold_stocks')->where(['stock_id'=>$id,'no_of_tickets_childs !='=>0])->get()->row();
						$count = $sold_stocks->sum_adult+1;
						$no_of_tickets_childs_count= $no_of_tickets_childs+$sold_stocks->sum_adult;
						$file_name = $this->split_pdf($pdf_path,false,$count,$no_of_tickets_childs_count);
						if(!empty($file_name)){
							foreach($file_name as $k=>$v){
								$file = explode('/',$v);
								$merge->add(FCPATH.'public/uploads/stocks/'.end($file));
								unlink(FCPATH.'public/uploads/stocks/'.end($file));
							}
						}
						$merge->output(FCPATH.'public/uploads/soldstocks/'.strtotime(date('Y-m-d h:i:s')).'.pdf');
						$uploaded_files_child = ''.strtotime(date('Y-m-d h:i:s')).'.pdf';
					}
					$this->db->where('id', $id)->update('stocks', ["remaining_ticket_adult" => $remaining_stocks_adult_after_sell, "remaining_ticket_child" => $remaining_stocks_child_after_sell]);

					//for adult
					$sold_stocks = $this->db->get_where('sold_stocks',['stock_id'=>$id,'no_of_tickets_adults !='=>0])->result();
					// echo $this->db->last_query();
					if(!count($sold_stocks) > 0){
						
						$file_name = $this->split_pdf($pdf_path,false,1,$no_of_tickets_adults);
						if(!empty($file_name)){
							foreach($file_name as $k=>$v){
								$file = explode('/',$v);
								$merge->add(FCPATH.'public/uploads/stocks/'.end($file));
								unlink(FCPATH.'public/uploads/stocks/'.end($file));
							}
						}
						$merge->output(FCPATH.'public/uploads/soldstocks/'.strtotime(date('Y-m-d h:i:s')).'.pdf');
						$uploaded_files_adult = ''.strtotime(date('Y-m-d h:i:s')).'.pdf';
					}
					if(count($sold_stocks) > 0){
						$sold_stocks = $this->db->select('sum(no_of_tickets_adults) as sum_adult')->from('sold_stocks')->where(['stock_id'=>$id,'no_of_tickets_adults !='=>0])->get()->row();
						$count = $sold_stocks->sum_adult+1;
						$no_of_tickets_adults_count= $no_of_tickets_adults+$sold_stocks->sum_adult;
						$file_name = $this->split_pdf($pdf_path,false,$count,$no_of_tickets_adults_count);
						if(!empty($file_name)){
							foreach($file_name as $k=>$v){
								$file = explode('/',$v);
								$merge->add(FCPATH.'public/uploads/stocks/'.end($file));
								unlink(FCPATH.'public/uploads/stocks/'.end($file));
							}
						}
						$merge->output(FCPATH.'public/uploads/soldstocks/'.strtotime(date('Y-m-d h:i:s')).'.pdf');
						$uploaded_files_adult = ''.strtotime(date('Y-m-d h:i:s')).'.pdf';
					}
					$this->db->where('id', $id)->update('stocks', ["remaining_ticket_adult" => $remaining_stocks_adult_after_sell, "remaining_ticket_child" => $remaining_stocks_child_after_sell]);
				}
				
				// echo $remaining_stocks_child_after_sell;
				// die;
			
				// if ($remaining_stocks == 0) {
				// 	$this->session->set_flashdata('error', 'No Tickets left for this Stock');
				// 	redirect('stocks/sell_stock', 'refresh');
				// } elseif ($no_of_stocks > $remaining_stocks) {
				// 	$this->session->set_flashdata('error', 'Entered No. of Stocks greater than Remaining Stock(s) (' . $remaining_stocks . ')');
				// 	redirect('stocks/sell_stock', 'refresh');
				// } else {
				// 	$remaining_stocks_after_sell = $remaining_stocks - $no_of_stocks;
				// 	$this->db->where('id', $id)->update('stocks', ["remaining_ticket" => $remaining_stocks_after_sell]);

				$data = [
					'stock_id' => $id,
					'travel_agent_name' => $this->input->post('f_name'),
					'guest_name' => $this->input->post('l_name'),
					'ticket_name' => $ticket_name,
					// 'no_of_tickets' => $this->input->post('no_of_tickets'),
					'no_of_tickets_adults' => ($no_of_tickets_adults) > 0 ? $no_of_tickets_adults : 0,
					'no_of_tickets_childs' => ($no_of_tickets_childs) > 0 ? $no_of_tickets_childs : 0,
					'sold_date' => date('d-m-Y'),
					'sold_by' => $this->session->userdata('admin_username'),
					'booking_date' => $this->input->post('b_date'),
					'uploaded_files_adult' => $uploaded_files_adult,
					'uploaded_files_child' => $uploaded_files_child
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
		$this->db->where('id', $id)->update('stocks', ["remaining_ticket_adult" => 0,"remaining_ticket_child" => 0]);
		$this->session->set_flashdata('success', 'Stock Removed Successfully');
		redirect('stocks/view_stock', 'refresh');
	}

	public function delete_stock2($id)
	{
		$this->db->where('id', $id)->update('stocks', ["remaining_ticket_adult" => 0,"remaining_ticket_child" => 0]);
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
	//start by dharmanshu for pdf changes regarding ticket
	function split_pdf($filename, $end_directory = false,$start = 1,$end= 2)
	{
		$new_file = [];
		// $end_directory = $end_directory ? $end_directory;
		$new_path = preg_replace('/[\/]+/', '/', $end_directory.substr($filename, 0, strrpos($filename, '/')));
		// $new_path = preg_replace('/[\/]+/', '/', $end_directory.'/'.substr($filename, 0, strrpos($filename, '/')));
		$new_path = FCPATH.'public/uploads/split/';
		
		if (!is_dir($new_path))
		{
			// echo $end_directory.'=='; die;
			// Will make directories under end directory that don't exist
			// Provided that end directory exists and has the right permissions
			mkdir($new_path, 0777, true);

		}
		$pdf = new FPDI();
		$pagecount = $pdf->setSourceFile($filename); // How many pages?
		
		// Split each page into a new PDF
		// echo $start,'===',$end; die;
		for ($i = $start; $i <= $end; $i++) {
			$new_pdf = new FPDI();
			$new_pdf->AddPage();
			$new_pdf->setSourceFile($filename);
			$new_pdf->useTemplate($new_pdf->importPage($i));	
			$time = strtotime(date('Y-m-d h:i:s'))+$i;
			try {
				$new_filename = $end_directory.str_replace('.pdf', '', $filename).'_'.$time.".pdf";
				$new_pdf->Output($new_filename, "F");
				$new_file [] = $new_filename;
				// echo "Page ".$i." split into ".$new_filename."<br />\n";
				// return $new_filename;
			} catch (Exception $e) {
				// echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
		}
		return $new_file;
	}
	//end by dharmanshu for pdf changes regarding ticket
}
