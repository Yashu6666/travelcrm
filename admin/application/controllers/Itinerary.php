<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Itinerary extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('Image_Slug');
	}


	public function add()
	{
		$data['listSightseeings'] = $this->db->get('excursion')->result();
		$this->load->view('itinerary/add',$data);
	}

	public function test()
	{
		// $q_id =  '8749';	
		// $query_package = $this->db->where('queryId',$q_id)->get('querypackage')->row();	
		// $query = $this->db->query("SELECT * FROM b2bcustomerquery WHERE query_id=".$q_id)->row();	
		// $itinery = $this->db->query("SELECT * FROM itinery_data WHERE query_id=".$q_id)->result();	
		// $data['query'] = $query;
		// $data['itinery'] = $itinery;
		// $data['query_hotel_voucher'] = $this->db->where('query_id', $q_id)->get('hotel_voucher_confirmation')->result();
		// $data['query_package'] = $query_package;	

		// $this->load->view('itinerary/templates/itinery_mail',$data);
		// // print_r($data['query_hotel_voucher']);
		// return;
		try
    {
		
		// $this->load->view('itinerary/templates/itinery_mail');
		$q_id =  '8749';	
		$query = $this->db->query("SELECT * FROM b2bcustomerquery WHERE query_id=".$q_id)->row();	
		$itinery = $this->db->query("SELECT * FROM itinery_data WHERE query_id=".$q_id)->result();	
		$data['query'] = $query;	
		$data['itinery'] = $itinery;	
		$data['query_hotel_voucher'] = $this->db->where('query_id', $q_id)->get('hotel_voucher_confirmation')->result();
		$query_package = $this->db->where('queryId',$q_id)->get('querypackage')->row();	
		$data['query_package'] = $query_package;	

			$data['hotel_details'] = [];
			$this->load->library('Pdf');
			$html =  $this->load->view('itinerary/templates/itinery_mail',$data, true);
			$dompdf = new Dompdf\DOMPDF();
			$dompdf->load_html($html);
			$dompdf->set_paper("A3", "portrait");
			$dompdf->render();
			$pdf_name = time() . ".pdf";
			$dompdf->stream($pdf_name);

	} catch(Exception $e){
		echo '<strong>Errormessage:</strong>'.$e->getMessage().'<br />';
        echo $e->getTraceAsString();
	}

	}

	public function view()
	{
		$this->db->order_by('id', 'desc');
		if($this->session->userdata('reg_type') != 'Super Admin'){
			$this->db->where('created_by' , $this->session->userdata('admin_id'));
		}
		$data['view'] = $this->db->get('itinery_data')->result();

		$this->load->view('itinerary/view',$data);
	}

	public function sendMailItinerary()	
	{	
			
		try {	
			$q_id = $_POST['q_id'];	
			$query = $this->db->query("SELECT * FROM b2bcustomerquery WHERE query_id=".$q_id)->row();	
			$itinery = $this->db->query("SELECT * FROM itinery_data WHERE query_id=".$q_id)->result();	
			$data['query'] = $query;	
			$data['itinery'] = $itinery;	
			$data['query_hotel_voucher'] = $this->db->where('query_id', $q_id)->get('hotel_voucher_confirmation')->result();
			$query_package = $this->db->where('queryId',$q_id)->get('querypackage')->row();	
			$data['query_package'] = $query_package;	

			$data['hotel_details'] = [];	
			
			$this->load->library('email');	
			$config = array(	
				'protocol' => 'smtp',	
				'smtp_host' => 'ssl://smtp.googlemail.com',	
				'smtp_port' => 465,	
				'smtp_user' => 'devsum2@gmail.com',	
				'smtp_pass' => 'kidueonawxajhfae',	
				'crlf' => "\r\n",	
				'mailtype' => "html",	
				'newline' => "\r\n",	
			);	
			
			$this->load->library('Pdf');
			$html =  $this->load->view('itinerary/templates/itinery_mail',$data, true);
			$dompdf = new Dompdf\DOMPDF();
			$dompdf->load_html($html);
			$dompdf->set_paper("A3", "portrait");
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
			$message .= '<p> Please find Itinerary Below.</p>';
			$message .= '</br>';
			$message .= '<p>Thank you,</p>';
			$message .= '</body></html>';

			$email_from = $this->session->userdata('admin_email');
			$this->email->initialize($config);
			$this->email->from($email_from);	
			$this->email->to('sumanth@yrpitsolutions.com');	
			$this->email->cc('');	
			$this->email->subject('itinery');
			$this->email->message($message); 

			if ($this->email->send()) {
				$this->load->helper("file");
				delete_files(FCPATH . '/public/uploads/hotelVoucher');

				echo 'Your Email has successfully been sent.';
			} else {
				show_error($this->email->print_debugger());
			}

		} catch (\Exception $e) {	
			$this->session->set_flashdata('error', 'Something Went Wrong');	
		}	
	}

	public function add_cities()
	{
		//echo '<pre>';print_r($_POST);exit;
		$data = array('city_name'=>$_POST['itncity_name'],
						'no_nights'=>$_POST['no_nights'],
						'start_date'=>$_POST['from_day'],
						'to_date'=>$_POST['to_day'],
					);

		$this->db->insert('Itinerary',$data);
		$lastid = $this->db->insert_id();
		$data = $this->db->where('id',$lastid)->get('Itinerary')->result();
		echo json_encode($data);
		

	}

	public function searchDetails(){
		$query_id=$_POST['query_id'];
		// print_r($query_id);exit;
		$hotel = $this->db->where('query_id',$query_id)->get('query_hotel')->result();
		// print_r($hotel);
		$data['data_conf'] = $this->db->where('query_id',(int)$query_id)->get('hotel_voucher_confirmation')->row();
		// print_r($data['data_conf']);exit;
		
		$data['hotel_city'] = explode(',',$hotel[0]->hotel_city);
		$data['hotel_name'] = explode(',',$hotel[0]->hotel_name);
		$data['room_type'] = explode(',',$hotel[0]->room_type);
		$data['category'] = explode(',',$hotel[0]->category);

		$data['hotel_name'] = array_unique($data['hotel_name']);
		// $transfer = $this->db->get_where('query_transfer', array('query_id' => $query_id))->row();
		$transfer_types = [];
		$transfer_pickup = [];
		$transfer_dropoff = [];
		$transfer_routes = [];
		$transfer = $this->db->query("SELECT * FROM query_transfer WHERE query_id=".$query_id)->result();

		foreach ($transfer as $key => $value) {
			$transfer_pickup_values = explode(',',$transfer[$key]->pickup);
			foreach ($transfer_pickup_values as $key1 => $value1) {
				array_push($transfer_pickup, $value1);
			}

			$transfer_dropoff_values = explode(',',$transfer[$key]->dropoff);
			foreach ($transfer_dropoff_values as $key2 => $value2) {
				array_push($transfer_dropoff, $value2);
			}

			$transfer_route_values = explode(',',$transfer[$key]->transfer_route);
			foreach ($transfer_route_values as $key3 => $value3) {
				array_push($transfer_routes, $value3);
			}
			array_push($transfer_types,$value->transfer_type);
		}


		foreach ($transfer_types as $k => $val) {
			if($val == "internal"){
				$transfer_types[$k] = 'oneway';
			} else {
				$transfer_types[$k] = 'round';
			}
		}
		$data['transfer_types'] = array_unique($transfer_types);

		$data['transfer_pickup'] = $transfer_pickup;
		$data['transfer_dropoff'] = $transfer_dropoff;
		$data['transfer_routes'] = $transfer_routes;

		// $meals = $this->db->where('query_id',$query_id)->get('query_meal')->result();
		$meals = $this->db->query("SELECT * FROM query_meal WHERE query_id=".$query_id)->result();

		if(count($meals)> 1){
			$data['resturant_transfer_type'] = explode(',',$meals[0]->transfer_type);
			$data['resturant_type'] = explode(',',$meals[0]->resturant_type);
			$data['resturant_name'] = explode(',',$meals[0]->resturant_name);
			$data['meal'] = explode(',',$meals[0]->meal);
			$data['meal_type'] = explode(',',$meals[0]->meal_type);
		}else {
			$data['resturant_transfer_type'] = [];
			$data['resturant_type'] =  [];
			$data['resturant_name'] =  [];
			$data['meal'] = [];
			$data['meal_type'] =  [];
		}
		// $excursion_sic = $this->db->query("SELECT * FROM `query_excursion` WHERE query_id='".$query_id."' AND excursion_type='SIC' ")->row();
		// $excursion_pvt = $this->db->query("SELECT * FROM `query_excursion` WHERE query_id='".$query_id."'")->row();

		// $excursion_pvt = $this->db->where('query_id',$query_id)->where('excursion_type','PVT')->get('query_excursion')->result();
		// $excursion_pvt = $this->db->get('query_excursion')->result();
		// $this->db->like('start_city', $pickup)->where('dest_city', $dropoff)->where('seat_capacity >=', $person)->where('transport_type', 'oneway')->get('transfer_route')->result();

		// $where_pvt = array('query_id' => $query_id, 'excursion_type' => 'PVT');
		// $this->db->where($where_pvt); 
		// $excursion_pvt = $this->db->get('query_excursion')->result();

		$excursion = $this->db->query("SELECT * FROM query_excursion WHERE query_id=".$query_id)->result();

		$excursion_sic_data = array_filter($excursion, function($value) {
			if($value->excursion_type == "SIC"){
				return $value;
			}
		});

		$excursion_pvt_data = array_filter($excursion, function($value) {
			if($value->excursion_type == "PVT"){
				return $value;
			}
		});

		$excursion_pvt = [];
		foreach ($excursion_pvt_data as $key => $value) {
			foreach (explode(',',$value->excursion_name) as $k => $val) {
				array_push($excursion_pvt, $val);
			}
		}

		$excursion_sic = [];
		foreach ($excursion_sic_data as $key => $value) {
			foreach (explode(',',$value->excursion_name) as $k => $val) {
				array_push($excursion_sic, $val);
			}
		}

		$excursion_types = [];

		foreach ($excursion as $k1 => $val1) {
			array_push($excursion_types, $val1->excursion_type);
		}

		$data['excursion_types'] = $excursion_types;
		$data['excursion_data'] = array_merge($excursion_pvt,$excursion_sic);

		$query=$this->db->query("SELECT * FROM b2bcustomerquery WHERE query_id=".$query_id)->row();
		// $query=$this->db->where('query_id', $query_id)->get('b2bcustomerquery')->row();
		if(isset($query)){
		
		$name=$query->b2bfirstName.' '.$query->b2blastName;
		// $package=$this->db->where('queryId',$query_id)->get('querypackage')->row();
		$package=$this->db->query("SELECT * FROM querypackage WHERE queryId=".$query_id)->row();

		$first_date = new DateTime($package->specificDate);
		$second_date = new DateTime($package->noDaysFrom);
		$difference = $first_date->diff($second_date);

	     $res=array("query_id"=>$query_id,"name"=>$name,"checkindate"=>$package->specificDate,"checkoutdate"=>$package->noDaysFrom,"nights"=>$difference->days);
	

		$data['package'] =  $package;
		$data['details'] =  $res;
		$data['query'] =  $query;

		}
		$data['cities'] =$this->db->query("SELECT * FROM city_master")->result();
		$data['room_types'] =$this->db->query("SELECT * FROM room_type_master")->result();
		$data['listSightseeings'] = $this->db->get('excursion')->result();

	

		$data['transfer_route'] = $this->db->query("SELECT * FROM transfer_route where transport_type='oneway' AND cost_type='Normal'")->result();
		$data['transfer_route1'] = $this->db->query("SELECT * FROM transfer_route where transport_type='round' AND cost_type='Normal'")->result();
		$data['query'] = !empty($query) ? $query : array();

		$data['excursion']= $this->db->query("SELECT * FROM excursion WHERE type='SIC' ")->result();
		// $data['excursion']= $this->db->query("SELECT * FROM excursion WHERE type='PVT' ")->result();

		// echo"<pre>";print_r($data);exit;
		$this->load->view('itinerary/add',$data);

	}

	public function getTransfer(){
		$type = $this->input->post('type');
		$transfer_type = !empty($this->input->post('transfer_type')) ?  $this->input->post('transfer_type') : '';
		// $pickup =  !empty($this->input->post('pickup')) ?  $this->input->post('pickup') : '';
		// $drop_off= !empty($this->input->post('dropoff')) ?  $this->input->post('dropoff') : '';
		$pickup ='';
		$drop_off= '';
		$drop_off='';
		if($type == "get_dropoff"){
			$pickup =  !empty($this->input->post('pickup')) ?  $this->input->post('pickup') : '';
			
		}else if($type == "get_route_name"){
			$pickup =  !empty($this->input->post('pickup')) ?  $this->input->post('pickup') : '';
			$drop_off= !empty($this->input->post('dropoff')) ?  $this->input->post('dropoff') : '';
		}
		
		// $data = $this->db->query("SELECT * FROM transfer_route where  cost_type='Normal' AND transport_type='".$transfer_type."' ")->result_array();
		// if($pickup) $package =+"AND start_city ='".$pickup."' " ;
		// if($drop_off) $package =+ "AND dest_city = '".$drop_off."' ";

		if($type == "get_dropup") $query = "SELECT * FROM transfer_route where  cost_type='Normal' AND transport_type='".$transfer_type."' ";
		if($type == "get_dropoff") 	$query = " SELECT * FROM transfer_route where  cost_type='Normal' AND transport_type='".$transfer_type."'  AND start_city ='".$pickup."' " ;
		if($type == "get_route_name") $query = " SELECT * FROM transfer_route where  cost_type='Normal' AND transport_type='".$transfer_type."'  AND start_city ='".$pickup."' AND dest_city = '".$drop_off."' ";
		
		$data = $this->db->query($query)->result_array();


		// echo json_encode(array("data"=>$data));
		echo json_encode($data);
	}

	public function get_excursion(){
		$type = $this->input->post('excursion_type');
		$excursion= $this->db->query("SELECT * FROM excursion WHERE type='".$type."' ")->result_array();
		echo json_encode(array("data"=>$excursion));

	}

	
	public function saveItinerary(){

	try {
	$description = $this->input->post('description');
	$arrival_flight = $this->input->post('arrival_flight');
	$arrival_time = $this->input->post('arrival_time');
	$arrival_from = $this->input->post('arrival_from');
	$arrival_airport = $this->input->post('arrival_airport');
	$arrival_drop = $this->input->post('arrival_drop');
	$arrival_date = $this->input->post('arrival_date');
	$arrival_transfer_type = $this->input->post('arrival_transfer_type');

	$return_flight = $this->input->post('return_flight');
	$return_time = $this->input->post('return_time');
	$return_departure = $this->input->post('return_departure');
	$return_airport = $this->input->post('return_airport');
	$return_pickup = $this->input->post('return_pickup');
	$return_date = $this->input->post('return_date');
	$return_transfer_type = $this->input->post('return_transfer_type');

	$arrival_data = $arrival_flight.','.$arrival_time.','.$arrival_from.','.$arrival_airport.','.$arrival_drop.','.$arrival_date.','.$arrival_transfer_type;
	$return_data = $return_flight.','.$return_time.','.$return_departure.','.$return_airport.','.$return_pickup.','.$return_date.','.$return_transfer_type;

	$data = array(
			'hotel_name' => $this->input->post('hotel_data_hotelname'),
			'hotel_category' => $this->input->post('hotel_data_hotelstar'),
			'hotel_room_type' => $this->input->post('hotel_data_roomtype'),
			'hotel_no_pax' => $this->input->post('hotel_data_pax'),
			'hotel_check_in_date' => $this->input->post('hotel_data_checkin'),
			'hotel_checkout_date' => $this->input->post('hotel_data_checkout'),
			'transfer_type' => $this->input->post('transfer_data_type'),
			'transfer_pax' => $this->input->post('transfer_data_pax'),
			'transfer_from_date' => $this->input->post('transfer_data_fromdate'),
			'transfer_pickup' => $this->input->post('transfer_data_pickup'),
			'transfer_dropoff' => $this->input->post('transfer_data_dropoff'),
			'transfer_route_name' => $this->input->post('transfer_data_routename'),
			'transfer' => $this->input->post('transfer_data_type'),
			'meal_resturant_name' => $this->input->post('meal_data_resturant_name'),
			'meal_resturant_type' => $this->input->post('meal_data_resturant_type'),
			'meal_transfer_type' => $this->input->post('meals_transfer_type'),
			'meal' => $this->input->post('meal_data_meal'),
			'meal_type' => $this->input->post('meal_data_type'),
			'meal_adult' => $this->input->post('meal_data_adult'),
			'meal_child' => $this->input->post('meal_data_child'),
			'excursion_type' => $this->input->post('excursion_data_excursion_type'),
			'excursion_name' => $this->input->post('excursion_data_excursion_name'),
			'excursion_adult' => $this->input->post('excursion_data_excursion_adult'),
			'excursion_child' => $this->input->post('excursion_data_excursion_child'),
			'excursion_infant' => $this->input->post('excursion_data_excursion_infant'),
			'query_id' => $this->input->post('query_id'),
			'day' => $this->input->post('day'),
			'arrival_transfer' => $arrival_data,
			'return_transfer' => $return_data,
			'description' => $description,
			'pickup_time' => $this->input->post('pickup_time'),
			'created_by' =>   $this->session->userdata('admin_id'),

		);
		$get_query_id = $this->db->query("SELECT * FROM itinery_data WHERE query_id='".$data['query_id']."' ")->result_array();
		$this->db->where('query_id',$data['query_id']);
		$this->db->where('day',$data['day']);
		$query = $this->db->get('itinery_data');
		if ($query->num_rows() > 0){
			$this->db->where('query_id',$data['query_id']);
			$this->db->where('day',$data['day']);
			$this->db->update('itinery_data', $data); 
		}
		else{
			$this->db->insert('itinery_data',$data);
		}
	} catch(Exception $e){
		echo "<pre>";$e;
	}
	}

}