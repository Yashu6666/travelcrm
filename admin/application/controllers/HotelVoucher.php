<?php
defined('BASEPATH') or exit('No direct script access allowed');
// require 'vendor/autoload.php';

class HotelVoucher extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->library('Image_Slug');
	}

	public function add_hotel()
	{
		if ($this->session->userdata('reg_type')) {
			$data['supplier'] = $this->db->query("SELECT * FROM supplier")->result();

			$this->load->view('hotel_voucher/add_hotel_voucher', $data);
		} else {
			$this->load->view('login/login');
		}
	}


	public function searchDetails()
	{
		$query_id = $_POST['query_id'];

		$data['details'] = $this->db->where('queryId', $query_id)->get('querypackage')->row();

		if($data['details']){

		$data['hotel'] = $this->db->where('query_id', $query_id)->get('query_hotel')->result();
		$data['guest'] = $this->db->where('query_id', $query_id)->get('b2bcustomerquery')->row();
		$data['query_id'] = $query_id;

		$hotel_ids = explode(',',$data['hotel'][0]->hotel_id);

		$data['hotel_details'] = [];
		foreach($hotel_ids as $id){
			$data_hotel = $this->db->where('id', $id)->get('hotel')->row();
			array_push($data['hotel_details'],$data_hotel);
		}
		
		$board_data = $this->db->where('query_id', $query_id)->get('query_hotel')->row();
		$data['board'] = explode(',',$board_data->type);

		$this->load->view('hotel_voucher/add_hotel_voucher', $data);
		} else {
			$this->session->set_flashdata('error', 'Details not found for this Query Id');
			redirect('HotelVoucher/add_hotel','refresh');
		}
	}

	public function getConfirmation()
	{
		$query_id = $_POST['query_id'];
		$hotel_id = $_POST['hotel_id'];

		$data = $this->db->where('query_id', $query_id)->where('query_hotel_id', $hotel_id)->get('hotel_voucher_confirmation')->row();
		echo json_encode($data);
	}

	public function editVoucherDetails($query_id)
	{
		// $query_id = $_POST['query_id'];

		$data['details'] = $this->db->where('queryId', $query_id)->get('querypackage')->row();

		if($data['details']){

		$data['hotel'] = $this->db->where('query_id', $query_id)->get('query_hotel')->result();
		$data['guest'] = $this->db->where('query_id', $query_id)->get('b2bcustomerquery')->row();
		$data['query_id'] = $query_id;

		$hotel_ids = explode(',',$data['hotel'][0]->hotel_id);

		$data['hotel_details'] = [];
		foreach($hotel_ids as $id){
			$data_hotel = $this->db->where('id', $id)->get('hotel')->row();
			array_push($data['hotel_details'],$data_hotel);
		}

		$this->load->view('hotel_voucher/hotel_voucher_edit', $data);
		} else {
			$this->session->set_flashdata('error', 'Details not found for this Query Id');
			redirect('HotelVoucher/hotel_voucher_edit','refresh');
		}
	}

	public function download_pdf()
	{

		try {

			$query_id = $_POST['query_id'];
			$c_email = $_POST['email'];
			$guest_name = $_POST['guest_name'];
			$board_arr = $_POST['board_arr'];
			$impInfo = $_POST['impInfo'];

			$hotel_confirmation = $this->db->where('query_id', $query_id)->get('hotel_voucher_confirmation')->result();
			$data['hotel_confirmation'] = $hotel_confirmation;
			
			$data['details'] = $this->db->where('queryId', $query_id)->get('querypackage')->row();
			$data['hotel'] = $this->db->where('query_id', $query_id)->get('query_hotel')->result();
			$data['guest'] = $this->db->where('query_id', $query_id)->get('b2bcustomerquery')->row();
			$data['query_id'] = $query_id;
			$data['impInfo'] = $impInfo;
			$data['board_arr'] = $board_arr;
			$data['guest_name'] = $guest_name;
			$body = $this->load->view('hotel_voucher/voucher_pdf/index',$data,TRUE);

			$this->load->library('Pdf');
			$html =  $this->load->view('hotel_voucher/pdf',$data, true);
			$dompdf = new Dompdf\DOMPDF();
			$dompdf->load_html($html);
			$dompdf->render();
			$pdf_name = time() . ".pdf";
			$dompdf->stream($pdf_name);

			echo 'pdf downloaded successfully';
			
		} catch (\Exception $e) {
			echo $e->getMessage();
		}
	}

	public function send_mail()
	{

		try {

			$query_id = $_POST['query_id'];
			$c_email = $_POST['email'];
			$guest_name = $_POST['guest_name'];
			$board_arr = $_POST['board_arr'];
			$impInfo = $_POST['impInfo'];

			$hotel_confirmation = $this->db->where('query_id', $query_id)->get('hotel_voucher_confirmation')->result();
			$data['hotel_confirmation'] = $hotel_confirmation;
			
			$data['details'] = $this->db->where('queryId', $query_id)->get('querypackage')->row();
			$data['hotel'] = $this->db->where('query_id', $query_id)->get('query_hotel')->result();
			$data['guest'] = $this->db->where('query_id', $query_id)->get('b2bcustomerquery')->row();
			$data['query_id'] = $query_id;
			$data['impInfo'] = $impInfo;
			$data['board_arr'] = $board_arr;
			$data['guest_name'] = $guest_name;
			$body = $this->load->view('hotel_voucher/voucher_pdf/index',$data,TRUE);

			// $html = $this->load->view('hotel_voucher/pdf', $data, true);
			// $mPdf = new \Mpdf\Mpdf();
			// $mPdf->WriteHTML($html);
			// $pdf_name = time() . ".pdf";
			// $mPdf->Output(FCPATH . '/public/uploads/hotelVoucher/' . $pdf_name, "F");

			// $this->load->config('email');
			$this->load->library('email');
			$config = array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'test.yrpitsolutions.com@gmail.com',
				'smtp_pass' => 'xcvbtihuojnhvmrn',
				'crlf' => "\r\n",
				'mailtype' => "html",
				'newline' => "\r\n",
			);

			$this->db->select("cb.b2bfirstName,cb.b2bcompanyName,cb.query_id,qp.specificDate,qp.goingTo,qp.Packagetravelers,qp.infant,
			qp.child,cb.reportsTo,cb.b2bEmail,qp.room");

			$this->db->from("b2bcustomerquery cb");

			$this->db->where('qp.queryId', $query_id);
			$this->db->join('querypackage qp', 'cb.query_id=qp.queryId', 'LEFT');
			$data['view'] = $this->db->get()->row();

			$user_id = $this->session->userdata()['admin_id'];
			$data['admin_user'] = $this->db->where('id', $user_id)->get('users')->row();


			$subject = $data['view']->query_id . '
			 - Diamond Tours LLC Dubai / Pax:' . $data['view']->Packagetravelers . ' 
			 / ' . $data['view']->specificDate . ' / ' . $data['view']->goingTo . ' / 
			' . $data['admin_user']->firstName . ' ' . $data['admin_user']->LastName;

			$this->email->initialize($config);
			$this->email->from('test.yrpitsolutions.com@gmail.com');
			$this->email->to($c_email);
			$this->email->subject($subject);

			$this->load->library('Pdf');
			$html =  $this->load->view('hotel_voucher/pdf',$data, true);
			$dompdf = new Dompdf\DOMPDF();
			$dompdf->load_html($html);
			$dompdf->render();
			$output = $dompdf->output();
			$pdf_name = time() . ".pdf";
			file_put_contents(FCPATH . '/public/uploads/hotelVoucher/'.$pdf_name, $output);
			$file_name = base_url('/public/uploads/hotelVoucher/' . $pdf_name);
			$this->email->attach($file_name);

			$message = '
			<!DOCTYPE html> 
			<html lang="en">';
			$message .= '<p>Hello ,</p>';
			$message .= '<p> Please find Hotel Voucher Below.</p>';
			$message .= '</br>';
			$message .= '<p>Thank you,</p>';
			$message .= '</body></html>';

			// $this->email->message($message);

			// $body = $this->load->view('hotel_voucher/voucher_pdf/index.php',$data,TRUE);
			$this->email->message($body); 

			if ($this->email->send()) {
				$this->load->helper("file");
				delete_files(FCPATH . '/public/uploads/hotelVoucher');

				echo 'Your Email has successfully been sent.';
			} else {
				show_error($this->email->print_debugger());
			}
		} catch (\Exception $e) {
			echo $e->getMessage();
		}
	}

	public function submitVoucherDetails()
	{
		try {
			// print_r($_POST);
			$query_id = $_POST['query_id'];
			$conf_number = $_POST['conf_number'];
			$hotel_id = $_POST['hotel_id'];
			$board = $_POST['board'];
			$hotel_name = $_POST['hotel_name'];
			$booking_date = $_POST['booking_date'];
			$check_in = $_POST['check_in'];
			$check_out = $_POST['check_out'];
			$guest_name = $_POST['guest_name'];


			foreach ($conf_number as $key => $val) {
				$data_arr = [
					'confirmation_id' => $conf_number[$key],
					'query_hotel_id' => $hotel_id[$key],
					'query_id' => $query_id,
					'guest_name' => $guest_name[0],
					'board' => $board[$key],
					'query_hotel_name' => $hotel_name[$key],
					'query_hotel_booking_date' => $booking_date[$key],
					'query_check_in' => $check_in[$key],
					'query_check_out' => $check_out[$key],
				];

				$is_data = $this->db->where('query_id', $data_arr['query_id'])
					->where('query_hotel_id', $data_arr['query_hotel_id'])->get('hotel_voucher_confirmation')->result();
					
					if (count($is_data) > 0) {
					$this->db->where('query_id', $data_arr['query_id'])
					->where('query_hotel_id', $data_arr['query_hotel_id'])
					->update('hotel_voucher_confirmation', $data_arr);
				} else {
					$this->db->insert('hotel_voucher_confirmation', $data_arr);
				}
			}

			// $query_id = $_POST['query_id'];
			// $data['details'] = $this->db->where('queryId', $query_id)->get('querypackage')->row();
			// $data['hotel'] = $this->db->where('query_id', $query_id)->get('queryhotel')->result();
			// $data['guest'] = $this->db->where('query_id', $query_id)->get('b2bcustomerquery')->row();
			// $data['query_id'] = $query_id;
			// $data['conf_number'] = $conf_number;
			// $data['hotel_id'] = $hotel_id;
			// $data['impInfo'] = $_POST['impInfo'];
			// // redirect('HotelVoucher/view_hotels_voucher', 'refresh');

			// $this->load->view('hotel_voucher/add_hotel_voucher', $data);
		} catch (\Exception $e) {
			$this->session->set_flashdata('error', 'Something Went Wrong');
		}
	}

	public function view_hotels_voucher()
	{
		$data_conf_tbl = $this->db->order_by("updated_at", "desc")->get('hotel_voucher_confirmation')->result();
		$data['hotels'] = $data_conf_tbl;


		$agent_names = [];
		$agent_emails = [];
		foreach($data_conf_tbl as $val){
			$data_b2b = $this->db->where('query_id', $val->query_id)->get('b2bcustomerquery')->row();
			array_push($agent_names,$data_b2b->b2bcompanyName);
			array_push($agent_emails,$data_b2b->b2bEmail);
		}
		$data['agent_names'] = $agent_names;
		$data['agent_emails'] = $agent_emails;

		$this->load->view('hotel_voucher/view_hotels_voucher', $data);
	}

	public function edit_hotel($id)
	{
		$data['supplier'] = $this->db->query("SELECT * FROM supplier")->result();

		$data['edit'] = $this->db->where('id', $id)->get('hotel')->row();
		$this->load->view('hotel_voucher/edit_hotel_voucher', $data);
	}

	public function delete_hotel($id)
	{
		if ($this->db->where('hotelname', $id)->delete('rooms')) {
			$this->db->where('id', $id)->delete('hotel');

			$this->session->set_flashdata('success', 'Hotel deleted Sucessfully');
			redirect('HotelVoucher/view_hotels_voucher', 'refresh');
		} else {
			$this->session->set_flashdata('error', 'Something Went Wrong');
			redirect('HotelVoucher/view_hotels_voucher', 'refresh');
		}
	}

	public function addHotelDetails()
	{
		//echo '<pre>';print_r($_POST);exit;
		$hotelamenities = implode(',', $_POST['hotelamenities']);
		$hotelpayments = implode(',', $_POST['hotelpayments']);
		// echo '<pre>';print_r($this->input->post('hotelmapaddress'));exit;
		$data = array(
			'hotelname' => $this->input->post('hotelname'),
			'hoteldesc' => $this->input->post('hoteldesc'),
			'hotelmapaddress' => $this->input->post('hotelmapaddress'),
			'latitude' => $this->input->post('latitude'),
			'longitude' => $this->input->post('longitude'),
			'hotelamenities' => $hotelamenities,
			'hotelpayments' => $hotelpayments,
			'checkintime' => $this->input->post('checkintime'),
			'checkouttime' => $this->input->post('checkouttime'),
			'hotelpolicy' => $this->input->post('hotelpolicy'),
			'hotelemail' => $this->input->post('hotelemail'),
			'hotelwebsite' => $this->input->post('hotelwebsite'),
			'hotelphone' => $this->input->post('hotelphone'),
			'hotelstars' => $this->input->post('hotelstars'),
			'propertytype' => $this->input->post('propertytype'),
			'total_markup' => $this->input->post('total_markup'),
			'total_markup_per' => $this->input->post('total_markup_per'),
			'supplier' => $this->input->post('supplier')
		);
		if ($this->db->insert('hotel', $data)) {
			$this->session->set_flashdata('success', 'Hotel Added Sucessfully');
			redirect('HotelVoucher/view_hotels_voucher', 'refresh');
		} else {
			$this->session->set_flashdata('error', 'Something Went Wrong');
			redirect('HotelVoucher/view_hotels_voucher', 'refresh');
		}
	}

	public function updateHotelDetails($id)
	{
		//echo '<pre>';print_r($_POST);exit;
		$hotelamenities = implode(',', $_POST['hotelamenities']);
		$hotelpayments = implode(',', $_POST['hotelpayments']);
		//echo '<pre>';print_r($hotelpayments);exit;
		$data = array(
			'hotelname' => $this->input->post('hotelname'),
			'hoteldesc' => $this->input->post('hoteldesc'),
			'hotelmapaddress' => $this->input->post('hotelmapaddress'),
			'latitude' => $this->input->post('latitude'),
			'longitude' => $this->input->post('longitude'),
			'hotelamenities' => $hotelamenities,
			'hotelpayments' => $hotelpayments,
			'checkintime' => $this->input->post('checkintime'),
			'checkouttime' => $this->input->post('checkouttime'),
			'hotelpolicy' => $this->input->post('hotelpolicy'),
			'hotelemail' => $this->input->post('hotelemail'),
			'hotelwebsite' => $this->input->post('hotelwebsite'),
			'hotelphone' => $this->input->post('hotelphone'),
			'hotelstatus' => $this->input->post('hotelstatus'),
			'hotelstars' => $this->input->post('hotelstars'),
			'propertytype' => $this->input->post('propertytype'),
			'total_markup' => $this->input->post('total_markup'),
			'total_markup_per' => $this->input->post('total_markup_per'),
			'supplier' => $this->input->post('supplier')
		);
		if ($this->db->where('id', $id)->update('hotel', $data)) {
			$this->session->set_flashdata('success', 'Hotel Updated Sucessfully');
			redirect('HotelVoucher/view_hotels_voucher', 'refresh');
		} else {
			$this->session->set_flashdata('error', 'Something Went Wrong');
			redirect('HotelVoucher/view_hotels_voucher', 'refresh');
		}
	}

	public function getVoucherDetails()
	{
		$query_id = $this->input->post('query_id');

		$data['details'] = $this->db->where('queryId', $query_id)->get('querypackage')->row();

		if($data['details']){

		$data['hotel'] = $this->db->where('query_id', $query_id)->get('query_hotel')->result();
		$data['guest'] = $this->db->where('query_id', $query_id)->get('b2bcustomerquery')->row();
		$data['hotel_conformation'] = $this->db->where('query_id', $query_id)->get('hotel_voucher_confirmation')->row();
		$data['query_id'] = $query_id;
			// echo"<pre>";print_r($data);exit;
		echo json_encode($data);
		} else {
			$this->session->set_flashdata('error', 'Details not found for this Query Id');
			redirect('HotelVoucher/view_hotels_voucher','refresh');
		}
	}
}
