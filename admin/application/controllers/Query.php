<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Query extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();
		ini_set('memory_limit', '2048M');
		$this->load->library('Image_Slug');
		// $this->load->library('Pdf');
	}

	public function searchCompanyName()
	{
		$query = $this->input->get('query');
		$this->db->like('b2bcompanyName', $query);
		$data = $this->db->get("b2bcustomerquery")->result();
		$names = [];
		foreach ($data as $key => $val) {
		  $names[] = $val->b2bcompanyName;
		}
		echo json_encode($names);
	}

	public function getCompanyDetails()
	{
		$name = $this->input->get('name');
		$this->db->where('b2bcompanyName', $name);
		$data = $this->db->order_by("id", "desc")->get("b2bcustomerquery")->row();
		
		echo json_encode($data);
	}

	public function delete_query_data(){
		$query_id = $this->input->post('query_id');
		$query_type = $this->input->post('query_type');

		if($query_type == 'query_transfer'){
			$transfer_query = $this->db->where('query_id', $query_id)->get('query_transfer')->result();
			if(count($transfer_query) > 0){ $this->db->where('query_id', $query_id)->delete('query_transfer'); }
		}

		if($query_type == 'query_excursion'){
			$excursion_query = $this->db->where('query_id', $query_id)->get('query_excursion')->result();
			if(count($excursion_query) > 0){ $this->db->where('query_id', $query_id)->delete('query_excursion'); }
		}

		if($query_type == 'query_hotel'){
			$hotel_query = $this->db->where('query_id', $query_id)->get('query_hotel')->result();
			if(count($hotel_query) > 0){ $this->db->where('query_id', $query_id)->delete('query_hotel'); }
		}

		if($query_type == 'query_meal'){
			$meal_query = $this->db->where('query_id', $query_id)->get('query_meal')->result();
			if(count($meal_query) > 0){ $this->db->where('query_id', $query_id)->delete('query_meal'); }
		}

		if($query_type == 'query_visa'){
			$visa_query = $this->db->where('query_id', $query_id)->get('query_visa')->result();
			if(count($visa_query) > 0){ $this->db->where('query_id', $query_id)->delete('query_visa'); }
		}

		echo json_encode(["msg"=>"deleted successfully"]);
	}

	public function sendMailProposalPackage()
	{
		try {
			$data_arr = $_POST['data_arr'];
			
			$data_en = json_decode($_POST['data_arr']);
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
			
			$data['details'] = $data_en;
			
			if ($data['details']->type == 'package'){
				// $this->load->view('query/email_templates/package/package_mail', $data);return;
				$body = $this->load->view('query/email_templates/package/package_mail', $data, TRUE);
				echo "Email Sent package";
			}
			elseif ($data['details']->type == 'transfer'){
				// $this->load->view('query/email_templates/proposal_transfer', $data);return;
				$body = $this->load->view('query/email_templates/proposal_transfer', $data, TRUE);
			}elseif($data['details']->type == 'hotel'){
				// $body = $this->load->view('query/email_templates/temp_hotel', $data);return;
				$body = $this->load->view('query/email_templates/temp_hotel', $data, TRUE);
			}elseif($data['details']->type == 'visa'){
				// $body = $this->load->view('query/email_templates/temp_visa', $data);return;
				$body = $this->load->view('query/email_templates/temp_visa', $data, TRUE);
			}elseif($data['details']->type == 'excursions'){
				// $body = $this->load->view('query/email_templates/temp_excursion', $data);return;
				$body = $this->load->view('query/email_templates/temp_excursion', $data, TRUE);
			}elseif($data['details']->type == 'meals'){
				// $body = $this->load->view('query/email_templates/temp_meal', $data);return;
				$body = $this->load->view('query/email_templates/temp_meal', $data, TRUE);
			}
			else {
				$body = $this->load->view('query/email_templates/proposal', $data, TRUE);
			}
			
			$email_from = $this->session->userdata('admin_email');
			$this->email->initialize($config);
			$this->email->from($email_from);
			$this->email->to($data_en->cus_email);
			$this->email->cc($data_en->cc_email);
			$this->email->subject($data_en->subject);
			$this->email->message($body);
			$this->email->send();

			 
			echo "Email Sent";
			$update_data = array('is_proposal_sent' => 1);
			$this->db->where('queryId', $data_en->query_ID)->update('querypackage', $update_data);

		} catch (\Exception $e) {
			$this->session->set_flashdata('error', 'Something Went Wrong');
		}
	}

	public function deleteQueryData()
	{
		$query_id = $this->input->post('query_id');

		$b2b_query = $this->db->where('query_id', $query_id)->get('b2bcustomerquery')->result();
		if(count($b2b_query) > 0){ $this->db->where('query_id', $query_id)->delete('b2bcustomerquery'); }

		$package_query = $this->db->where('queryId', $query_id)->get('querypackage')->result();
		if(count($package_query) > 0){ $this->db->where('queryId', $query_id)->delete('querypackage'); }

		$transfer_query = $this->db->where('query_id', $query_id)->get('query_transfer')->result();
		if(count($transfer_query) > 0){ $this->db->where('query_id', $query_id)->delete('query_transfer'); }

		$excursion_query = $this->db->where('query_id', $query_id)->get('query_excursion')->result();
		if(count($excursion_query) > 0){ $this->db->where('query_id', $query_id)->delete('query_excursion'); }

		$hotel_query = $this->db->where('query_id', $query_id)->get('query_hotel')->result();
		if(count($hotel_query) > 0){ $this->db->where('query_id', $query_id)->delete('query_hotel'); }

		$meal_query = $this->db->where('query_id', $query_id)->get('query_meal')->result();
		if(count($meal_query) > 0){ $this->db->where('query_id', $query_id)->delete('query_meal'); }

		$visa_query = $this->db->where('query_id', $query_id)->get('query_visa')->result();
		if(count($visa_query) > 0){ $this->db->where('query_id', $query_id)->delete('query_visa'); }

		$pricing_info_query = $this->db->where('query_id', $query_id)->get('pricing_info')->result();
		if(count($pricing_info_query) > 0){ $this->db->where('query_id', $query_id)->delete('pricing_info'); }

		echo json_encode(["msg"=>"deleted successfully"]);
	}


	public function view_query($type = '')
	{
		error_reporting(0);
		// $inprogress = $this->db->where('lead_stage', "Inprogress")->get('b2bcustomerquery')->result();
		// $inprogress = $this->db->distinct()->select('query_id')->where('cb.lead_stage', "Inprogress")->where('cb.reportsTo', $this->session->userdata('admin_username'))->join('querypackage qp','cb.query_id=qp.queryId')->group_by('qp.queryId')->get('b2bcustomerquery cb')->result();
		$inprogress = $this->db->where('lead_stage', "Inprogress")->where('created_by', $this->session->userdata('admin_id'))->get('querypackage')->result();
		if (isset($inprogress)) {
			$data['inprogress'] = count($inprogress);
		} else {
			$data['inprogress'] = 0;
		}
		// $today_date = date("Y-m-d");
		// $recent = $this->db->query("select * FROM b2bcustomerquery where created_at BETWEEN '" . $today_date . " 00:00:00' AND    '" . $today_date . " 11:59:59'")->result();

		$date = new DateTime("now");
		$curr_date = $date->format('Y-m-d ');
		// $recent = $this->db->query("select DISTINCT(qp.queryId) FROM b2bcustomerquery as cb join querypackage as qp ON cb.query_id=qp.queryId where DATE(cb.created_at) = '" . $curr_date . "' group by qp.queryId ")->result();
		$recent = $this->db->query("select * FROM querypackage where created_at BETWEEN DATE_SUB(NOW(), INTERVAL 15 DAY) AND NOW()")->result();
		// $recent = $this->db->where('lead_stage', "Inprogress")->where('created_by', $this->session->userdata('admin_id'))->get('querypackage')->result();

		if (isset($recent)) {
			$data['recent'] = count($recent);
		} else {
			$data['recent'] = 0;
		}

		// $confirmed = $this->db->where('lead_stage', "Confirmed")->where('reportsTo', $this->session->userdata('admin_username'))->get('b2bcustomerquery')->result();
		$confirmed = $this->db->where('lead_stage', "Confirmed")->where('created_by', $this->session->userdata('admin_id'))->get('querypackage')->result();

		if (isset($confirmed)) {
			$data['confirmed'] = count($confirmed);
		} else {
			$data['confirmed'] = 0;
		}

		// $rejected = $this->db->where('lead_stage', "Rejected")->where('reportsTo', $this->session->userdata('admin_username'))->get('b2bcustomerquery')->result();
		$rejected = $this->db->where('lead_stage', "Rejected")->where('created_by', $this->session->userdata('admin_id'))->get('querypackage')->result();

		if (isset($rejected)) {
			$data['rejected'] = count($rejected);
		} else {
			$data['rejected'] = 0;
		}

		// $callback = $this->db->where('lead_stage', "Callback")->where('reportsTo', $this->session->userdata('admin_username'))->get('b2bcustomerquery')->result();
		$callback = $this->db->where('lead_stage', "Callback")->where('created_by', $this->session->userdata('admin_id'))->get('querypackage')->result();

		if (isset($callback)) {
			$data['callback'] = count($callback);
		} else {
			$data['callback'] = 0;
		}

		$overall = $this->db->where('created_by', $this->session->userdata('admin_id'))->get('querypackage')->result();
		// $overall = $this->db->query("SELECT DISTINCT(queryId) FROM querypackage")->result();
		if (isset($overall)) {
			$data['overall'] = count($overall);
		} else {
			$data['overall'] = 0;
		};

		
		if ($type == 'Inprogress') {
			$query = $this->session->userdata('reg_type') == 'Super Admin' ? $this->db->where('lead_stage', "Inprogress")->get('querypackage')->result()
					 : $this->db->where('lead_stage', "Inprogress")->where('created_by', $this->session->userdata('admin_id'))->get('querypackage')->result();
		} else if ($type == 'Callback') {
			$query = $this->session->userdata('reg_type') == 'Super Admin' ? $this->db->where('lead_stage', "Callback")->get('querypackage')->result()
					 : $this->db->where('lead_stage', "Callback")->where('created_by', $this->session->userdata('admin_id'))->get('querypackage')->result();
		} else if ($type == 'Rejected') {
			$query = $this->session->userdata('reg_type') == 'Super Admin' ? $this->db->where('lead_stage', "Rejected")->get('querypackage')->result()
					 : $this->db->where('lead_stage', "Rejected")->where('created_by', $this->session->userdata('admin_id'))->get('querypackage')->result();
		} else if ($type == 'Confirmed') {
			$query = $this->session->userdata('reg_type') == 'Super Admin' ? $this->db->where('lead_stage', "Confirmed")->get('querypackage')->result()
					 : $this->db->where('lead_stage', "Confirmed")->where('created_by', $this->session->userdata('admin_id'))->get('querypackage')->result();
		} else if ($type == 'recent') {
			// $query = $this->db->query("select * FROM b2bcustomerquery where created_at BETWEEN '" . $today_date . " 00:00:00' AND    '" . $today_date . " 11:59:59'")->result();
			$query = $this->db->query("select * FROM querypackage as qp join b2bcustomerquery as cb  ON cb.query_id=qp.queryId where cb.created_at BETWEEN DATE_SUB(NOW(), INTERVAL 15 DAY) AND NOW() group by qp.queryId ")->result();

		} else if ($type == 'Overall') {
			$query = $this->session->userdata('reg_type') == 'Super Admin' ? $this->db->get('querypackage')->result()
					 : $this->db->where('created_by', $this->session->userdata('admin_id'))->get('querypackage')->result();
		} else {
			$query = $this->session->userdata('reg_type') == 'Super Admin' ? $this->db->get('querypackage')->result()
					 : $this->db->where('created_by', $this->session->userdata('admin_id'))->get('querypackage')->result();
		}
		// $query=$this->db->get('b2bcustomerquery')->result();
		// echo"<pre>";print_r($query);die();

		$result = array();
		$result_query_id = [];
		foreach ($query as $value) {
			$query_id = $value->queryId;
			$lead_stage = $value->lead_stage;
			$created_at = $value->created_at;
			$id = $value->id;

			$b2bQuery = $this->session->userdata('reg_type') == 'Super Admin' ? $this->db->where('query_id', $query_id)->get('b2bcustomerquery')->row()
			: $this->db->where('query_id', $query_id)->where('reportsTo', $this->session->userdata('admin_username'))->get('b2bcustomerquery')->row();
			$name = $b2bQuery->b2bfirstName . ' ' . $b2bQuery->b2blastName;
			$mobile = $b2bQuery->b2bmobileNumber;
			$company_name = $b2bQuery->b2bcompanyName;
			$admin_names = $b2bQuery->reportsTo;

			if(!in_array($value->queryId, $result_query_id, true)){
				
			$package = $this->session->userdata('reg_type') == 'Super Admin' ? $this->db->where('queryId', $query_id)->get('querypackage')->row()
			: $this->db->where('queryId', $query_id)->where('created_by', $this->session->userdata('admin_id'))->get('querypackage')->row();

			if (isset($package)) {
				$res = array("id" => $id, "company_name" => $company_name, "admin_names" => $admin_names, "created_at" => $created_at, "query_id" => $query_id, "name" => $name, "mobile" => $mobile, "Description" => $package->type, "qp_id" => $package->id, "traveldate" => !empty($package->specificDate) ? $package->specificDate : $package->doa, "nopax" => "adult " . $package->Packagetravelers . ", child " . $package->child. ", infant " . $package->infant, "goingTo" => $package->goingTo, "lead_stage" => $lead_stage);
				$result[] = $res;
			}
			array_push($result_query_id, $value->queryId);
			}
		}

		$data_assign_to = $this->db->get('users')->result();
		$names = [];
		foreach ($data_assign_to as $key => $val) {
		  $names[] = $val->UserName;
		}
		$data['assign_to'] = $names;

		$data['result'] = array_reverse($result);

		$data['users'] = $this->db->query("SELECT * FROM users where userType!='Super Admin'")->result();

		$this->load->view('query/view_query', $data);
	}

	public function package($query_id = '')
	{
		//echo '<pre>';print_r($_POST);exit;
		// if(isset($query_id)){

		// }else{
		// 	$query_id=$this->input->post('query_id');
		// }
		$query_id1 = $this->input->post('query_id');
		if (isset($query_id1)) {
			$data = array(
				'b2bcompanyName' => $this->input->post('b2bcompanyName'),
				'b2bCompanyAddress' => $this->input->post('b2bCompanyAddress'),
				'b2bEmail' => $this->input->post('b2bEmail'),
				'b2bfirstName' => $this->input->post('b2bfirstName'),
				'b2blastName' => $this->input->post('b2blastName'),
				'b2bmobileNumber' => $this->input->post('b2bmobileNumber'),
				'reportsTo' => $this->input->post('reportsTo'),
				'b2bagent_remarks' => $this->input->post('b2bagent_remarks'),
				'query_id' => $this->input->post('query_id')
			);
			$this->db->insert('b2bcustomerquery', $data);
		}
		$data['b2bDetails'] = $this->db->where('query_id', $query_id)->get('b2bcustomerquery')->row();
		$data['buildpackage'] = $this->db->where('queryId', $query_id)->get('querypackage')->row();
		// echo"<pre>";print_r($data);exit;
		$this->load->view('query/package', $data);
	}
	public function delete_query($id)
	{
		$package = $this->db->where('id', $id)->get('querypackage')->row();
		if(!empty($package)){
			try{
				$this->db->where('id', $id)->delete('querypackage');
				$this->db->where('query_id', $package->queryId)->delete('b2bcustomerquery');
				$this->session->set_flashdata('success', 'Data deleted Sucessfully');
			redirect('query/view_query', 'refresh');
			} catch(Exception $e){
				$this->session->set_flashdata('error', 'Something Went Wrong');
				redirect('query/view_query', 'refresh');
			}
		}
		else {
			$this->session->set_flashdata('error', 'Something Went Wrong');
			redirect('query/view_query', 'refresh');
		}
	}

	public function addQueryPackage()
	{
		// echo '<pre>';print_r($_POST);
		// exit;
		$cwb = [];
		$cnb = [];
		$with_or_wo = [];

		if(isset($_POST['child_with_or_wo_count'])){
			foreach($_POST['child_with_or_wo_count'] as $key => $val){
			$with=0;$without=0;
			foreach($val as $k){
				$with_result = $k == 1 ? true : false;
				$wo_result = $k == 0 ? true : false;
				if($with_result){
					$with += 1;
				} elseif($wo_result) {
					$without += 1;
				}
			}
			array_push($cwb,$with);
			array_push($cnb,$without);
		}

		if(isset($_POST['hotelPrefrence'])){
		foreach ($_POST['child_with_or_wo_count'] as $key => $wo) {
			foreach ($wo as $key => $val) {
				array_push($with_or_wo,$val);
			}
		}}
	}
		
		$child_with_or_wo_bed = implode(',', $with_or_wo);
		$cnb_count = implode(',', $cnb);
		$cwb_count = implode(',', $cwb);
		$country = implode(',', $_POST['country']);
		$goingFrom = implode(',', $_POST['goingFrom']);
		$hotelPrefrence = isset($_POST['hotelPrefrence']) ? implode(',', $_POST['hotelPrefrence']) : "";
		$doa = isset($_POST['doa']) ? $_POST['doa'] : NULL;
		$dod = isset($_POST['dod']) ? $_POST['dod'] : NULL;
		$no_of_stay = isset($_POST['no_of_stay']) ? $_POST['no_of_stay'] : NULL;
		$visa_purpose = isset($_POST['visa_purpose']) ? $_POST['visa_purpose'] : NULL;

		$adult_count = isset($_POST['adult_count']) ? implode(',', $_POST['adult_count']) : "";
		$child_count = isset($_POST['child_count']) ? implode(',', $_POST['child_count']) : "";
		$child_age_count = isset($_POST['child_age_count']) ? implode(',', $_POST['child_age_count']) : "";
		$infant_count = isset($_POST['infant_count']) ? implode(',', $_POST['infant_count']) : "";

		$data = array(
			'goingTo' => $country,
			'goingFrom' => $goingFrom,
			'specificDate' => $this->input->post('specificDate'),
			'noDaysFrom' => $this->input->post('noDaysFrom'),
			'doa' => $doa,
			'dod' => $dod,
			'cwb_per_room' => $cwb_count,
			'cnb_per_room' => $cnb_count,
			'adult_per_room' => $adult_count,
			'child_per_room' => $child_count,
			'child_age_per_room' => $child_age_count,
			'infant_per_room' => $infant_count,
			'no_of_stay' => $no_of_stay,
			'visa_purpose' => $visa_purpose,
			'hotelPrefrence' => $hotelPrefrence,
			'Packagetravelers' => $this->input->post('adult'),
			'queryId' => $this->input->post('queryId'),
			'night' => $this->input->post('night'),
			'child' => $this->input->post('child'),
			'child_age' => $this->input->post('child_age'),
			'room' => $this->input->post('rooms'),
			'adult' => $this->input->post('adult'),
			'infant' => $this->input->post('infant'),
			'type' => $this->input->post('colorRadio'),
			'currency' => $this->input->post('invoice_currency'),
			'queryId' => $this->input->post('queryId'),
			'created_date' => $this->input->post('created_date'),
			'created_by' => $this->session->userdata('admin_id'),
			'child_with_or_wo_bed' => $child_with_or_wo_bed,
		);
		// echo "<pre>";print_r($_POST);return;
		$query_id = $this->input->post('queryId');
		$type = $data['type'];
		if ($this->db->insert('querypackage', $data)) {
			$this->session->set_flashdata('successPackage', $type . ' Query Created Sucessfully');
			redirect('query/package/' . $query_id, 'refresh');
		} else {
			$this->session->set_flashdata('error', 'Something Went Wrong');
			redirect('query/package/' . $query_id, 'refresh');
		}
	}

	public function updatestatus()
	{
		
		$id = $_POST['id'];
		$status = $_POST['status'];
		$query_id = $this->db->where('id', $id)->get('querypackage')->row();
		// // $type = $_POST['type'];
		$data = array('lead_stage' => $status);
		$package = $this->db->where('id', $id)->update('querypackage', $data);
		$b2b = $this->db->where('query_id', $query_id->queryId)->update('b2bcustomerquery', $data);
		echo json_encode("updated");
	}

	public function fetchdropoff(){
		$pickup=$_POST['pickup'];
	
		$dropoff=$this->db->query("SELECT * FROM transfer_route where start_city='$pickup' AND transport_type='oneway' GROUP BY start_city,dest_city ")->result();
		echo json_encode(array("data"=>$dropoff));
	}

	public function fetchPickup(){
		$pax= $_POST['pax'];
		$pickup=$this->db->group_by(array("start_city", "dest_city"))->get_where('transfer_route', array('seat_capacity >=' => $pax,'transport_type =' => 'oneway'))->result();
		echo json_encode(array("data"=>$pickup));
	}

	public function fetchPickup1(){
		$pax= $_POST['pax'];
		$pickup1=$this->db->group_by(array("start_city", "dest_city"))->get_where('transfer_route', array('seat_capacity >=' => $pax,'transport_type =' => 'round'))->result();
		echo json_encode(array("data"=>$pickup1));
	}
	
	public function fetchprice(){
		$pickup=$_POST['pickup'];
		$dropoff=$_POST['dropoff'];
		$person=$_POST['person'];
		$dropoff=$this->db->query("SELECT * FROM `transfer_route` WHERE start_city='$pickup' AND  dest_city='$dropoff' AND seat_capacity >= '$person' AND transport_type='oneway'  LIMIT 1")->row();
		
		if(empty($dropoff)){
			$dropoff = "";
			$dropoff = $this->db->query("SELECT * FROM `transfer_route` WHERE start_city='$pickup' AND  dest_city='$dropoff' AND seat_capacity <= '$person' AND transport_type='oneway'  LIMIT 1")->row();
		} 

	   $price=$dropoff->cost;
		
	   	$priceperperson = $price/$person;
		$route_name = !empty($dropoff->route_name) ? $dropoff->route_name : "";
		$dropoff =  !empty($dropoff) ? $dropoff : array() ;
	  echo json_encode(array("data"=>ceil($priceperperson),"route_name"=>$route_name,'row_data' =>$dropoff ));
	}
	public function fetchdropoff1(){
		$pickup=$_POST['pickup'];
		$dropoff=$this->db->query("SELECT * FROM transfer_route where start_city='$pickup' AND transport_type='round' GROUP  BY start_city,dest_city ")->result();
	
		echo json_encode(array("data"=>$dropoff));
	}
	
	public function fetchprice1(){
		$pickup=$_POST['pickup'];
		$dropoff=$_POST['dropoff'];
		$person=$_POST['person'];
	
		
		$dropoff=$this->db->query("SELECT * FROM `transfer_route` WHERE start_city='$pickup' AND  dest_city='$dropoff' AND seat_capacity >= '$person' AND transport_type='round'  LIMIT 1")->row();
	
		$price=$dropoff->cost;
		
	  	$priceperperson=$price/$person;
		$route_name = !empty($dropoff->route_name) ? $dropoff->route_name : "";
		$dropoff =  !empty($dropoff) ? $dropoff : array() ;
	 	echo json_encode(array("data"=>ceil($priceperperson),"route_name"=>$route_name,'row_data' =>$dropoff ));
	
	}

	public function fetchexcursion()
	{

		$excursion_type = $_POST['excursion_type'];
		$excursion_name = $_POST['excursion_name'];
		$excursion_adult = $_POST['excursion_adult'];
		$excursion_child = $_POST['excursion_child'];
		$excursion_infant = $_POST['excursion_infant'];

		$excursion = $this->db->query("SELECT * FROM excursion WHERE tourname='$excursion_name' AND type='$excursion_type'")->row();

		if ($excursion_type == 'SIC') {
			$adult = $excursion->adultprice;
			$child = $excursion->childprice;
			$infant = $excursion->infantprice;

			// $t=$adult*$excursion_adult+$child*$excursion_child+$infant*$excursion_infant;
			echo json_encode(array("adult" => $adult * $excursion_adult, "child" => $child * $excursion_child, "infant" => $infant * $excursion_infant));
		} else {
			$excursion = $this->db->query("SELECT * FROM excursion WHERE tourname='$excursion_name' AND type='$excursion_type'")->result();

			$total = $excursion_adult + $excursion_child + $excursion_infant;
			print_r($total);
			die();
			$data = array();
			foreach ($excursion as $value) {
				if ($total <= $value->pax) {

					array_push($data, $value->pax);
					// $data.push($value['seat_capacity']);
				}
			}
			$count = min($data);
			$amount = $this->db->query("SELECT * FROM excursion WHERE tourname='$excursion_name' AND type='$excursion_type' AND pax='$count'")->row();
			$price = $amount->vehicle_price;

			$priceperperson = $price / $total;
			echo json_encode(array("priceperperson" => $priceperperson));
		}
	}



	public function buildPackage($q_id = '')
	{
		//echo '<pre>';print_r($q_id);exit;
		$this->db->select("cb.b2bfirstName,cb.b2bcompanyName,cb.query_id,qp.specificDate,qp.goingTo,qp.Packagetravelers,qp.infant,
		qp.child,cb.reportsTo,cb.b2bEmail,qp.room");

		$this->db->from("b2bcustomerquery cb");

		$this->db->where('qp.queryId', $q_id);
		$this->db->join('querypackage qp', 'cb.query_id=qp.queryId', 'LEFT');
		$data['view'] = $this->db->get()->row();

		$user_id = $this->session->userdata()['admin_id'];
		$data['admin_user'] = $this->db->where('id', $user_id)->get('users')->row();
		$data['package_details'] = $this->db->where('queryId', $q_id)->get('querypackage')->row();

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

		$subject = $data['view']->query_id . '
			 - Diamond Tours LLC Dubai / Pax:' . $data['view']->Packagetravelers . ' 
			 / ' . $data['view']->specificDate . ' / ' . $data['view']->goingTo . ' / 
			' . $data['admin_user']->firstName . ' ' . $data['admin_user']->LastName;

		$email_from = $this->session->userdata('admin_email');
		$this->email->initialize($config);
		$this->email->from($email_from);
		$this->email->to($data['view']->b2bEmail);
		$this->email->subject($subject);
		$body = $this->load->view('query/email_templates/acknowledge', $data, TRUE);
		$this->email->message($body);
		$this->email->send();

		$data['listSuppliers'] = $this->db->get('supplier')->result();
		$data['transfer_route'] = $this->db->query("SELECT * FROM transfer_route where transport_type='oneway' AND cost_type='Normal' group by start_city,dest_city")->result();
		$data['transfer_route1'] = $this->db->query("SELECT * FROM transfer_route where transport_type='round' AND cost_type='Normal' group by start_city,dest_city")->result();
		// $data['hours_based'] = $this->db->query("SELECT * FROM transfer_route where  cost_type='HourBased'")->result();
		$data['buildpackage'] = $this->db->where('queryId', $q_id)->get('querypackage')->row();

		// $data['excursion']= $this->db->get('excursion')->result();
		$data['excursion_sic'] = $this->db->query("SELECT * FROM excursion WHERE type='SIC' ")->result();
		$data['excursion_pvt'] = $this->db->query("SELECT * FROM excursion WHERE type='PVT' ")->result();
		$data['excursion_TKT'] = $this->db->query("SELECT * FROM excursion WHERE type='TKT' ")->result();

		$data['listcities'] = $this->db->get('city_master')->result();

		$data['usd_to_aed'] = $this->db->get_where('currency_data', array('id' => 1))->row();
		
		// echo '<pre>';print_r($data);exit;	
		$this->load->view('query/build_package', $data);
	}

	public function buildPackageEdit($q_id = '')
	{
		//echo '<pre>';print_r($q_id);exit;
		$data["internal_query"] = $this->db->where('query_id', $q_id)->where('query_type', 'package')->where('transfer_type', 'internal')->get('query_transfer')->result();
		$data['return_query'] = $this->db->where('query_id', $q_id)->where('query_type', 'package')->where('transfer_type', 'return')->get('query_transfer')->result();
		$data['package_details'] = $this->db->where('queryId', $q_id)->get('querypackage')->row();

		$data["internal_query1"] = $this->db->where('query_id', $q_id)->where('query_type', 'meals')->where('transfer_type', 'internal')->get('query_transfer')->result();
		$data['return_query1'] = $this->db->where('query_id', $q_id)->where('query_type', 'meals')->where('transfer_type', 'return')->get('query_transfer')->result();
		
		$data["visa_query"] = $this->db->where('query_id', $q_id)->get('query_visa')->result();

		$data["pvt_query"] = $this->db->where('query_id', $q_id)->where('excursion_type', 'PVT')->get('query_excursion')->result();
		$data['sic_query'] = $this->db->where('query_id', $q_id)->where('excursion_type', 'SIC')->get('query_excursion')->result();
		$data['tkt_query'] = $this->db->where('query_id', $q_id)->where('excursion_type', 'TKT')->get('query_excursion')->result();
		
		$data["meal_query"] = $this->db->where('query_id', $q_id)->get('query_meal')->result();

		$data["hotel_query"] = $this->db->where('query_id', $q_id)->get('query_hotel')->result();
		$data['meals'] = $this->db->where('query_id', $q_id)->where('query_type', 'excursion')->get('query_meal')->row();

		$this->db->select("cb.b2bfirstName,cb.b2bcompanyName,cb.query_id,qp.specificDate,qp.goingTo,qp.Packagetravelers,qp.infant,
		qp.child,cb.reportsTo,cb.b2bEmail,qp.room");

		$this->db->from("b2bcustomerquery cb");

		$this->db->where('qp.queryId', $q_id);
		$this->db->join('querypackage qp', 'cb.query_id=qp.queryId', 'LEFT');
		$data['view'] = $this->db->get()->row();

		$user_id = $this->session->userdata()['admin_id'];
		$data['admin_user'] = $this->db->where('id', $user_id)->get('users')->row();

		$data['listSuppliers'] = $this->db->get('supplier')->result();
		$data['transfer_route'] = $this->db->query("SELECT * FROM transfer_route where transport_type='oneway' AND cost_type='Normal' group by start_city,dest_city")->result();
		$data['transfer_route1'] = $this->db->query("SELECT * FROM transfer_route where transport_type='round' AND cost_type='Normal' group by start_city,dest_city")->result();
		// $data['hours_based'] = $this->db->query("SELECT * FROM transfer_route where  cost_type='HourBased'")->result();
		$data['buildpackage'] = $this->db->where('queryId', $q_id)->get('querypackage')->row();
		$data['otb'] = $this->db->where('query_id', $q_id)->where('visa_category','OTB')->get('query_visa')->row();

		// $data['excursion']= $this->db->get('excursion')->result();
		$data['excursion_sic'] = $this->db->query("SELECT * FROM excursion WHERE type='SIC' ")->result();
		$data['excursion_pvt'] = $this->db->query("SELECT * FROM excursion WHERE type='PVT' ")->result();
		$data['excursion_TKT'] = $this->db->query("SELECT * FROM excursion WHERE type='TKT' ")->result();

		$data['listcities'] = $this->db->get('city_master')->result();

		$data['usd_to_aed'] = $this->db->get_where('currency_data', array('id' => 1))->row();
		
		// echo '<pre>';print_r($data);exit;	
		$this->load->view('query/edit/build_package_edit', $data);
	}

	public function buildHotelEdit($q_id = '')
	{
		//echo '<pre>';print_r($q_id);exit;
		$data["hotel_query"] = $this->db->where('query_id', $q_id)->get('query_hotel')->result();
		$data['package_details'] = $this->db->where('queryId', $q_id)->get('querypackage')->row();

		//echo '<pre>';print_r($q_id);exit;
		$this->db->select("cb.b2bfirstName,cb.b2bcompanyName,cb.query_id,qp.specificDate,qp.goingTo,qp.Packagetravelers,qp.infant,qp.room,
		qp.child,cb.reportsTo,cb.b2bEmail");

		$this->db->from("b2bcustomerquery cb");

		$this->db->where('qp.queryId', $q_id);
		$this->db->join('querypackage qp', 'cb.query_id=qp.queryId', 'LEFT');
		$data['view'] = $this->db->get()->row();
		$user_id = $this->session->userdata()['admin_id'];
		$data['admin_user'] = $this->db->where('id', $user_id)->get('users')->row();

		$data['listSuppliers'] = $this->db->get('supplier')->result();
		$data['buildpackage'] = $this->db->where('queryId', $q_id)->get('querypackage')->row();
		$data['usd_to_aed'] = $this->db->get_where('currency_data', array('id' => 1))->row();
		
		// echo '<pre>';print_r($data);exit;	
		$this->load->view('query/edit/build_hotel_edit', $data);
	}


	public function get_hotels()
	{
		$city = $this->input->post('city');
		$category = $this->input->post('category');
		//echo json_encode($city);
		$this->db->select("hotelname,id");
		$this->db->from("hotel");
		$this->db->where('hotelmapaddress', $city);
		$this->db->where('hotelstars', $category);
		$hotels = $this->db->get()->result();
		echo json_encode($hotels);
	}

	public function get_hotels_by_availability()
	{

		$city = $this->input->post('city');
		$date = $this->input->post('date');
		$nights = $this->input->post('nights');
		$category = $this->input->post('category');

		$date_ci = strtotime($date);
		$date_co = strtotime("+".($nights - 1)." day", $date_ci);
		$date_co_new = date('Y-m-d', $date_co);

		$hotel_id = $this->input->post('hotel_id');
		
		$this->db->select("*");
		$this->db->from('rooms');
		$this->db->where('hotelname', $hotel_id);
		// $this->db->where('from_date >=', $date);
		// $this->db->where('to_date <=', (string)$date_co_new);
		$query = $this->db->get()->result();
		
		$from_room_types = [];
		foreach($query as $key => $val){

			if($val->from_date <= $date){
				array_push($from_room_types,$val->roomtype);
			} 
		}
		// echo json_encode($from_room_types);

		// $room_types = [];
		// foreach($from_room_types as $key => $val){

		// 	if($val->to_date >= $date_co_new){
		// 		array_push($room_types,$val->roomtype);
		// 	} 
		// 	// else {
		// 	// 	echo "false";
		// 	// }
		// }
		echo json_encode(array_unique($from_room_types));
	}

	
	public function getHotelCalculation()
	{
		$pax_adult = $this->input->post('pax_adult');
		$pax_child = $this->input->post('pax_child');
		$pax_infants = $this->input->post('pax_infants');


		// $rows_count = $this->input->post('total_rows');
		$QueryId = $this->input->post('query_id');
		$buildpackage = $this->db->where('queryId', $QueryId)->get('querypackage')->row();
		$with_or_wo_bed = explode(",",$buildpackage->child_with_or_wo_bed);
		$no_adults_room = explode(",",$buildpackage->adult_per_room);
		$no_childs_room = explode(",",$buildpackage->child_per_room);
		$cwb_room = explode(",",$buildpackage->cwb_per_room);
		$cnb_room = explode(",",$buildpackage->cnb_per_room);

		$no_childs_room_new = [];
		$cwb_room_new = [];
		$cnb_room_new = [];

		$tableData = $this->input->post('data');
		$rows_count = count($tableData[0]['group_type']);
		$rows_count_new = $rows_count / count($no_childs_room);

		for($i=1;$i<=$rows_count_new;$i++){
			foreach($no_childs_room as $key => $val){
				array_push($no_childs_room_new,$val);
				array_push($cwb_room_new,isset($cwb_room[$key]) ? $cwb_room[$key] : 0);
				array_push($cnb_room_new,isset($cnb_room[$key]) ? $cnb_room[$key] : 0);
			}
		}

		// print_r("===========");
		// print_r($no_childs_room_new);
		// print_r("===========");
		// print_r($cwb_room);exit;
		$datas =  array();
		for ($x = 0; $x < $rows_count; $x++) {
			$datas[$x]['nights'] = $tableData[0]['nights'][$x];
			$datas[$x]['group_type'] = $tableData[0]['group_type'][$x];
			$datas[$x]['hotel_id'] = $tableData[0]['hotelName'][$x];
			$datas[$x]['room_type'] = $tableData[0]['roomType'][$x];
			$datas[$x]['bed_types'] = $tableData[0]['bedType'][$x];
			$datas[$x]['extra_with_adult'] = $tableData[0]['extra_with_adult'][$x];
			$datas[$x]['extra_with_child'] = $tableData[0]['extra_with_child'][$x];
			$datas[$x]['extra_without_bed'] = $tableData[0]['extra_without_bed'][$x];
			$datas[$x]['no_childs_room'] = $no_childs_room_new[$x];
			$datas[$x]['cwb'] = isset($cwb_room_new[$x]) && !empty($cwb_room_new[$x])  ? $cwb_room_new[$x] : 0;
			$datas[$x]['cnb'] = isset($cnb_room_new[$x]) && !empty($cnb_room_new[$x]) ? $cnb_room_new[$x] : 0;
			
			$datas[$x]['buildHotelCity'] = $tableData[0]['buildHotelCity'][$x];
			$datas[$x]['buildCheckIns'] = $tableData[0]['buildCheckIns'][$x];
			$datas[$x]['Category'] = $tableData[0]['Category'][$x];
			$datas[$x]['get_room_types'] = $tableData[0]['get_room_types'][$x];
			$datas[$x]['sharing_types'] = $tableData[0]['sharing_types'][$x];
			
		}
		$no_of_nights = ($tableData[0]['nights']);
		// print_r($datas);exit;

		$hotel_names = [];
		foreach ($tableData[0]['hotelName'] as $key => $value) {
			$this->db->select('hotelname');
			$this->db->where('id', $value);
			$this->db->limit(1);
  			$name = $this->db->get('hotel');
			$hotel_names[] = $name->row()->hotelname;
		}

		$hotels_calculation = array();
		$hotel_calculation_data['total_pax_adult_rate'] = 0;
		$hotel_calculation_data['total_pax_child_rate'] = 0;
		$hotel_calculation_data['total_pax_wo_rate'] = 0;
		foreach ($datas as $k => $val) {
			$this->db->select("*");
			$this->db->from("rooms");
			$this->db->where('roomtype', $val['room_type']);
			$this->db->where('hotelname', $val['hotel_id']);
			$hotels_calculation[] = $this->db->get()->result_array();

			$hotels_calculation_data = array();

			if($val['get_room_types'] == "Room Only"){
				$room_val_index = 0;
			}
			elseif($val['get_room_types'] == "BB"){
				$room_val_index = 1;
			}
			elseif($val['get_room_types'] == "HB"){
				$room_val_index = 2;
			}
			elseif($val['get_room_types'] == "FB"){
				$room_val_index = 3;
			}

			if ($val['extra_with_adult']) {
				$netrate_extra_array = explode(",", $hotels_calculation[$k][0]['netrate_extra']);
				$vat_extra_array = explode(",", $hotels_calculation[$k][0]['vat_extra']);
				
				$net_rate_extra = $netrate_extra_array[$room_val_index];
			} else {
				$net_rate_extra = 0;
				$vat_extra = 0;
			}
 


			$netrate_extra_child_array = explode(",", $hotels_calculation[$k][0]['netrate_extra_child']);
			$netrate_extra_child = $netrate_extra_child_array[$room_val_index];
			// print_r($netrate_extra_child);//exit;

			$netrate_extra_wo_array = explode(",", $hotels_calculation[$k][0]['netrate_extra_wo']);
			$netrate_extra_wo = $netrate_extra_wo_array[$room_val_index];
			// print_r($netrate_extra_wo);exit;

			

			if ($val['bed_types'] == "Single") {
				$net_rate_array = explode(",", $hotels_calculation[$k][0]['netrate']);
				$vat_array = explode(",", $hotels_calculation[$k][0]['vat']);
				$net_rate = $net_rate_array[$room_val_index];

				$vat = 	$vat_array[$room_val_index];

				if (!empty($val['extra_with_adult'])) {
					$net_rate_extra_array = explode(",", $hotels_calculation[$k][0]['netrate_extra']);
					$net_rate_extra = $net_rate_extra_array[$room_val_index];
				} else {
					$net_rate_extra = 0;
				}
				
			} else if ($val['bed_types'] == "Double") {
				$net_rate_array = explode(",", $hotels_calculation[$k][0]['netrate_double']);
				$vat_array = explode(",", $hotels_calculation[$k][0]['vat_double']);

				$net_rate = $net_rate_array[$room_val_index];

				$vat = 	$vat_array[$room_val_index];

				if (!empty($val['extra_with_adult'])) {
					$net_rate_extra_array = explode(",", $hotels_calculation[$k][0]['netrate_extra']);
					$net_rate_extra = $net_rate_extra_array[$room_val_index];
				} else {
					$net_rate_extra = 0;
				}
				
			} else if ($val['bed_types'] == "Triple") {
				$net_rate_array = explode(",", $hotels_calculation[$k][0]['netrate_triple']);
				$vat_array = explode(",", $hotels_calculation[$k][0]['vat_triple']);

				$net_rate = $net_rate_array[$room_val_index];

				$vat = 	$vat_array[$room_val_index];

				if (!empty($val['extra_with_adult'])) {
					$net_rate_extra_array = explode(",", $hotels_calculation[$k][0]['netrate_extra']);
					$net_rate_extra = $net_rate_extra_array[$room_val_index];
				} else {
					$net_rate_extra = 0;
				}
			} else {
				$net_rate = 0;
				$vat = 0;
				$net_rate_extra = 0;
			}

			$total_per_pax_adult = (int)$net_rate + (int)$vat + (int)$net_rate_extra;

			$total_per_pax_child = (int)$netrate_extra_child;

			$total_per_pax_wo = (int)$netrate_extra_wo;


			$hotel_calculation_data['total_pax_adult_rate'] += (($total_per_pax_adult)) *  $val['nights'];

			$hotel_calculation_data['total_pax_child_rate'] += (($total_per_pax_child * ($val['cwb'])) * $val['nights']);

			$hotel_calculation_data['total_pax_wo_rate'] += (($total_per_pax_wo * ($val['cnb'])) * $val['nights']);

			// print_r("====================");
			// print_r($total_per_pax_adult);
			// print_r($total_per_pax_child);
			// print_r($total_per_pax_wo);
			// print_r("====================");

		}

		
		// 100 * 3 = 300 * 2 =  / 3
		$hotel_query_data = [
			'nights' => implode(',',$tableData[0]['nights']),
			'hotel_id' => implode(',',$tableData[0]['hotelName']),
			'room_type' => implode(',',$tableData[0]['roomType']),
			'group_type' => implode(',',$tableData[0]['group_type']),

			'hotel_name' => implode(',',$hotel_names),
			'category' => implode(',',$tableData[0]['Category']),
			'checkin' => implode(',',$tableData[0]['buildCheckIns']),
			'hotel_city' => implode(',',$tableData[0]['buildHotelCity']),
			
			'adult_pax' => $pax_adult,
			'child_pax' => $pax_child,
			'infant_pax' => $pax_infants,
			
			'adult_price' => $hotel_calculation_data['total_pax_adult_rate'],
			'child_price' => $hotel_calculation_data['total_pax_child_rate'],
			'infant_price' => 0,
			'cnb_price' => $hotel_calculation_data['total_pax_wo_rate'],

			'type' => implode(',',$tableData[0]['get_room_types']),
			'bed_type' => implode(',',$tableData[0]['bedType']),
			"adult_extra_bed" => implode(',',$tableData[0]['extra_with_adult']),
			"child_extra_bed" => implode(',',$tableData[0]['extra_with_child']),
			"infant_extra_bed" => implode(',',$tableData[0]['extra_without_bed']),
			"sharing_type" => implode(',',$tableData[0]['sharing_types']),
		];
		// echo"<pre>";print_r($QueryId);print_r($hotel_query_data);exit;
		// return;

		$query_data = $this->db->where('query_id', $QueryId)->get('query_hotel');
		if ($query_data->num_rows() > 0) {
			$this->db->where('query_id', $QueryId);
			$this->db->update('query_hotel',$hotel_query_data);
		} else {
			$hotel_query_data['query_id'] = $QueryId;
			$this->db->insert('query_hotel',$hotel_query_data);
		}

		
		echo json_encode($hotel_calculation_data);
	}


	public function getHotelCalculationNew()
	{
		// echo "<pre>";print_r($this->input->post());exit;
		$pax_adult = $this->input->post('pax_adult');
		$pax_child = $this->input->post('pax_child');
		$pax_infants = $this->input->post('pax_infants');


		// $rows_count = $this->input->post('total_rows');
		$QueryId = $this->input->post('query_id');
		$buildpackage = $this->db->where('queryId', $QueryId)->get('querypackage')->row();
		$with_or_wo_bed = explode(",",$buildpackage->child_with_or_wo_bed);
		$no_adults_room = explode(",",$buildpackage->adult_per_room);
		$no_childs_room = explode(",",$buildpackage->child_per_room);
		$cwb_room = explode(",",$buildpackage->cwb_per_room);
		$cnb_room = explode(",",$buildpackage->cnb_per_room);

		$no_childs_room_new = [];
		$cwb_room_new = [];
		$cnb_room_new = [];

		$tableData = $this->input->post('data');
		$rows_count = count($tableData[0]['group_type']);
		$rows_count_new = $rows_count / count($no_childs_room);

		$db_hotel_query_data_details = $this->db->where('query_id', $QueryId)->get('query_hotel_details');
		if ($db_hotel_query_data_details->num_rows() > 0) {
			$this->db->where('query_id', $QueryId)->delete('query_hotel_details');
		}
		foreach($tableData[0]['bedType'] as $key1 => $val1){
			$this->db->select('hotelname');
			$this->db->where('id', $tableData[0]['hotelName'][$key1]);
			$this->db->limit(1);
  			$name = $this->db->get('hotel');
			// $hotel_names[] = $name->row()->hotelname;

			$hotel_query_data_details = [
				'query_id' => $QueryId,
				'query_type' => "",
				'hotel_city' => $tableData[0]['buildHotelCity'][$key1],
				'hotel_id' => $tableData[0]['hotelName'][$key1],
				'hotel_name' => $name->row()->hotelname,
				'hotel_category' => $tableData[0]['Category'][$key1],
				'no_of_nights' => $tableData[0]['nights'][$key1],
				'check_in' => $tableData[0]['buildCheckIns'][$key1],
				'check_out' => date('Y-m-d', strtotime($tableData[0]['buildCheckIns'][$key1]. ' + '.$tableData[0]['nights'][$key1].' days')),
				'room_type' => $tableData[0]['roomType'][$key1],
				'room_no' => $tableData[0]['room_number'][$key1],
				'bed_type' => $tableData[0]['bedType'][$key1],
				'group_type' => $tableData[0]['group_type'][$key1],
				'type' => $tableData[0]['get_room_types'][$key1], 
				'adult_per_pax' => $tableData[0]['adult_per_room'][$key1],
				'child_per_pax' => $tableData[0]['child_per_room'][$key1],
				'created_by' => $this->session->userdata('admin_id'),
			];

			// $db_hotel_query_data_details = $this->db->where('query_id', $QueryId)->where('check_in', $tableData[0]['buildCheckIns'][$key1])->where('room_no', $tableData[0]['room_number'][$key1])->get('query_hotel_details');
			// // $db_hotel_query_data_details = $this->db->where('query_id', $QueryId)->get('query_hotel_details');
			// if ($db_hotel_query_data_details->num_rows() > 0) {
			// 	// $this->db->where('query_id', $QueryId);
			// 	// $this->db->where('check_in', $tableData[0]['buildCheckIns'][$key1]);
			// 	// $this->db->where('room_no', $tableData[0]['room_number'][$key1]);
			// 	// $this->db->update('query_hotel_details',$hotel_query_data_details);
			// 	$this->db->where('query_id', $QueryId)->delete('query_hotel_details');
			// } else {
			// 	$this->db->insert('query_hotel_details',$hotel_query_data_details);
			// }

			$this->db->insert('query_hotel_details',$hotel_query_data_details);

		}

		$single_sharing_pax = 0;
		$double_sharing_pax = 0;
		$triple_sharing_pax = 0;


		foreach($tableData[0]['bedType'] as $key => $val){
			if($val == 'Single'){ $single_sharing_pax += $tableData[0]['adult_per_room'][$key];  }
			elseif($val == 'Double'){ $double_sharing_pax += $tableData[0]['adult_per_room'][$key]; }
			elseif($val == 'Triple'){ $triple_sharing_pax += $tableData[0]['adult_per_room'][$key];  }
		}
		
		$hotel_calculation_data['single_sharing_pax'] = $single_sharing_pax;
		$hotel_calculation_data['double_sharing_pax'] = $double_sharing_pax;
		$hotel_calculation_data['triple_sharing_pax'] = $triple_sharing_pax;

		for($i=1;$i<=$rows_count_new;$i++){
			foreach($no_childs_room as $key => $val){
				array_push($no_childs_room_new,$val);
				array_push($cwb_room_new,isset($cwb_room[$key]) ? $cwb_room[$key] : 0);
				array_push($cnb_room_new,isset($cnb_room[$key]) ? $cnb_room[$key] : 0);
			}
		}

		
		$datas =  array();
		for ($x = 0; $x < $rows_count; $x++) {
			$datas[$x]['nights'] = $tableData[0]['nights'][$x];
			$datas[$x]['group_type'] = $tableData[0]['group_type'][$x];
			$datas[$x]['hotel_id'] = $tableData[0]['hotelName'][$x];
			$datas[$x]['room_type'] = $tableData[0]['roomType'][$x];
			$datas[$x]['bed_types'] = $tableData[0]['bedType'][$x];
			$datas[$x]['extra_with_adult'] = $tableData[0]['extra_with_adult'][$x];
			// $datas[$x]['extra_with_child'] = $tableData[0]['extra_with_child'][$x];
			// $datas[$x]['extra_without_bed'] = $tableData[0]['extra_without_bed'][$x];
			$datas[$x]['no_childs_room'] = $no_childs_room_new[$x];
			$datas[$x]['cwb'] = isset($cwb_room_new[$x]) && !empty($cwb_room_new[$x])  ? $cwb_room_new[$x] : 0;
			$datas[$x]['cnb'] = isset($cnb_room_new[$x]) && !empty($cnb_room_new[$x]) ? $cnb_room_new[$x] : 0;
			
			$datas[$x]['buildHotelCity'] = $tableData[0]['buildHotelCity'][$x];
			$datas[$x]['buildCheckIns'] = $tableData[0]['buildCheckIns'][$x];
			$datas[$x]['Category'] = $tableData[0]['Category'][$x];
			$datas[$x]['get_room_types'] = $tableData[0]['get_room_types'][$x];
			// $datas[$x]['sharing_types'] = $tableData[0]['sharing_types'][$x];

			$datas[$x]['child_per_room_wo_bed'] = $tableData[0]['child_per_room_wo_bed'][$x];
			$datas[$x]['adult_per_room'] = $tableData[0]['adult_per_room'][$x];
			$datas[$x]['child_per_room'] = $tableData[0]['child_per_room'][$x];

			
		}
		$no_of_nights = ($tableData[0]['nights']);
		// print_r($datas);exit;

		$hotel_names = [];
		foreach ($tableData[0]['hotelName'] as $key => $value) {
			$this->db->select('hotelname');
			$this->db->where('id', $value);
			$this->db->limit(1);
  			$name = $this->db->get('hotel');
			$hotel_names[] = $name->row()->hotelname;
		}

		$hotels_calculation = array();
		$hotel_calculation_data['total_pax_adult_rate'] = 0;
		$hotel_calculation_data['total_pax_adult_rate_double'] = 0;
		$hotel_calculation_data['total_pax_adult_rate_triple'] = 0;
		$hotel_calculation_data['total_pax_child_rate'] = 0;
		$hotel_calculation_data['total_pax_wo_rate'] = 0;
		foreach ($datas as $k => $val) {
			$this->db->select("*");
			$this->db->from("rooms");
			$this->db->where('roomtype', $val['room_type']);
			$this->db->where('hotelname', $val['hotel_id']);
			// $query_hotel_data[] = $this->db->get()->result_array();
			$query_hotel_data = $this->db->get()->result_array();
			
			$date_ci = strtotime($val['buildCheckIns']);
			$hotels_calculation = [];
			
			for($i=0;$i<$val['nights'];$i++) {
				$date_co = strtotime("+".($i)." day", $date_ci);
				$date_co_new = date('Y-m-d', $date_co);
				// print_r("--------{.$i.}----------\n");
				// print_r("--------{.current date.}----------\n");
				// print_r($date_co_new);
				$hotel_data = $this->db->where('roomtype', $val['room_type'])->where('hotelname', $val['hotel_id'])
				->where('from_date <=', $date_co_new)->where('to_date >=', $date_co_new)->get('rooms')->row();

				// print_r("------------------\n");
				// print_r("--------{.$i.}----------\n");
				// print_r($date_co_new);
				// print_r("--------{.db date.}----------\n");
				// print_r($hotel_data->from_date);
				// print_r("--------{.$i.}----------\n");

				// foreach($query_hotel_data as $key2 => $val2){
					
				// 	$from_dates = [];
				// 	for($j=0;$j<count($query_hotel_data);$j++){
				// 		array_push($from_dates,$query_hotel_data[$j]['from_date']);
				// 	}
				// 	$max_key = (array_keys($from_dates, max($from_dates)));
				// // 	print_r("--------max_key----------\n");
				// // print_r( $query_hotel_data[$max_key[0]]['from_date']);
				// // print_r("---------max_key---------\n");
				// 	if($val2['to_date'] >= $date_co_new && $val2['from_date'] <= $val['buildCheckIns']){
				// 		// print_r("---------1  ['.$i.']  ---------\n");
				// 		// print_r($val2['from_date']);
				// 		// print_r("--------1  ['.$i.']  ----------\n");
				// 		// print_r($date_co_new);
				// 		// print_r("------------------\n");
				// 		// print_r($val2['netrate_double']);
				// 		// print_r("------------------\n");
				// 		array_push($hotels_calculation,$val2);
				// 	} elseif($val2['to_date'] >= $date_co_new && $query_hotel_data[$max_key[0]]['from_date'] <= $date_co_new) {
				// 		array_push($hotels_calculation,$query_hotel_data[$max_key[0]]);
				// 	}

					


				// 	// if($val2['to_date'] >= $date_co_new ){
				// 	// 	$current_val = $val2['from_date'];
				// 	// 	$next_val = next($query_hotel_data)['from_date'] ?? false;
							
				// 	// 		if($current_val > $next_val) {     
				// 	// 			array_push($hotels_calculation,$val2);
				// 	// 		} else {
				// 	// 			array_push($hotels_calculation,next($query_hotel_data));
				// 	// 		}
				// 	// 	// print_r("----------2  ['.$i.']  --------\n");
				// 	// 	// print_r($val2['from_date']);
				// 	// 	// print_r("----------2  ['.$i.']  --------\n");
				// 	// 	// print_r($date_co_new);
				// 	// 	// print_r("------------------\n");
				// 	// 	// array_push($hotels_calculation,$val2);
				// 	// }

				// }

		    $hotels_calculation_data = array();

			if($val['get_room_types'] == "Room Only"){
				$room_val_index = 0;
			}
			elseif($val['get_room_types'] == "BB"){
				$room_val_index = 1;
			}
			elseif($val['get_room_types'] == "HB"){
				$room_val_index = 2;
			}
			elseif($val['get_room_types'] == "FB"){
				$room_val_index = 3;
			}
			
			// print_r("-----------------------------");
			// print_r($hotel_data);
			// print_r("-----------------------------");

			if ($val['extra_with_adult']) {
				$netrate_extra_array = explode(",", $hotel_data->netrate_extra);
				$vat_extra_array = explode(",", $hotel_data->vat_extra);
				
				$net_rate_extra = $netrate_extra_array[$room_val_index];
			} else {
				$net_rate_extra = 0;
				$vat_extra = 0;
			}
 

			$netrate_extra_child_array = explode(",", $hotel_data->netrate_extra_child);
			$netrate_extra_child = $netrate_extra_child_array[$room_val_index];
			// print_r($netrate_extra_child);//exit;

			$netrate_extra_wo_array = explode(",", $hotel_data->netrate_extra_wo);
			$netrate_extra_wo = $netrate_extra_wo_array[$room_val_index];
			// print_r($netrate_extra_wo);exit;

			

			if ($val['bed_types'] == "Single") {
				$net_rate_array = explode(",", $hotel_data->netrate);
				$vat_array = explode(",", $hotel_data->vat);
				$net_rate = $net_rate_array[$room_val_index];

				$vat = 	$vat_array[$room_val_index];

				if (!empty($val['extra_with_adult'])) {
					$net_rate_extra_array = explode(",", $hotel_data->netrate_extra);
					$net_rate_extra = $net_rate_extra_array[$room_val_index];
				} else {
					$net_rate_extra = 0;
				}
				
			} else if ($val['bed_types'] == "Double") {
				$net_rate_array = explode(",", $hotel_data->netrate_double);
				

				$vat_array = explode(",", $hotel_data->vat_double);

				$net_rate = (int)$net_rate_array[$room_val_index];
				$vat = 	(int)$vat_array[$room_val_index];
				
				if (!empty($val['extra_with_adult'])) {
					$net_rate_extra_array = explode(",", $hotel_data->netrate_extra);
					$net_rate_extra = $net_rate_extra_array[$room_val_index];
				} else {
					$net_rate_extra = 0;
				}
				
			} else if ($val['bed_types'] == "Triple") {
				$net_rate_array = explode(",", $hotel_data->netrate_triple);
				$vat_array = explode(",", $hotel_data->vat_triple);

				$net_rate = $net_rate_array[$room_val_index];

				$vat = 	$vat_array[$room_val_index];

				if (!empty($val['extra_with_adult'])) {
					$net_rate_extra_array = explode(",", $hotel_data->netrate_extra);
					$net_rate_extra = $net_rate_extra_array[$room_val_index];
				} else {
					$net_rate_extra = 0;
				}
			} else {
				$net_rate = 0;
				$vat = 0;
				$net_rate_extra = 0;
			}

			$total_per_pax_adult = (int)$net_rate + (int)$vat + (int)$net_rate_extra;

			$total_per_pax_child = (int)$netrate_extra_child;

			$total_per_pax_wo = (int)$netrate_extra_wo;

			if ($val['bed_types'] == "Single") {
				$hotel_calculation_data['total_pax_adult_rate'] += (($total_per_pax_adult)) * ($val['adult_per_room'] / 1 ) *  1;
			} else if ($val['bed_types'] == "Double") {
				$hotel_calculation_data['total_pax_adult_rate_double'] += (($total_per_pax_adult)) * ($val['adult_per_room'] > 1 ? ($val['adult_per_room'] / 2) : 1)
				 * 1;
			} else if ($val['bed_types'] == "Triple") {
				$hotel_calculation_data['total_pax_adult_rate_triple'] += (($total_per_pax_adult)) * ($val['adult_per_room'] > 1 ? ($val['adult_per_room'] / 3) : 1)
				 *  1;
			}

			$hotel_calculation_data['total_pax_child_rate'] += (($total_per_pax_child * ($val['cwb'])) * 1);

			$hotel_calculation_data['total_pax_wo_rate'] += (($total_per_pax_wo * ($val['cnb'])) * 1);

		}

			// print_r("====================");
			// print_r($hotel_calculation_data);
			// // print_r($total_per_pax_child);
			// // print_r($total_per_pax_wo);
			// print_r("====================");

		}

		
		// 100 * 3 = 300 * 2 =  / 3
		$hotel_query_data = [
			'nights' => implode(',',$tableData[0]['nights']),
			'hotel_id' => implode(',',$tableData[0]['hotelName']),
			'room_type' => implode(',',$tableData[0]['roomType']),
			'group_type' => implode(',',$tableData[0]['group_type']),

			'hotel_name' => implode(',',$hotel_names),
			'category' => implode(',',$tableData[0]['Category']),
			'checkin' => implode(',',$tableData[0]['buildCheckIns']),
			'hotel_city' => implode(',',$tableData[0]['buildHotelCity']),
			
			'adult_pax' => $pax_adult,
			'child_pax' => $pax_child,
			'infant_pax' => $pax_infants,
			
			'adult_price' => $hotel_calculation_data['total_pax_adult_rate'],
			'child_price' => $hotel_calculation_data['total_pax_child_rate'],
			'infant_price' => 0,
			'cnb_price' => $hotel_calculation_data['total_pax_wo_rate'],

			'type' => implode(',',$tableData[0]['get_room_types']),
			'bed_type' => implode(',',$tableData[0]['bedType']),
			"adult_extra_bed" => implode(',',$tableData[0]['extra_with_adult']),
			"child_extra_bed" => implode(',',$tableData[0]['extra_with_child']),
			"infant_extra_bed" => implode(',',$tableData[0]['extra_without_bed']),
			"sharing_type" => implode(',',$tableData[0]['sharing_types']),
		];
		// echo"<pre>";print_r($QueryId);print_r($hotel_query_data);exit;
		// return;

		$query_data = $this->db->where('query_id', $QueryId)->get('query_hotel');
		if ($query_data->num_rows() > 0) {
			$this->db->where('query_id', $QueryId);
			$this->db->update('query_hotel',$hotel_query_data);
		} else {
			$hotel_query_data['query_id'] = $QueryId;
			$this->db->insert('query_hotel',$hotel_query_data);
		}

		
		echo json_encode($hotel_calculation_data);
	}

	
	public function get_resturant_name()
	{
		// $type_transfer = $this->input->post('transfer');
		$type_resturant = $this->input->post('rest_type');
			$this->db->select("id,resturant_name");
			$this->db->from("meals");
			$this->db->where('resturant_type', $type_resturant);
			// $this->db->where('transfer', $type_transfer);
			$resturant_name = $this->db->get()->result();
			// echo"<pre>";print_r($resturant_name);exit;
		echo json_encode($resturant_name);
	}

	public function saveTransferData()
	{
		$query_id = $this->input->post('query_id');
		$query_type = $this->input->post('query_type');
		$pax_adult = $this->input->post('pax_adult');
		$pax_child = $this->input->post('pax_child');
		$pax_infants = $this->input->post('pax_infants');

		$tableData = $this->input->post('data');

		if(isset($tableData[0]['internal_transfer_pickup'])) {

		$priceperperson_internal = 0;
		$person= $pax_adult + $pax_child;

		foreach ($tableData[0]['internal_transfer_pickup'] as $key => $value) {
			$pickup = $tableData[0]['internal_transfer_pickup'][$key];
			$dropoff = $tableData[0]['internal_transfer_dropoff'][$key];

			$dropoff_query = $this->db->like('start_city', $pickup)->where('dest_city', $dropoff)->where('seat_capacity >=', $person)->where('transport_type', 'oneway')->get('transfer_route')->result();

			$price = $dropoff_query[0]->cost;
			$priceperperson_internal += $price/$person;
		}


		$internal_transfer_data = [
			'query_id' =>  $query_id ,
			'query_type' =>  $query_type ,
			'transfer_type' =>  'internal',
			'transfer_date' =>  implode(',',$tableData[0]['internal_transfer_date']),
			'pickup' =>  implode(',',$tableData[0]['internal_transfer_pickup']),
			'dropoff' =>  implode(',',$tableData[0]['internal_transfer_dropoff']),
			'transfer_route' =>  implode(',',$tableData[0]['internal_transfer_route']),
			'adult_pax' =>  $pax_adult,
			'child_pax' =>  $pax_child,
			'adult_price' => $priceperperson_internal,
			'child_price'  =>  $priceperperson_internal,
			'created_by' =>   $this->session->userdata('admin_id'),
		];

		$query = $this->db->where('query_id', $query_id)->where('transfer_type', 'internal')->where('query_type', $query_type)->get('query_transfer');
		if ($query->num_rows() > 0) {
			$this->db->where('query_id', $query_id);
			$this->db->where('transfer_type', 'internal');
			$this->db->where('query_type', $query_type);
			$this->db->update('query_transfer',$internal_transfer_data);
		} else {
			$this->db->insert('query_transfer', $internal_transfer_data);
		}

		}

		// ----------------------------------------- return -------------------------------------------------

		if(isset($tableData[0]['return_transfer_pickup'])) {

			$priceperperson_return = 0;
			$person= $pax_adult + $pax_child;
	
			foreach ($tableData[0]['return_transfer_pickup'] as $key => $value) {
				$pickup = $tableData[0]['return_transfer_pickup'][$key];
				$dropoff = $tableData[0]['return_transfer_dropoff'][$key];
	
				$dropoff_query = $this->db->like('start_city', $pickup)->where('dest_city', $dropoff)->where('seat_capacity >=', $person)->where('transport_type', 'round')->get('transfer_route')->result();
	
				$price = $dropoff_query[0]->cost;
				$priceperperson_return += $price/$person;
			}
	
			$return_transfer_data = [
				'query_id' =>  $query_id ,
				'query_type' =>  $query_type ,
				'transfer_type' =>  'return',
				'transfer_date' =>  implode(',',$tableData[0]['return_transfer_date']),
				'pickup' =>  implode(',',$tableData[0]['return_transfer_pickup']),
				'dropoff' =>  implode(',',$tableData[0]['return_transfer_dropoff']),
				'transfer_route' =>  implode(',',$tableData[0]['return_transfer_route']),
				'adult_pax' =>  $pax_adult,
				'child_pax' =>  $pax_child,
				'adult_price' => $priceperperson_return,
				'child_price'  =>  $priceperperson_return,
				'created_by' =>   $this->session->userdata('admin_id'),
			];
	
			$query = $this->db->where('query_id', $query_id)->where('transfer_type', 'return')->where('query_type', $query_type)->get('query_transfer');
			if ($query->num_rows() > 0) {
				$this->db->where('query_id', $query_id);
				$this->db->where('transfer_type', 'return');
				$this->db->where('query_type', $query_type);
				$this->db->update('query_transfer',$return_transfer_data);
			} else {
				$this->db->insert('query_transfer', $return_transfer_data);
			}

	
			}
			echo json_encode("transfer details saved successfully");
	}

	public function saveTransferDataEdit()
	{
		// $pickup=$_POST['pickup'];
		// $dropoff=$_POST['dropoff'];
		// $person=$_POST['person'];
	
		
		// $dropoff=$this->db->query("SELECT * FROM `transfer_route` WHERE start_city='$pickup' AND  dest_city='$dropoff' AND seat_capacity >= '$person' AND transport_type='round'  LIMIT 1")->row();
	
		// $price=$dropoff->cost;
		
	  	// $priceperperson=$price/$person;
		// $route_name = !empty($dropoff->route_name) ? $dropoff->route_name : "";
		// $dropoff =  !empty($dropoff) ? $dropoff : array() ;
	 	// echo json_encode(array("data"=>$priceperperson,"route_name"=>$route_name,'row_data' =>$dropoff ));


	// 	 $pickup=$_POST['pickup'];
	// 	 $dropoff=$_POST['dropoff'];
	// 	 $person=$_POST['person'];
	// 	 $dropoff=$this->db->query("SELECT * FROM `transfer_route` WHERE start_city='$pickup' AND  dest_city='$dropoff' AND seat_capacity >= '$person' AND transport_type='oneway'  LIMIT 1")->row();
		 
	// 	 if(empty($dropoff)){
	// 		 $dropoff = "";
	// 		 $dropoff = $this->db->query("SELECT * FROM `transfer_route` WHERE start_city='$pickup' AND  dest_city='$dropoff' AND seat_capacity <= '$person' AND transport_type='oneway'  LIMIT 1")->row();
	// 	 } 
 
	// 	 $price=$dropoff->cost;
		 
	// 	 $priceperperson = $price/$person;
	// 	 $route_name = !empty($dropoff->route_name) ? $dropoff->route_name : "";
	// 	 $dropoff =  !empty($dropoff) ? $dropoff : array() ;
	//    echo json_encode(array("data"=>$priceperperson,"route_name"=>$route_name,'row_data' =>$dropoff ));

  		$query_id = $this->input->post('query_id');
		$query_type = $this->input->post('query_type');
		$pax_adult = $this->input->post('pax_adult');
		$pax_child = $this->input->post('pax_child');
		$pax_infants = $this->input->post('pax_infants');

		$tableData = $this->input->post('data');
		if(isset($tableData[0]['internal_transfer_pickup'])) {

		$priceperperson_internal = 0;
		$person= $pax_adult + $pax_child;

		foreach ($tableData[0]['internal_transfer_pickup'] as $key => $value) {
			$pickup = $tableData[0]['internal_transfer_pickup'][$key];
			$dropoff = $tableData[0]['internal_transfer_dropoff'][$key];

			$dropoff_query = $this->db->like('start_city', $pickup)->where('dest_city', $dropoff)->where('seat_capacity >=', $person)->where('transport_type', 'oneway')->get('transfer_route')->result();

			$price = $dropoff_query[0]->cost;
			$priceperperson_internal += $price/$person;
		}


		$internal_transfer_data = [
			'query_id' =>  $query_id ,
			'query_type' =>  $query_type ,
			'transfer_type' =>  'internal',
			'transfer_date' =>  implode(',',$tableData[0]['internal_transfer_date']),
			'pickup' =>  implode(',',$tableData[0]['internal_transfer_pickup']),
			'dropoff' =>  implode(',',$tableData[0]['internal_transfer_dropoff']),
			'transfer_route' =>  implode(',',$tableData[0]['internal_transfer_route']),
			'adult_pax' =>  $pax_adult,
			'child_pax' =>  $pax_child,
			'adult_price' => $priceperperson_internal,
			'child_price'  =>  $priceperperson_internal,
			'created_by' =>   $this->session->userdata('admin_id'),
		];

		$query = $this->db->where('query_id', $query_id)->where('transfer_type', 'internal')->where('query_type', $query_type)->get('query_transfer');
		if ($query->num_rows() > 0) {
			$this->db->where('query_id', $query_id);
			$this->db->where('transfer_type', 'internal');
			$this->db->where('query_type', $query_type);
			$this->db->update('query_transfer',$internal_transfer_data);
		} else {
			$this->db->insert('query_transfer', $internal_transfer_data);
		}


		// echo json_encode("transfer details saved successfully");
		}

		// ----------------------------------------- return -------------------------------------------------

		if(isset($tableData[0]['return_transfer_pickup'])) {

			$priceperperson_return = 0;
			$person= $pax_adult + $pax_child;
	
			foreach ($tableData[0]['return_transfer_pickup'] as $key => $value) {
				$pickup = $tableData[0]['return_transfer_pickup'][$key];
				$dropoff = $tableData[0]['return_transfer_dropoff'][$key];
	
				$dropoff_query = $this->db->like('start_city', $pickup)->where('dest_city', $dropoff)->where('seat_capacity >=', $person)->where('transport_type', 'round')->get('transfer_route')->result();
	
				$price = $dropoff_query[0]->cost;
				$priceperperson_return += $price/$person;
			}
	
			$return_transfer_data = [
				'query_id' =>  $query_id ,
				'query_type' =>  $query_type ,
				'transfer_type' =>  'return',
				'transfer_date' =>  implode(',',$tableData[0]['return_transfer_date']),
				'pickup' =>  implode(',',$tableData[0]['return_transfer_pickup']),
				'dropoff' =>  implode(',',$tableData[0]['return_transfer_dropoff']),
				'transfer_route' =>  implode(',',$tableData[0]['return_transfer_route']),
				'adult_pax' =>  $pax_adult,
				'child_pax' =>  $pax_child,
				'adult_price' => $priceperperson_return,
				'child_price'  =>  $priceperperson_return,
				'created_by' =>   $this->session->userdata('admin_id'),
			];
	
			$query = $this->db->where('query_id', $query_id)->where('transfer_type', 'return')->where('query_type', $query_type)->get('query_transfer');
			if ($query->num_rows() > 0) {
				$this->db->where('query_id', $query_id);
				$this->db->where('transfer_type', 'return');
				$this->db->where('query_type', $query_type);
				$this->db->update('query_transfer',$return_transfer_data);
			} else {
				$this->db->insert('query_transfer', $return_transfer_data);
			}
	
			}

			echo json_encode(array("internal_price"=> isset($priceperperson_internal) ? (int)$priceperperson_internal : 0,"return_price"=> isset($priceperperson_return) ? (int)$priceperperson_return : 0 ));
		
	}


	public function getMealcalculation()
	{
		$rows_count = $this->input->post('total_rows');

		$tableData = $this->input->post('data');
		$datas =  array();
		for ($x = 0; $x < $rows_count; $x++) {

			$datas[$x]['resturants'] = $tableData[0]['resturants'][$x];
			$datas[$x]['meals'] = $tableData[0]['meals'][$x];
			$datas[$x]['meal_types'] = $tableData[0]['meal_types'][$x];
			$datas[$x]['meal_adults'] = isset($tableData[0]['meal_adults'][$x]) ? $tableData[0]['meal_adults'][$x] : 0;
			$datas[$x]['meal_childs'] = isset($tableData[0]['meal_childs'][$x]) ? $tableData[0]['meal_childs'][$x] : 0;
			$datas[$x]['no_of_meals'] = isset($tableData[0]['no_of_meals'][$x]) ? $tableData[0]['no_of_meals'][$x] : 0;
			$datas[$x]['resturants_name'] = isset($tableData[0]['resturants_name'][$x]) ? $tableData[0]['resturants_name'][$x] : "";
			$datas[$x]['resturants_transfer'] = isset($tableData[0]['resturants_transfer'][$x]) ? $tableData[0]['resturants_transfer'][$x] : "";
		}

		// print_r($datas);exit;
		$meal_calculation = array();
		$meal_calculation_data = array();
		$meal_calculation_data['adult_prices'] = 0;
		$meal_calculation_data['child_prices'] = 0;
		foreach ($datas as $k => $val) {
			$this->db->select("*");
			$this->db->from("meals");
			$this->db->where('resturant_type', $val['resturants']);
			$this->db->where('meal_name', $val['meals']);
			$this->db->where('meal_type', $val['meal_types']);
			$this->db->where('transfer', $val['resturants_transfer']);
			$this->db->where('resturant_name', $val['resturants_name']);
			$meal_calculation[] = $this->db->get()->result_array();
		// print_r($meal_calculation);
		// $meal_calculation[] = $this->db->get_where('meals', ['resturant_type' => $val['resturants'], 'meal_name' => $val['meals'], 'meal_type' => $val['meal_types'],
		// 'transfer' => $val['resturants_transfer'], 'resturant_name' => $val['resturants_name'] ])->row();
		// print_r($datas);

			// if (array_key_exists('0', $meal_calculation[$k])) {
			// 	$meal_calculation_data['adult_prices'] += ((int)($meal_calculation[$k][0]['adult_price']) * ($val['meal_adults']));
			// 	$meal_calculation_data['child_prices'] += ((int)($meal_calculation[$k][0]['child_rate']) * ($val['meal_childs']));
			// }
			if (array_key_exists('0', $meal_calculation[$k])) {
				$meal_calculation_data['adult_prices'] += ((int)($meal_calculation[$k][0]['adult_price']) * (($val['no_of_meals'] * $val['meal_adults'])));
				$meal_calculation_data['child_prices'] += ((int)($meal_calculation[$k][0]['child_rate']) * (($val['no_of_meals'] * $val['meal_childs'])));
			}
		}

		// print_r($meal_calculation_data);exit;

		$query_id = $this->input->post('query_id');
		$query_type = $this->input->post('query_type');

		$meals_query_data = [
			'query_id' =>  $query_id ,
			'query_type' =>  $query_type ,
			'transfer_type' =>  implode(',',$tableData[0]['resturants_transfer']),
			'date' =>  implode(',',$tableData[0]['checkIn_date']),
			'resturant_type' =>  implode(',',$tableData[0]['resturants']),
			'resturant_name' =>  implode(',',$tableData[0]['resturants_name']),
			'meal' =>  implode(',',$tableData[0]['meals']),
			'meal_type' =>  implode(',',$tableData[0]['meal_types']),
			'adult_pax' =>  implode(',',$tableData[0]['meal_adults']),
			'child_pax' =>  implode(',',$tableData[0]['meal_childs']),
			'no_of_meals' =>  implode(',',$tableData[0]['no_of_meals']),
			'adult_price' => $meal_calculation_data['adult_prices'] ,
			'child_price'  =>  $meal_calculation_data['child_prices'] ,
			'created_by' =>   $this->session->userdata('admin_id'),
		];

		$query = $this->db->where('query_id', $query_id)->get('query_meal');
		if ($query->num_rows() > 0) {
			$this->db->where('query_id', $query_id);
			$this->db->update('query_meal',$meals_query_data);
		} else {
			$this->db->insert('query_meal', $meals_query_data);
		}

		// "query_type" => implode(',',$tableData[0]['query_type'])

		echo json_encode($meal_calculation_data);
	}

	public function getExcursionMealCalc()
	{
		$rows_count = $this->input->post('total_rows');

		$tableData = $this->input->post('data');

		$datas =  array();
		for ($x = 0; $x < $rows_count; $x++) {
			$datas[$x]['resturants'] = $tableData[0]['resturants'][$x];
			$datas[$x]['meals'] = $tableData[0]['meals'][$x];
			$datas[$x]['meal_types'] = $tableData[0]['meal_types'][$x];
			$datas[$x]['meal_adults'] = isset($tableData[0]['meal_adults'][$x]) ? $tableData[0]['meal_adults'][$x] : 0;
			$datas[$x]['meal_childs'] = isset($tableData[0]['meal_childs'][$x]) ? $tableData[0]['meal_childs'][$x] : 0;
			$datas[$x]['no_of_meals'] = isset($tableData[0]['no_of_meals'][$x]) ? $tableData[0]['no_of_meals'][$x] : 0;
			$datas[$x]['resturants_name'] = isset($tableData[0]['resturants_name'][$x]) ? $tableData[0]['resturants_name'][$x] : "";
		}

		$meal_calculation = array();
		$meal_calculation_data = array();
		$meal_calculation_data['adult_prices'] = 0;
		$meal_calculation_data['child_prices'] = 0;
		foreach ($datas as $k => $val) {
			$this->db->select("*");
			$this->db->from("meals");
			$this->db->where('resturant_type', $val['resturants']);
			$this->db->where('meal_name', $val['meals']);
			$this->db->where('meal_type', $val['meal_types']);
			$this->db->where('resturant_name', $val['resturants_name']);
			$meal_calculation[] = $this->db->get()->result_array();
			
		
			if (array_key_exists('0', $meal_calculation[$k])) {

				$total_meal_pax = 0; $meal_price_per_adult = 0; $meal_price_per_child = 0; $adult_meals_pax =  0; $child_meals_pax =  0;

				$total_meal_pax = (int)$val['meal_adults'] + (int)$val['meal_childs'];
				$meal_price_per_adult = (int)($meal_calculation[$k][0]['adult_price']);
				$meal_price_per_child = (int)($meal_calculation[$k][0]['child_rate']);
				$adult_meals_pax =  (int)$val['no_of_meals'] - $val['meal_childs'];
				$child_meals_pax =  $val['meal_childs'];
				
				$meal_calculation_data['adult_prices'] += $meal_price_per_adult * (int)$val['no_of_meals'] * $val['meal_adults'];
				$meal_calculation_data['child_prices'] += $meal_price_per_child * (int)$val['no_of_meals'] * $val['meal_childs'];
			
			}
		}

		$query_id = $this->input->post('query_id');
		$query_type = "excursion";

		$meals_query_data = [
			'query_id' =>  $query_id ,
			'query_type' =>  $query_type ,
			'date' =>  implode(',',$tableData[0]['meals_date']),
			'resturant_type' =>  implode(',',$tableData[0]['resturants']),
			'resturant_name' =>  implode(',',$tableData[0]['resturants_name']),
			'meal' =>  implode(',',$tableData[0]['meals']),
			'meal_type' =>  implode(',',$tableData[0]['meal_types']),
			'adult_pax' =>  implode(',',$tableData[0]['meal_adults']),
			'child_pax' =>  implode(',',$tableData[0]['meal_childs']),
			'no_of_meals' =>  implode(',',$tableData[0]['no_of_meals']),
			'adult_price' => $meal_calculation_data['adult_prices'] ,
			'child_price'  =>  $meal_calculation_data['child_prices'] ,
			'created_by' =>   $this->session->userdata('admin_id'),
		];

		$query = $this->db->where('query_id', $query_id)->get('query_meal');
		if ($query->num_rows() > 0) {
			$this->db->where('query_id', $query_id);
			$this->db->update('query_meal',$meals_query_data);
		} else {
			$this->db->insert('query_meal', $meals_query_data);
		}

		echo json_encode($meal_calculation_data);
	}

	public function getMealcalculationNew()
	{
		// $rows_count = $this->input->post('total_rows');
		$tableData = $this->input->post('data');
		// echo "<pre>";print_r($tableData);
		$rows_count = count($tableData[0]['resturants']);
		// print_r(count($tableData[0]['resturants']));return;
		$datas =  array();
		for ($x = 0; $x < $rows_count; $x++) {

			$datas[$x]['resturants'] = $tableData[0]['resturants'][$x];
			$datas[$x]['meals'] = $tableData[0]['meals'][$x];
			$datas[$x]['meal_types'] = $tableData[0]['meal_types'][$x];
			$datas[$x]['meal_adults'] = isset($tableData[0]['meal_adults'][$x]) ? $tableData[0]['meal_adults'][$x] : 0;
			$datas[$x]['meal_childs'] = isset($tableData[0]['meal_childs'][$x]) ? $tableData[0]['meal_childs'][$x] : 0;
			$datas[$x]['no_of_meals'] = isset($tableData[0]['no_of_meals'][$x]) ? $tableData[0]['no_of_meals'][$x] : 0;
			$datas[$x]['resturants_name'] = isset($tableData[0]['resturants_name'][$x]) ? $tableData[0]['resturants_name'][$x] : "";
			$datas[$x]['resturants_transfer'] = isset($tableData[0]['resturants_transfer'][$x]) ? $tableData[0]['resturants_transfer'][$x] : "";
		}

		$meal_calculation = array();
		$meal_calculation_data = array();
		$meal_calculation_data['adult_prices'] = 0;
		$meal_calculation_data['child_prices'] = 0;
		foreach ($datas as $k => $val) {
			$this->db->select("*");
			$this->db->from("meals");
			$this->db->where('resturant_type', $val['resturants']);
			$this->db->where('meal_name', $val['meals']);
			$this->db->where('meal_type', $val['meal_types']);
			// $this->db->where('transfer', $val['resturants_transfer']);
			$this->db->where('resturant_name', $val['resturants_name']);
			$meal_calculation[] = $this->db->get()->result_array();

			// if (array_key_exists('0', $meal_calculation[$k])) {
			// 	$meal_calculation_data['adult_prices'] += ((int)($meal_calculation[$k][0]['adult_price']) * (($val['no_of_meals'] * $val['meal_adults'])));
			// 	$meal_calculation_data['child_prices'] += ((int)($meal_calculation[$k][0]['child_rate']) * (($val['no_of_meals'] * $val['meal_childs'])));
			// }

				$meal_price_per_adult = (int)($meal_calculation[$k][0]['adult_price']);
				$meal_price_per_child = (int)($meal_calculation[$k][0]['child_rate']);
				$adult_meals_pax =  (int)$val['no_of_meals'] - $val['meal_childs'];
				$child_meals_pax =  $val['meal_childs'];
				
				// $meal_calculation_data['adult_prices'] += $meal_price_per_adult * $adult_meals_pax;
				// $meal_calculation_data['child_prices'] += $meal_price_per_child * $child_meals_pax;
				// print_r($val['meal_adults']);
				// print_r($val['meal_childs']);
				$meal_calculation_data['adult_prices'] += $meal_price_per_adult * (int)$val['no_of_meals'] * $val['meal_adults'];
				$meal_calculation_data['child_prices'] += $meal_price_per_child * (int)$val['no_of_meals'] * $val['meal_childs'];

		}

		$query_id = $this->input->post('query_id');
		$query_type = $this->input->post('query_type');

		$meals_query_data = [
			'query_id' =>  $query_id ,
			'query_type' =>  $query_type ,
			'transfer_type' =>  implode(',',$tableData[0]['resturants_transfer']),
			'date' =>  implode(',',$tableData[0]['checkIn_date']),
			'resturant_type' =>  implode(',',$tableData[0]['resturants']),
			'resturant_name' =>  implode(',',$tableData[0]['resturants_name']),
			'meal' =>  implode(',',$tableData[0]['meals']),
			'meal_type' =>  implode(',',$tableData[0]['meal_types']),
			'adult_pax' =>  implode(',',$tableData[0]['meal_adults']),
			'child_pax' =>  implode(',',$tableData[0]['meal_childs']),
			'no_of_meals' =>  implode(',',$tableData[0]['no_of_meals']),
			'adult_price' => $meal_calculation_data['adult_prices'] ,
			'child_price'  =>  $meal_calculation_data['child_prices'] ,
			'created_by' =>   $this->session->userdata('admin_id'),
		];

		// ----------------------------------------- internal -------------------------------------------------

		$pax_adult = $tableData[0]['pax_adult'];
		$pax_child = $tableData[0]['pax_child'];
		$pax_infants = $this->input->post('pax_infants');

		$tableData = $this->input->post('data');

		$priceperperson_internal = 0;

		if(array_key_exists('internal_transfer_pickup', $tableData[0])) {

		$person= $pax_adult + $pax_child;

		foreach ($tableData[0]['internal_transfer_pickup'] as $key => $value) {
			$pickup = $tableData[0]['internal_transfer_pickup'][$key];
			$dropoff = $tableData[0]['internal_transfer_dropoff'][$key];

			$dropoff_query = $this->db->like('start_city', $pickup)->where('dest_city', $dropoff)->where('seat_capacity >=', $person)->where('transport_type', 'oneway')->get('transfer_route')->result();

			$price = $dropoff_query[0]->cost;
			$priceperperson_internal += $price/$person;
		}


		$internal_transfer_data = [
			'query_id' =>  $query_id ,
			'query_type' =>  'meals' ,
			'transfer_type' =>  'internal',
			// 'transfer_date' =>  implode(',',$tableData[0]['internal_transfer_date']),
			'pickup' =>  implode(',',$tableData[0]['internal_transfer_pickup']),
			'dropoff' =>  implode(',',$tableData[0]['internal_transfer_dropoff']),
			'transfer_route' =>  implode(',',$tableData[0]['internal_transfer_route']),
			'adult_pax' =>  $pax_adult,
			'child_pax' =>  $pax_child,
			'adult_price' => $priceperperson_internal,
			'child_price'  =>  $priceperperson_internal,
			'created_by' =>   $this->session->userdata('admin_id'),
		];
		
		$meal_calculation_data['adult_prices'] = $meal_calculation_data['adult_prices'] + ($priceperperson_internal * $pax_adult);
		$meal_calculation_data['child_prices'] = $meal_calculation_data['child_prices'] + ($priceperperson_internal * $pax_child );

		$query = $this->db->where('query_id', $query_id)->where('transfer_type', 'internal')->where('query_type', 'meals')->get('query_transfer');
		if ($query->num_rows() > 0) {
			$this->db->where('query_id', $query_id);
			$this->db->where('transfer_type', 'internal');
			$this->db->where('query_type', 'meals');
			$this->db->update('query_transfer',$internal_transfer_data);
		} else {
			$this->db->insert('query_transfer', $internal_transfer_data);
		}

		}
		// ----------------------------------------- return -------------------------------------------------
		$priceperperson_return = 0;

		if(array_key_exists('return_transfer_pickup', $tableData[0])) {

			$person= $pax_adult + $pax_child;
	
			foreach ($tableData[0]['return_transfer_pickup'] as $key => $value) {
				$pickup = $tableData[0]['return_transfer_pickup'][$key];
				$dropoff = $tableData[0]['return_transfer_dropoff'][$key];
	
				$dropoff_query = $this->db->like('start_city', $pickup)->where('dest_city', $dropoff)->where('seat_capacity >=', $person)->where('transport_type', 'round')->get('transfer_route')->result();
	
				$price = $dropoff_query[0]->cost;
				$priceperperson_return += $price/$person;
			}
	
			$return_transfer_data = [
				'query_id' =>  $query_id ,
				'query_type' =>  'meals' ,
				'transfer_type' =>  'return',
				// 'transfer_date' =>  implode(',',$tableData[0]['return_transfer_date']),
				'pickup' =>  implode(',',$tableData[0]['return_transfer_pickup']),
				'dropoff' =>  implode(',',$tableData[0]['return_transfer_dropoff']),
				'transfer_route' =>  implode(',',$tableData[0]['return_transfer_route']),
				'adult_pax' =>  $pax_adult,
				'child_pax' =>  $pax_child,
				'adult_price' => $priceperperson_return,
				'child_price'  =>  $priceperperson_return,
				'created_by' =>   $this->session->userdata('admin_id'),
			];

			$query = $this->db->where('query_id', $query_id)->where('transfer_type', 'return')->where('query_type', 'meals')->get('query_transfer');
			if ($query->num_rows() > 0) {
				$this->db->where('query_id', $query_id);
				$this->db->where('transfer_type', 'return');
				$this->db->where('query_type', 'meals');
				$this->db->update('query_transfer',$return_transfer_data);
			} else {
				$this->db->insert('query_transfer', $return_transfer_data);
			}
	

			}
		$meal_calculation_data['adult_prices'] = $meal_calculation_data['adult_prices'] + ($priceperperson_return * $pax_adult);
		$meal_calculation_data['child_prices'] = $meal_calculation_data['child_prices'] + ($priceperperson_return * $pax_child );

		$query = $this->db->where('query_id', $query_id)->get('query_meal');
		if ($query->num_rows() > 0) {
			$this->db->where('query_id', $query_id);
			$this->db->update('query_meal',$meals_query_data);
		} else {
			$this->db->insert('query_meal', $meals_query_data);
		}

		echo json_encode($meal_calculation_data);
	}


	// public function getMealcalculation(){

	// 	 $res_name =  $this->input->post('res_name');
	// 	 $meal_cal =  $this->input->post('meal_cal');
	// 	 $adult_meal_cal =  !empty($this->input->post('adult_meal_cal')) ? $this->input->post('adult_meal_cal') : 0 ;
	// 	 $child_meal_cal =  !empty($this->input->post('child_meal_cal')) ? $this->input->post('child_meal_cal') : 0;
	// 	 $meal_type_cal = $this->input->post('meal_type_cal');
	// 	//  print_r($meal_type_cal);exit;
	// 	$meal_calculation=array();
	// 	$meal_calculation_data =array();
	// 	$this->db->select("*");
	// 	$this->db->from("meals");
	// 	$this->db->where('resturant_name',$res_name);
	// 	$this->db->where('meal_name',$meal_cal);
	// 	$this->db->where('meal_type',$meal_type_cal);

	// 	$meal_calculation = $this->db->get()->result_array();
	// 	$meal_calculation_data['adult_price'] = $meal_calculation[0]['adult_price'] * $adult_meal_cal;
	// 	$meal_calculation_data['child_price'] = $meal_calculation[0]['child_rate'] * $child_meal_cal;

	// 	echo json_encode($meal_calculation_data);

	// }
	public function getExcursionSICCalculations(){

		
		$excursion_types_SIC =  $this->input->post('excursion_types_SIC');
        $excursion_name_SIC =    $this->input->post('excursion_name_SIC');
        $excursion_adults_SIC =  $this->input->post('excursion_adults_SIC');
        $excursion_childs_SIC =  $this->input->post('excursion_childs_SIC');
        $excursion_infants_SIC = $this->input->post('excursion_infants_SIC');
		$total_pax = $excursion_adults_SIC+$excursion_childs_SIC+$excursion_infants_SIC;
	
        $hotel_pickup = $this->input->post('hotel_pickup');

		$query_id = $this->input->post('query_id');
		$query_type = $this->input->post('query_type');

		$query_data = $this->db->select('child_age_per_room')->where('queryId', $query_id)->get('querypackage')->row();
		$excursion=array();
		$excursion_sic_data =array();
		$total_adultprice =0; $total_childprice= 0;$total_infantprice= 0;

		if(!empty($excursion_name_SIC)){

		if(!empty($excursion_name_SIC)){
				foreach($excursion_name_SIC as $k => $val){
					$excursion =$this->db->query("SELECT * FROM `excursion` WHERE tourname='".$excursion_name_SIC[$k]."' AND type='".$excursion_types_SIC."' AND pax >=$total_pax  LIMIT 1")->row();
					if(empty($excursion)){
						$excursion =$this->db->query("SELECT * FROM `excursion` WHERE tourname='".$excursion_name_SIC[$k]."' AND type='".$excursion_types_SIC."' AND pax <=$total_pax  LIMIT 1")->row();
						$child_age_sic = !empty($excursion->child_age) ? $excursion->child_age : 0;
					}
					if($excursion_adults_SIC) {
						$total_adultprice += (int)$excursion->adultprice * (int)$excursion_adults_SIC;
					}
					if($excursion_childs_SIC) {
						$child_age_sic_count = 0;
						for($child_ages = 0 ; $child_ages < (int)$excursion_childs_SIC ;$child_ages++){
							if(explode(',',$query_data->child_age_per_room)[$child_ages] >= $child_age_sic){
								$child_age_sic_count += 1;
							}
						}
						$total_childprice += (int)$excursion->childprice * (int)$child_age_sic_count;
					}
					if($excursion_infants_SIC) {
						$total_infantprice += (int)$excursion->infantprice * (int)$excursion_infants_SIC;
					}


				}
			}

			$excursion_data = [
				'query_id' =>  $query_id ,
				'hotel_pickup' =>  $hotel_pickup ,
				'query_type' =>  $query_type ,
				'excursion_type' =>  $excursion_types_SIC,
				'excursion_name' =>  implode(',',$excursion_name_SIC) ,
				'adult_pax' =>  $excursion_adults_SIC ,
				'child_pax' =>   $excursion_childs_SIC,
				'infant_pax' =>  $excursion_infants_SIC ,
				'adult_price' => $total_adultprice ,
				'child_price'  =>  $total_childprice ,
				'infant_price' => $total_infantprice  ,
				'created_by' =>   $this->session->userdata('admin_id'),
			];
	
			// print_r($excursion_data);return;
	
			$query = $this->db->where('query_id', $query_id)->where('excursion_type', $excursion_types_SIC)->get('query_excursion');
			if ($query->num_rows() > 0) {
				$this->db->where('query_id', $query_id);
				$this->db->where('excursion_type', $excursion_types_SIC);
				$this->db->update('query_excursion',$excursion_data);
			} else {
				$this->db->insert('query_excursion', $excursion_data);
			}

				$excursion_sic_data['total_adultprice'] = $total_adultprice;

				$excursion_sic_data['total_childprice'] = $total_childprice;

				$excursion_sic_data['total_infantprice'] = $total_infantprice;

				echo json_encode($excursion_sic_data);

		} else {
			$query = $this->db->where('query_id', $query_id)->where('excursion_type', $excursion_types_SIC)->get('query_excursion');
			if ($query->num_rows() > 0) {
				$this->db->where('query_id', $query_id)->where('excursion_type', $excursion_types_SIC)->delete('query_excursion');
			} 

				$excursion_sic_data['total_adultprice'] = 0;
				$excursion_sic_data['total_childprice'] = 0;
				$excursion_sic_data['total_infantprice'] = 0;
				
				echo json_encode($excursion_sic_data);
		}
	}

	public function getExcursionTKTCalculations(){

		
		$excursion_types_TKT =  $this->input->post('excursion_types_TKT');
        $excursion_name_TKT =    $this->input->post('excursion_name_TKT');
        $excursion_adults_TKT =  $this->input->post('excursion_adults_TKT');
        $excursion_childs_TKT =  $this->input->post('excursion_childs_TKT');
        $excursion_infants_TKT = $this->input->post('excursion_infants_TKT');
		$total_pax = $excursion_adults_TKT+$excursion_childs_TKT+$excursion_infants_TKT;
	
        $hotel_pickup = $this->input->post('hotel_pickup');

		$query_id = $this->input->post('query_id');
		$query_type = $this->input->post('query_type');

		$query_data = $this->db->select('child_age_per_room')->where('queryId', $query_id)->get('querypackage')->row();
		$excursion=array();
		$excursion_TKT_data =array();
		$total_adultprice =0; $total_childprice= 0;$total_infantprice= 0;

		if(!empty($excursion_name_TKT)){

		if(!empty($excursion_name_TKT)){
				foreach($excursion_name_TKT as $k => $val){
					$excursion =$this->db->query("SELECT * FROM `excursion` WHERE tourname='".$excursion_name_TKT[$k]."' AND type='".$excursion_types_TKT."' AND pax >=$total_pax  LIMIT 1")->row();
					if(empty($excursion)){
						$excursion =$this->db->query("SELECT * FROM `excursion` WHERE tourname='".$excursion_name_TKT[$k]."' AND type='".$excursion_types_TKT."' AND pax <=$total_pax  LIMIT 1")->row();
					}
					$child_age_tkt = !empty($excursion->child_age) ? $excursion->child_age : 0;

					if($excursion_adults_TKT) {
						$total_adultprice += (int)$excursion->adultprice * (int)$excursion_adults_TKT;
					}
					if($excursion_childs_TKT) {
					$child_age_tkt_count = 0;
					for($child_ages = 0 ; $child_ages < (int)$excursion_childs_TKT ;$child_ages++){
							if(explode(',',$query_data->child_age_per_room)[$child_ages] >= $child_age_tkt){
								$child_age_tkt_count += 1;
							}
						}
						$total_childprice += (int)$excursion->childprice * (int)$child_age_tkt_count;
					}
					if($excursion_infants_TKT) {
						$total_infantprice += (int)$excursion->infantprice * (int)$excursion_infants_TKT;
					}


				}
			}

			$excursion_data = [
				'query_id' =>  $query_id ,
				'hotel_pickup' =>  $hotel_pickup ,
				'query_type' =>  $query_type ,
				'excursion_type' =>  $excursion_types_TKT,
				'excursion_name' =>  implode(',',$excursion_name_TKT) ,
				'adult_pax' =>  $excursion_adults_TKT ,
				'child_pax' =>   $excursion_childs_TKT,
				'infant_pax' =>  $excursion_infants_TKT ,
				'adult_price' => $total_adultprice ,
				'child_price'  =>  $total_childprice ,
				'infant_price' => $total_infantprice  ,
				'created_by' =>   $this->session->userdata('admin_id'),
			];
	
			// print_r($excursion_data);return;
	
			$query = $this->db->where('query_id', $query_id)->where('excursion_type', $excursion_types_TKT)->get('query_excursion');
			if ($query->num_rows() > 0) {
				$this->db->where('query_id', $query_id);
				$this->db->where('excursion_type', $excursion_types_TKT);
				$this->db->update('query_excursion',$excursion_data);
			} else {
				$this->db->insert('query_excursion', $excursion_data);
			}

				$excursion_TKT_data['total_adultprice'] = $total_adultprice;

				$excursion_TKT_data['total_childprice'] = $total_childprice;

				$excursion_TKT_data['total_infantprice'] = $total_infantprice;

				echo json_encode($excursion_TKT_data);

		} else {
			$query = $this->db->where('query_id', $query_id)->where('excursion_type', $excursion_types_TKT)->get('query_excursion');
			if ($query->num_rows() > 0) {
				$this->db->where('query_id', $query_id)->where('excursion_type', $excursion_types_TKT)->delete('query_excursion');
			} 

				$excursion_TKT_data['total_adultprice'] = 0;
				$excursion_TKT_data['total_childprice'] = 0;
				$excursion_TKT_data['total_infantprice'] = 0;
				
				echo json_encode($excursion_TKT_data);
		}
	}


	public function getExcursionSICCalculation()
	{

		$excursion_types_SIC =  $this->input->post('excursion_types_SIC');
		$excursion_name_SIC =    $this->input->post('excursion_name_SIC');
		$excursion_adults_SIC =  $this->input->post('excursion_adults_SIC');
		$excursion_childs_SIC =  $this->input->post('excursion_childs_SIC');
		$excursion_infants_SIC = $this->input->post('excursion_infants_SIC');
		// echo"<pre>";print_r($excursion_name_SIC);exit;
		if ($excursion_name_SIC) {

			$this->db->select("*");
			$this->db->from("excursion");
			$this->db->where('type', $excursion_types_SIC);
			// foreach($excursion_name_SIC as $k => $val){
			// 	if(sizeof($excursion_name_SIC) > 1 ) $this->db->or_where('tourname',$val);
			// 	else $this->db->where('tourname',$val);

			// }

			$names = array();
			foreach ($excursion_name_SIC as  $val) {
				$names[] = $val;
			}
			$this->db->where_in('tourname', $names);


			$excursion_sic_calculation = $this->db->get()->result_array();
			$excursion_sic_data = array();
			$total_adultprice = 0;
			$total_childprice = 0;
			$total_infantprice = 0;
			foreach ($excursion_sic_calculation as $val) {

				if ($excursion_adults_SIC) {
					$total_adultprice += $val['adultprice'] * $excursion_adults_SIC;
				}
				if ($excursion_childs_SIC) {
					$total_childprice += $val['childprice'] * $excursion_childs_SIC;
				}
				if ($excursion_infants_SIC) {
					$total_infantprice += $val['infantprice'] * $excursion_infants_SIC;
				}
			}
			$excursion_sic_data['total_adultprice'] = $total_adultprice;

			$excursion_sic_data['total_childprice'] = $total_childprice;

			$excursion_sic_data['total_infantprice'] = $total_infantprice;

			echo json_encode($excursion_sic_data);
		} else {
			echo json_encode(array());
		}
	}


	public function getExcursionPVTCalculations(){
		
       
        $excursion_type_PVT = $this->input->post('excursion_type_PVT');
        $excursion_name_PVT = $this->input->post('excursion_name_PVT');
        $excursion_adult_PVT = $this->input->post('excursion_adult_PVT');
        $excursion_child_PVT = $this->input->post('excursion_child_PVT');
        $excursion_infant_PVT = $this->input->post('excursion_infant_PVT');

        $hotel_pickup = $this->input->post('hotel_pickup');

		$query_id = $this->input->post('query_id');
		$query_type = $this->input->post('query_type');

		if(!empty($excursion_name_PVT)) {
		
		$total_pax = $excursion_adult_PVT+$excursion_child_PVT;

		$query_data = $this->db->select('child_age_per_room')->where('queryId', $query_id)->get('querypackage')->row();
		$excursion=array();
		$excursion_pvt_data =array();

		$total_adultprice =0; $total_childprice= 0;$total_infantprice= 0;
		if(!empty($excursion_name_PVT)){

			foreach($excursion_name_PVT as $k => $val){
				// $excursion =$this->db->query("SELECT * FROM `excursion` WHERE tourname='".$excursion_name_PVT[$k]."' AND type='".$excursion_type_PVT."'  AND pax >=$total_pax  LIMIT 1")->row();
				$excursion =$this->db->where('tourname',$excursion_name_PVT[$k])->where('type',$excursion_type_PVT)->where('pax >=',$total_pax)->get('excursion')->row();
				if(empty($excursion)){
					// $excursion =$this->db->query("SELECT * FROM `excursion` WHERE tourname='".$excursion_name_PVT[$k]."' AND type='".$excursion_type_PVT."'  AND pax <=$total_pax  LIMIT 1")->row();
					$excursion =$this->db->where('tourname',$excursion_name_PVT[$k])->where('type',$excursion_type_PVT)->where('pax <=',$total_pax)->get('excursion')->row();
				}

				$child_age_pvt = !empty($excursion->child_age) ? $excursion->child_age : 0;

				if($excursion->pax < $total_pax){
					echo json_encode(["status"=>0,"pax"=>$excursion->pax]);
					return;
				}


				if($excursion_adult_PVT) {
					$total_adultprice += (ceil((int)$excursion->vehicle_price / (int)$total_pax) + (int)$excursion->adultprice) * (int)$excursion_adult_PVT ; //$excursion->adultprice * $excursion_adult_PVT;
					// $total_adultprice += ( (int)$excursion->adultprice) * (int)$excursion_adult_PVT ; //$excursion->adultprice * $excursion_adult_PVT;
				}
				if($excursion_child_PVT) {
					$child_age_pvt_count = 0;
						for($child_ages = 0 ; $child_ages < (int)$excursion_child_PVT ;$child_ages++){
							if(explode(',',$query_data->child_age_per_room)[$child_ages] >= $child_age_pvt){
								$child_age_pvt_count += 1;
							}
						}
					$total_childprice += (ceil((int)$excursion->vehicle_price / (int)$total_pax) + (int)$excursion->childprice) * (int)$child_age_pvt_count  ; // $excursion->childprice * $excursion_child_PVT;
					// $total_childprice += ( (int)$excursion->childprice) * (int)$excursion_child_PVT  ; // $excursion->childprice * $excursion_child_PVT;
				}
				if($excursion_infant_PVT) {
					// $total_infantprice += (((int)$excursion->vehicle_price / (int)$total_pax) + (int)$excursion->infantprice) * (int)$excursion_infant_PVT ;//$excursion->infantprice * $excursion_infant_PVT;
					$total_infantprice += ( (int)$excursion->infantprice) * (int)$excursion_infant_PVT ;//$excursion->infantprice * $excursion_infant_PVT;
					// $total_infantprice += ( (int)$excursion->infantprice) * (int)$excursion_infant_PVT ;//$excursion->infantprice * $excursion_infant_PVT;
				}


			}
		}

		
		$excursion_data = [
			'query_id' =>  $query_id ,
			'hotel_pickup' =>  $hotel_pickup ,
			'query_type' =>  $query_type ,
			'excursion_type' =>  $excursion_type_PVT,
			'excursion_name' =>  implode(',',$excursion_name_PVT) ,
			'adult_pax' =>  $excursion_adult_PVT ,
			'child_pax' =>   $excursion_child_PVT,
			'infant_pax' =>  $excursion_infant_PVT ,
			'adult_price' => $total_adultprice ,
			'child_price'  =>  $total_childprice ,
			'infant_price' => $total_infantprice  ,
			'created_by' =>   $this->session->userdata('admin_id'),
		];


		$query = $this->db->where('query_id', $query_id)->where('excursion_type', $excursion_type_PVT)->get('query_excursion');
		if ($query->num_rows() > 0) {
			$this->db->where('query_id', $query_id);
			$this->db->where('excursion_type', $excursion_type_PVT);
			$this->db->update('query_excursion',$excursion_data);
		} else {
			$this->db->insert('query_excursion', $excursion_data);
		}

		$excursion_pvt_data['total_adultprice'] = $total_adultprice;

		$excursion_pvt_data['total_childprice'] = $total_childprice;

		$excursion_pvt_data['total_infantprice'] = $total_infantprice;

	
		echo json_encode($excursion_pvt_data);
	} else {
		$query = $this->db->where('query_id', $query_id)->where('excursion_type', $excursion_type_PVT)->get('query_excursion');
		if ($query->num_rows() > 0) {
			$this->db->where('query_id', $query_id)->where('excursion_type', $excursion_type_PVT)->delete('query_excursion');
		} 
		$excursion_pvt_data['total_adultprice'] = 0;
		$excursion_pvt_data['total_childprice'] = 0;
		$excursion_pvt_data['total_infantprice'] = 0;

		echo json_encode($excursion_pvt_data);
	}

	}
	public function getExcursionPVTCalculation()
	{

		$total_pax = $this->input->post('total_pax');
		$excursion_type_PVT = $this->input->post('excursion_type_PVT');
		$excursion_name_PVT = $this->input->post('excursion_name_PVT');
		$excursion_adult_PVT = $this->input->post('excursion_adult_PVT');
		$excursion_child_PVT = $this->input->post('excursion_child_PVT');
		$excursion_infant_PVT = $this->input->post('excursion_infant_PVT');

		if ($excursion_name_PVT) {

			$this->db->select("*");
			$this->db->from("excursion");
			// $this->db->where('type',$excursion_type_PVT);	

			// foreach($excursion_name_PVT as  $val){

			// 	if(sizeof($excursion_name_PVT) > 0 ) $this->db->where('tourname',$val);
			// 	else $this->db->where('tourname',$val);
			// 	// $this->db->where('pax',$total_pax);
			// 	// $this->db->where('tourname',$val);

			// }
			$names = array();
			foreach ($excursion_name_PVT as  $val) {
				$names[] = $val;
			}

			$this->db->where_in('tourname', $names);

			$excursion_pvt_calculation = $this->db->get()->result_array();



			// echo"<pre>";print_r($total_pax);exit;

			$excursion_pvt_data = array();
			$total_adultprice = 0;
			$total_childprice = 0;
			$total_infantprice = 0;
			foreach ($excursion_pvt_calculation as $val) {

				if ($excursion_adult_PVT) {
					$total_adultprice += (($val['vehicle_price'] / $excursion_adult_PVT) + $val['adultprice']) * $excursion_adult_PVT; //$val['adultprice'] * $excursion_adult_PVT;
				}
				if ($excursion_child_PVT) {
					$total_childprice += ($val['vehicle_price'] / $excursion_child_PVT) + $val['childprice'] * $excursion_child_PVT; // $val['childprice'] * $excursion_child_PVT;
				}
				if ($excursion_infant_PVT) {
					$total_infantprice += ($val['vehicle_price'] / $excursion_infant_PVT) + $val['infantprice'] * $excursion_infant_PVT; //$val['infantprice'] * $excursion_infant_PVT;
				}
			}
			$excursion_pvt_data['total_adultprice'] = $total_adultprice;

			$excursion_pvt_data['total_childprice'] = $total_childprice;

			$excursion_pvt_data['total_infantprice'] = $total_infantprice;

			echo json_encode($excursion_pvt_data);
		} else {
			echo json_encode(array());
		}
	}
	public function getVisaPrice()
	{

		$pax_adult = $this->input->post('pax_adult');
		$pax_child = $this->input->post('pax_child');
		$pax_infant = $this->input->post('pax_infant');
		$query_id = $this->input->post('query_id');
		$query_type = $this->input->post('query_type');
		$visa_category_drop_down = $this->input->post('visa_category_drop_down');
		$visa_validity = $this->input->post('visa_validity');
		$entry_type = $this->input->post('entry_type');
		$this->db->select("*");
		$this->db->from("visa");
		$this->db->where('visa_category', $visa_category_drop_down);
		// $this->db->where('visa_validity',$visa_validity);
		$this->db->where('entry_type', $entry_type);

		$visa_calculation = $this->db->get()->result_array();

		$total_pax_visa_price = array();
		$per_pax_adult = 0;
		$per_pax_child = 0;
		$per_pax_infant = 0;
		if ($pax_adult) {
			$per_pax_adult = $visa_calculation[0]['adult'];
		}
		if ($pax_child) {
			$per_pax_child = $visa_calculation[0]['child'];
		}
		if ($pax_infant) {
			$per_pax_infant = $visa_calculation[0]['infant'];
		}

		$visa_data = [
			'query_id' =>  $query_id ,
			'query_type' =>  $query_type ,
			'visa_category' =>   $visa_category_drop_down,
			'entry_type' =>  $entry_type ,
			'validity' =>  $visa_validity ,
			'adult_pax' =>  $pax_adult ,
			'child_pax' =>   $pax_child,
			'infant_pax' =>  $pax_infant ,
			'adult_price' =>  $per_pax_adult * $pax_adult ,
			'child_price'  =>  $per_pax_child * $pax_child ,
			'infant_price' => $per_pax_infant * $pax_infant  ,
			'created_by' =>   $this->session->userdata('admin_id'),
		];


		$query = $this->db->where('query_id', $query_id)->where('visa_category !=', "OTB")->get('query_visa');
		if ($query->num_rows() > 0) {
			$this->db->where('query_id', $query_id);
			$this->db->where('visa_category !=', "OTB");
			$this->db->update('query_visa',$visa_data);
		} else {
			$this->db->insert('query_visa', $visa_data);
		}

		$total_pax_visa_price['per_pax_adult_amt'] = $per_pax_adult * $pax_adult;
		$total_pax_visa_price['per_pax_child_amt'] = $per_pax_child * $pax_child;
		$total_pax_visa_price['per_pax_infant_amt'] =  $per_pax_infant * $pax_infant;

		echo json_encode($total_pax_visa_price);
	}


	public function getOTBPrice()
	{

		$pax_adult = $this->input->post('pax_adult');
		$pax_child = $this->input->post('pax_child');
		$pax_infant = $this->input->post('pax_infant');
		$query_id = $this->input->post('query_id');
		$category = $this->input->post('category');
		$query_type = $this->input->post('query_type');
		
		$this->db->select("*");
		$this->db->from("visa");
		$this->db->where('visa_category', $category);
		$visa_calculation = $this->db->get()->result_array();

		$total_pax_visa_price = array();
		$per_pax_adult = 0;
		$per_pax_child = 0;
		$per_pax_infant = 0;
		if ($pax_adult) {
			$per_pax_adult = $visa_calculation[0]['adult'];
		}
		if ($pax_child) {
			$per_pax_child = $visa_calculation[0]['child'];
		}
		if ($pax_infant) {
			$per_pax_infant = $visa_calculation[0]['infant'];
		}

		$visa_data = [
			'query_id' =>  $query_id ,
			'query_type' =>  $query_type ,
			'visa_category' => $category,
			'adult_pax' =>  $pax_adult ,
			'child_pax' =>   $pax_child,
			'infant_pax' =>  $pax_infant ,
			'adult_price' =>  $per_pax_adult * $pax_adult ,
			'child_price'  =>  $per_pax_child * $pax_child ,
			'infant_price' => $per_pax_infant * $pax_infant  ,
			'created_by' =>   $this->session->userdata('admin_id'),
		];


		$query = $this->db->where('query_id', $query_id)->where('visa_category', $category)->get('query_visa');
		if ($query->num_rows() > 0) {
			$this->db->where('query_id', $query_id);
			$this->db->where('visa_category', $category);
			$this->db->update('query_visa',$visa_data);
		} else {
			$this->db->insert('query_visa', $visa_data);
		}

		$total_pax_visa_price['per_pax_adult_amt'] = $per_pax_adult * $pax_adult;
		$total_pax_visa_price['per_pax_child_amt'] = $per_pax_child * $pax_child;
		$total_pax_visa_price['per_pax_infant_amt'] =  $per_pax_infant * $pax_infant;

		echo json_encode($total_pax_visa_price);
	}


	public function get_room_type()
	{

		$hotel_id = $this->input->post('hotel_id');
		$this->db->select("rooms.roomtype");
		$this->db->from("rooms");
		$this->db->join('hotel', 'hotel.id = rooms.hotelname');
		$this->db->where('rooms.hotelname', $hotel_id);
		$hotels = $this->db->get()->result();
		echo json_encode($hotels);
	}


	public function buildHotel($q_id = '')
	{
		//echo '<pre>';print_r($q_id);exit;
		$this->db->select("cb.b2bfirstName,cb.b2bcompanyName,cb.query_id,qp.specificDate,qp.goingTo,qp.Packagetravelers,qp.infant,qp.room,
		qp.child,cb.reportsTo,cb.b2bEmail");

		$this->db->from("b2bcustomerquery cb");

		$this->db->where('qp.queryId', $q_id);
		$this->db->join('querypackage qp', 'cb.query_id=qp.queryId', 'LEFT');
		$data['view'] = $this->db->get()->row();
		$user_id = $this->session->userdata()['admin_id'];
		$data['admin_user'] = $this->db->where('id', $user_id)->get('users')->row();
		$data['package_details'] = $this->db->where('queryId', $q_id)->get('querypackage')->row();

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

		$subject = $data['view']->query_id . '
			 - Diamond Tours LLC Dubai / Pax:' . $data['view']->Packagetravelers . ' 
			 / ' . $data['view']->specificDate . ' / ' . $data['view']->goingTo . ' / 
			' . $data['admin_user']->firstName . ' ' . $data['admin_user']->LastName;

		$email_from = $this->session->userdata('admin_email');
		$this->email->initialize($config);
		$this->email->from($email_from);
		$this->email->to($data['view']->b2bEmail);
		$this->email->subject($subject);
		$body = $this->load->view('query/email_templates/acknowledge', $data, TRUE);
		$this->email->message($body);
		$this->email->send();

		$data['listSuppliers'] = $this->db->get('supplier')->result();
		$data['buildpackage'] = $this->db->where('queryId', $q_id)->get('querypackage')->row();
		$data['usd_to_aed'] = $this->db->get_where('currency_data', array('id' => 1))->row();
		// echo '<pre>';print_r($data);exit;

		$this->load->view('query/build_hotel', $data);
	}

	public function buildExcursion($q_id = '')
	{
		//echo '<pre>';print_r($q_id);exit;
		$this->db->select("cb.b2bfirstName,cb.b2bcompanyName,cb.query_id,qp.specificDate,qp.goingTo,qp.Packagetravelers,qp.infant,
		qp.child,cb.reportsTo,cb.b2bEmail");

		$this->db->from("b2bcustomerquery cb");

		$this->db->where('qp.queryId', $q_id);
		$this->db->join('querypackage qp', 'cb.query_id=qp.queryId', 'LEFT');
		$data['view'] = $this->db->get()->row();

		$user_id = $this->session->userdata()['admin_id'];
		$data['admin_user'] = $this->db->where('id', $user_id)->get('users')->row();

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

		$subject = $data['view']->query_id . '
			 - Diamond Tours LLC Dubai / Pax:' . $data['view']->Packagetravelers . ' 
			 / ' . $data['view']->specificDate . ' / ' . $data['view']->goingTo . ' / 
			' . $data['admin_user']->firstName . ' ' . $data['admin_user']->LastName;

		$email_from = $this->session->userdata('admin_email');
		$this->email->initialize($config);
		$this->email->from($email_from);
		$this->email->to($data['view']->b2bEmail);
		$this->email->subject($subject);
		$body = $this->load->view('query/email_templates/acknowledge', $data, TRUE);
		$this->email->message($body);
		$this->email->send();

		$data['listSuppliers'] = $this->db->get('supplier')->result();
		$data['buildpackage'] = $this->db->where('queryId', $q_id)->get('querypackage')->row();

		$data['transfer_route'] = $this->db->query("SELECT * FROM transfer_route where transport_type='oneway' AND cost_type='Normal'")->result();
		$data['transfer_route1'] = $this->db->query("SELECT * FROM transfer_route where transport_type='round' AND cost_type='Normal'")->result();
		// $data['hours_based'] = $this->db->query("SELECT * FROM transfer_route where  cost_type='HourBased'")->result();

		// $data['excursion']= $this->db->get('excursion')->result();
		$data['excursion_sic'] = $this->db->query("SELECT * FROM excursion WHERE type='SIC' ")->result();
		$data['excursion_pvt'] = $this->db->query("SELECT * FROM excursion WHERE type='PVT' ")->result();
		$data['excursion_TKT'] = $this->db->query("SELECT * FROM excursion WHERE type='TKT' ")->result();

		$data['listcities'] = $this->db->get('city_master')->result();
		
		$data['usd_to_aed'] = $this->db->get_where('currency_data', array('id' => 1))->row();
		//echo '<pre>';print_r($data);exit;

		$this->load->view('query/build_excursion', $data);
	}

	public function buildExcursionEdit($q_id = '')
	{

		$data["pvt_query"] = $this->db->where('query_id', $q_id)->where('excursion_type', 'PVT')->get('query_excursion')->result();
		$data['sic_query'] = $this->db->where('query_id', $q_id)->where('excursion_type', 'SIC')->get('query_excursion')->result();
		$data['tkt_query'] = $this->db->where('query_id', $q_id)->where('excursion_type', 'TKT')->get('query_excursion')->result();
		$data['meals'] = $this->db->where('query_id', $q_id)->where('query_type', 'excursion')->get('query_meal')->row();

		// echo '<pre>';print_r($data['meals']);exit;
		$this->db->select("cb.b2bfirstName,cb.b2bcompanyName,cb.query_id,qp.specificDate,qp.goingTo,qp.Packagetravelers,qp.infant,
		qp.child,cb.reportsTo,cb.b2bEmail");

		$this->db->from("b2bcustomerquery cb");

		$this->db->where('qp.queryId', $q_id);
		$this->db->join('querypackage qp', 'cb.query_id=qp.queryId', 'LEFT');
		$data['view'] = $this->db->get()->row();

		$user_id = $this->session->userdata()['admin_id'];
		$data['admin_user'] = $this->db->where('id', $user_id)->get('users')->row();

		$data['listSuppliers'] = $this->db->get('supplier')->result();
		$data['buildpackage'] = $this->db->where('queryId', $q_id)->get('querypackage')->row();

		$data['transfer_route'] = $this->db->query("SELECT * FROM transfer_route where transport_type='oneway' AND cost_type='Normal'")->result();
		$data['transfer_route1'] = $this->db->query("SELECT * FROM transfer_route where transport_type='round' AND cost_type='Normal'")->result();
		// $data['hours_based'] = $this->db->query("SELECT * FROM transfer_route where  cost_type='HourBased'")->result();

		// $data['excursion']= $this->db->get('excursion')->result();
		$data['excursion_sic'] = $this->db->query("SELECT * FROM excursion WHERE type='SIC' ")->result();
		$data['excursion_pvt'] = $this->db->query("SELECT * FROM excursion WHERE type='PVT' ")->result();
		$data['excursion_tkt'] = $this->db->query("SELECT * FROM excursion WHERE type='TKT' ")->result();

		$data['listcities'] = $this->db->get('city_master')->result();
		
		$data['usd_to_aed'] = $this->db->get_where('currency_data', array('id' => 1))->row();
		//echo '<pre>';print_r($data);exit;

		$this->load->view('query/edit/build_excursion_edit', $data);
	}

	public function buildTransfer($q_id = '')
	{
		error_reporting(0);

		$data["internal_query"] = $this->db->where('query_id', $q_id)->where('transfer_type', 'internal')->get('query_transfer')->result();
		$data['return_query'] = $this->db->where('query_id', $q_id)->where('transfer_type', 'return')->get('query_transfer')->result();
		
		//echo '<pre>';print_r($q_id);exit;
		$this->db->select("cb.b2bfirstName,cb.b2bcompanyName,cb.query_id,qp.specificDate,qp.goingTo,qp.Packagetravelers,qp.infant,
		qp.child,cb.reportsTo,cb.b2bEmail");

		$this->db->from("b2bcustomerquery cb");

		$this->db->where('qp.queryId', $q_id);
		$this->db->join('querypackage qp', 'cb.query_id=qp.queryId', 'LEFT');
		$data['view'] = $this->db->get()->row();

		$user_id = $this->session->userdata()['admin_id'];
		$data['admin_user'] = $this->db->where('id', $user_id)->get('users')->row();

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

		$subject = $data['view']->query_id . '
			 - Diamond Tours LLC Dubai / Pax:' . $data['view']->Packagetravelers . ' 
			 / ' . $data['view']->specificDate . ' / ' . $data['view']->goingTo . ' / 
			' . $data['admin_user']->firstName . ' ' . $data['admin_user']->LastName;

		$email_from = $this->session->userdata('admin_email');
		$this->email->initialize($config);
		$this->email->from($email_from);
		$this->email->to($data['view']->b2bEmail);
		$this->email->subject($subject);
		$body = $this->load->view('query/email_templates/acknowledge', $data, TRUE);
		$this->email->message($body);
		$this->email->send();

		$data['excursion'] = $this->db->get('excursion')->result();
		$data['listSuppliers'] = $this->db->get('supplier')->result();

		$data['transfer_route'] = $this->db->query("SELECT * FROM transfer_route where transport_type='oneway' AND cost_type='Normal' group by start_city,dest_city")->result();
		$data['transfer_route1'] = $this->db->query("SELECT * FROM transfer_route where transport_type='round' AND cost_type='Normal' group by start_city,dest_city")->result();
		// $data['hours_based'] = $this->db->query("SELECT * FROM transfer_route where  cost_type='HourBased'")->result();

		// $data['excursion']= $this->db->get('excursion')->result();
		$data['excursion_sic'] = $this->db->query("SELECT * FROM excursion WHERE type='SIC' ")->result();
		$data['excursion_pvt'] = $this->db->query("SELECT * FROM excursion WHERE type='PVT' ")->result();

		$data['listcities'] = $this->db->get('city_master')->result();

		$data['buildpackage'] = $this->db->where('queryId', $q_id)->get('querypackage')->row();
		$data['usd_to_aed'] = $this->db->get_where('currency_data', array('id' => 1))->row();



		// echo '<pre>';print_r($data);exit;

		$this->load->view('query/build_transfer', $data);
	}

	public function buildTransferEdit($q_id = '')
	{
		error_reporting(0);

		$data["internal_query"] = $this->db->where('query_id', $q_id)->where('transfer_type', 'internal')->get('query_transfer')->result();
		$data['return_query'] = $this->db->where('query_id', $q_id)->where('transfer_type', 'return')->get('query_transfer')->result();
		
		//echo '<pre>';print_r($q_id);exit;
		$this->db->select("cb.b2bfirstName,cb.b2bcompanyName,cb.query_id,qp.specificDate,qp.goingTo,qp.Packagetravelers,qp.infant,
		qp.child,cb.reportsTo,cb.b2bEmail");

		$this->db->from("b2bcustomerquery cb");

		$this->db->where('qp.queryId', $q_id);
		$this->db->join('querypackage qp', 'cb.query_id=qp.queryId', 'LEFT');
		$data['view'] = $this->db->get()->row();

		$user_id = $this->session->userdata()['admin_id'];
		$data['admin_user'] = $this->db->where('id', $user_id)->get('users')->row();

		$data['excursion'] = $this->db->get('excursion')->result();
		$data['listSuppliers'] = $this->db->get('supplier')->result();

		$data['transfer_route'] = $this->db->query("SELECT * FROM transfer_route where transport_type='oneway' AND cost_type='Normal' group by start_city,dest_city")->result();
		$data['transfer_route1'] = $this->db->query("SELECT * FROM transfer_route where transport_type='round' AND cost_type='Normal' group by start_city,dest_city")->result();
		// $data['hours_based'] = $this->db->query("SELECT * FROM transfer_route where  cost_type='HourBased'")->result();

		// $data['excursion']= $this->db->get('excursion')->result();
		$data['excursion_sic'] = $this->db->query("SELECT * FROM excursion WHERE type='SIC' ")->result();
		$data['excursion_pvt'] = $this->db->query("SELECT * FROM excursion WHERE type='PVT' ")->result();

		$data['listcities'] = $this->db->get('city_master')->result();

		$data['buildpackage'] = $this->db->where('queryId', $q_id)->get('querypackage')->row();
		$data['usd_to_aed'] = $this->db->get_where('currency_data', array('id' => 1))->row();



		// echo '<pre>';print_r($data);exit;

		$this->load->view('query/edit/build_transfer_edit', $data);
	}

	public function buildVisa($q_id = '')
	{
		//echo '<pre>';print_r($q_id);exit;
		$this->db->select("cb.b2bfirstName,cb.b2bcompanyName,cb.query_id,qp.specificDate,qp.goingTo,qp.Packagetravelers,qp.infant,
		qp.child,cb.reportsTo,cb.b2bEmail");

		$this->db->from("b2bcustomerquery cb");

		$this->db->where('qp.queryId', $q_id);
		$this->db->join('querypackage qp', 'cb.query_id=qp.queryId', 'LEFT');
		$data['view'] = $this->db->get()->row();

		$user_id = $this->session->userdata()['admin_id'];
		$data['visa_data'] = $this->db->where('queryId', $q_id)->get('querypackage')->row();
		$data['admin_user'] = $this->db->where('id', $user_id)->get('users')->row();

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

		$subject = $data['view']->query_id . '
			 - Diamond Tours LLC Dubai / Pax:' . $data['view']->Packagetravelers . ' 
			 / ' . $data['view']->specificDate . ' / ' . $data['view']->goingTo . ' / 
			' . $data['admin_user']->firstName . ' ' . $data['admin_user']->LastName;

		$email_from = $this->session->userdata('admin_email');
		$this->email->initialize($config);
		$this->email->from($email_from);
		$this->email->to($data['view']->b2bEmail);
		$this->email->subject($subject);
		$body = $this->load->view('query/email_templates/acknowledge', $data, TRUE);
		$this->email->message($body);
		$this->email->send();

		$data['excursion'] = $this->db->get('excursion')->result();
		$data['listSuppliers'] = $this->db->get('supplier')->result();
		$data['buildpackage'] = $this->db->where('queryId', $q_id)->get('querypackage')->row();

		$data['transfer_route'] = $this->db->query("SELECT * FROM transfer_route where transport_type='oneway' AND cost_type='Normal'")->result();
		$data['transfer_route1'] = $this->db->query("SELECT * FROM transfer_route where transport_type='round' AND cost_type='Normal'")->result();
		// $data['hours_based'] = $this->db->query("SELECT * FROM transfer_route where  cost_type='HourBased'")->result();

		// $data['excursion']= $this->db->get('excursion')->result();
		$data['excursion_sic'] = $this->db->query("SELECT * FROM excursion WHERE type='SIC' ")->result();
		$data['excursion_pvt'] = $this->db->query("SELECT * FROM excursion WHERE type='PVT' ")->result();

		$data['listcities'] = $this->db->get('city_master')->result();
		$data['usd_to_aed'] = $this->db->get_where('currency_data', array('id' => 1))->row();


		$this->load->view('query/build_visa', $data);
	}

	public function buildVisaEdit($q_id = '')
	{
		//echo '<pre>';print_r($q_id);exit;
		$data["visa_query"] = $this->db->where('query_id', $q_id)->get('query_visa')->result();

		$this->db->select("cb.b2bfirstName,cb.b2bcompanyName,cb.query_id,qp.specificDate,qp.goingTo,qp.Packagetravelers,qp.infant,
		qp.child,cb.reportsTo,cb.b2bEmail");

		$this->db->from("b2bcustomerquery cb");

		$this->db->where('qp.queryId', $q_id);
		$this->db->join('querypackage qp', 'cb.query_id=qp.queryId', 'LEFT');
		$data['view'] = $this->db->get()->row();

		$user_id = $this->session->userdata()['admin_id'];
		$data['admin_user'] = $this->db->where('id', $user_id)->get('users')->row();

		$data['excursion'] = $this->db->get('excursion')->result();
		$data['listSuppliers'] = $this->db->get('supplier')->result();
		$data['buildpackage'] = $this->db->where('queryId', $q_id)->get('querypackage')->row();

		$data['transfer_route'] = $this->db->query("SELECT * FROM transfer_route where transport_type='oneway' AND cost_type='Normal'")->result();
		$data['transfer_route1'] = $this->db->query("SELECT * FROM transfer_route where transport_type='round' AND cost_type='Normal'")->result();
		// $data['hours_based'] = $this->db->query("SELECT * FROM transfer_route where  cost_type='HourBased'")->result();

		// $data['excursion']= $this->db->get('excursion')->result();
		$data['excursion_sic'] = $this->db->query("SELECT * FROM excursion WHERE type='SIC' ")->result();
		$data['excursion_pvt'] = $this->db->query("SELECT * FROM excursion WHERE type='PVT' ")->result();

		$data['listcities'] = $this->db->get('city_master')->result();
		$data['usd_to_aed'] = $this->db->get_where('currency_data', array('id' => 1))->row();


		$this->load->view('query/edit/build_visa_edit', $data);
	}

	public function buildMeals($q_id = '')
	{
		//echo '<pre>';print_r($q_id);exit;
		$this->db->select("cb.b2bfirstName,cb.b2bcompanyName,cb.query_id,qp.specificDate,qp.goingTo,qp.Packagetravelers,qp.infant,
		qp.child,cb.reportsTo,cb.b2bEmail");

		$this->db->from("b2bcustomerquery cb");

		$this->db->where('qp.queryId', $q_id);
		$this->db->join('querypackage qp', 'cb.query_id=qp.queryId', 'LEFT');
		$data['view'] = $this->db->get()->row();

		$user_id = $this->session->userdata()['admin_id'];
		$data['admin_user'] = $this->db->where('id', $user_id)->get('users')->row();

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

		$subject = $data['view']->query_id . '
			 - Diamond Tours LLC Dubai / Pax:' . $data['view']->Packagetravelers . ' 
			 / ' . $data['view']->specificDate . ' / ' . $data['view']->goingTo . ' / 
			' . $data['admin_user']->firstName . ' ' . $data['admin_user']->LastName;

		$email_from = $this->session->userdata('admin_email');
		$this->email->initialize($config);
		$this->email->from($email_from);
		$this->email->to($data['view']->b2bEmail);
		$this->email->subject($subject);
		$body = $this->load->view('query/email_templates/acknowledge', $data, TRUE);
		$this->email->message($body);
		$this->email->send();

		$data['excursion'] = $this->db->get('excursion')->result();
		$data['listSuppliers'] = $this->db->get('supplier')->result();
		$data['buildpackage'] = $this->db->where('queryId', $q_id)->get('querypackage')->row();

		$data['transfer_route'] = $this->db->query("SELECT * FROM transfer_route where transport_type='oneway' AND cost_type='Normal'")->result();
		$data['transfer_route1'] = $this->db->query("SELECT * FROM transfer_route where transport_type='round' AND cost_type='Normal'")->result();
		// $data['hours_based'] = $this->db->query("SELECT * FROM transfer_route where  cost_type='HourBased'")->result();

		// $data['excursion']= $this->db->get('excursion')->result();
		$data['excursion_sic'] = $this->db->query("SELECT * FROM excursion WHERE type='SIC' ")->result();
		$data['excursion_pvt'] = $this->db->query("SELECT * FROM excursion WHERE type='PVT' ")->result();

		$data['listcities'] = $this->db->get('city_master')->result();

		$data['usd_to_aed'] = $this->db->get_where('currency_data', array('id' => 1))->row();

		$this->load->view('query/build_meals', $data);
	}

	public function buildMealsEdit($q_id = '')
	{
		//echo '<pre>';print_r($q_id);exit;
		$data["internal_query"] = $this->db->where('query_id', $q_id)->where('transfer_type', 'internal')->get('query_transfer')->result();
		$data['return_query'] = $this->db->where('query_id', $q_id)->where('transfer_type', 'return')->get('query_transfer')->result();
		$data["meal_query"] = $this->db->where('query_id', $q_id)->get('query_meal')->result();
		
		$this->db->select("cb.b2bfirstName,cb.b2bcompanyName,cb.query_id,qp.specificDate,qp.goingTo,qp.Packagetravelers,qp.infant,
		qp.child,cb.reportsTo,cb.b2bEmail");

		$this->db->from("b2bcustomerquery cb");

		$this->db->where('qp.queryId', $q_id);
		$this->db->join('querypackage qp', 'cb.query_id=qp.queryId', 'LEFT');
		$data['view'] = $this->db->get()->row();

		$user_id = $this->session->userdata()['admin_id'];
		$data['admin_user'] = $this->db->where('id', $user_id)->get('users')->row();

		$data['excursion'] = $this->db->get('excursion')->result();
		$data['listSuppliers'] = $this->db->get('supplier')->result();
		$data['buildpackage'] = $this->db->where('queryId', $q_id)->get('querypackage')->row();

		$data['transfer_route'] = $this->db->query("SELECT * FROM transfer_route where transport_type='oneway' AND cost_type='Normal'")->result();
		$data['transfer_route1'] = $this->db->query("SELECT * FROM transfer_route where transport_type='round' AND cost_type='Normal'")->result();
		// $data['hours_based'] = $this->db->query("SELECT * FROM transfer_route where  cost_type='HourBased'")->result();

		// $data['excursion']= $this->db->get('excursion')->result();
		$data['excursion_sic'] = $this->db->query("SELECT * FROM excursion WHERE type='SIC' ")->result();
		$data['excursion_pvt'] = $this->db->query("SELECT * FROM excursion WHERE type='PVT' ")->result();

		$data['listcities'] = $this->db->get('city_master')->result();

		$data['usd_to_aed'] = $this->db->get_where('currency_data', array('id' => 1))->row();

		$this->load->view('query/edit/build_meals_edit', $data);
	}

	public function CreateProposalTransfer()
	{
		// echo"<pre>";print_r($_POST);exit;
		// return;
		
		$data['proposalDetails'] = array(

			'query_id' => $_POST['QueryId'],
			'perpax_adult' =>  isset($_POST['perpax_adult_input']) ? $_POST['perpax_adult_input'] : "",
			'perpax_childs' =>  isset($_POST['perpax_childs_input']) ? $_POST['perpax_childs_input'] : "",
			'perpax_infants' => isset($_POST['perpax_infants_input']) ? $_POST['perpax_infants_input'] : "",

			'totalprice_adult' => isset($_POST['totalprice_adult']) ? $_POST['totalprice_adult'] : "",
			'totalprice_childs' => isset($_POST['totalprice_childs']) ? $_POST['totalprice_childs'] : "",
			'totalprice_infants' => isset($_POST['totalprice_infants']) ? $_POST['totalprice_infants'] : "",

			'subtotal_adults' => isset($_POST['subtotal_adults']) ? $_POST['subtotal_adults'] : "",
			'subtotal_childs' => isset($_POST['subtotal_childs']) ? $_POST['subtotal_childs'] : "",
			'subtotal_infants' => isset($_POST['subtotal_infants']) ? $_POST['subtotal_infants'] : "",
			'admin_name' => $this->session->userdata('admin_username'),

			'buildTravelFromdateCab' => isset($_POST['buildTravelFromdateCab']) ? $_POST['buildTravelFromdateCab'] : '',

			'pickupinternal' => isset($_POST['buildTravelToDateCab']) ? $_POST['buildTravelToDateCab'] : '',
			// 'dropoffinternal' => $_POST['buildTravelFromdateSIC'],

			'pickuppoint' => isset($_POST['buildTravelToDateSIC']) ? $_POST['buildTravelToDateSIC'] : '',
			'currencyOption' => isset($_POST['currencyOption']) ? $_POST['currencyOption'] : '',

			'in_transfer_date' => isset($_POST['buildTravelFromdateCab']) ? $_POST['buildTravelFromdateCab'] : '',
			'in_transfer_pickup' => isset($_POST['buildTravelToDateCab']) ? $_POST['buildTravelToDateCab'] : '',
			'in_transfer_dropoff' => isset($_POST['buildTravelToCityCabDrop']) ? $_POST['buildTravelToCityCabDrop'] : '',
			'internal_transfer_route' => isset($_POST['buildTravelTypeCab']) ? $_POST['buildTravelTypeCab'] : '',

			'pp_transfer_date' => isset($_POST['buildTravelFromdatePVT']) ? $_POST['buildTravelFromdatePVT'] : '',
			'pp_transfer_pickup' => isset($_POST['buildTravelToDateSIC']) ? $_POST['buildTravelToDateSIC'] : '',
			'pp_transfer_dropoff' => isset($_POST['buildTravelToCitySIC']) ? $_POST['buildTravelToCitySIC'] : '',
			'return_transfer_pickup' => isset($_POST['buildTravelTypeSIC']) ? $_POST['buildTravelTypeSIC'] : ''

		);

		$data['pricing_info'] = array(
			'query_id' => $_POST['QueryId'],
			'user_id' => $this->session->userdata('admin_id'),
			'user_name' => $this->session->userdata('admin_username'),
			'transfer_price' => $_POST['totalprice_transfer'],

			'adult_single_sharing' => $_POST['subtotal_adults'].','.$_POST['totalprice_adult'].','.$_POST['perpax_adult_input'] ,
			'child_cwb' => $_POST['subtotal_childs'].','.$_POST['totalprice_childs'].','.$_POST['perpax_childs_input'] ,
			'infants' => $_POST['subtotal_infants'].','.$_POST['totalprice_infants'].','.$_POST['perpax_infants_input'] ,
			
		);
		$user_id = $this->session->userdata()['admin_id'];
		$data['admin_user_data'] = $this->db->where('id', $user_id)->get('users')->row();

		$query = $this->db->where('query_id', $_POST['QueryId'])->get('pricing_info');
		if ($query->num_rows() > 0) {
			$this->db->where('query_id', $_POST['QueryId']);
			$this->db->update('pricing_info',$data['pricing_info']);
		} else {
			$this->db->insert('pricing_info', $data['pricing_info']);
		}
		// print_r($data['pricing_info']);exit; return;
		$updatedata = array('status' => "Sent");
		$this->db->where('query_id', $_POST['QueryId'])->update('b2bcustomerquery', $updatedata);

		$data['buildpackage'] = $this->db->where('queryId', $_POST['QueryId'])->get('querypackage')->row();
		$data['b2bcustomerquery'] = $this->db->where('query_id', $_POST['QueryId'])->get('b2bcustomerquery')->row();
		// $data['hotels']= $this->db->where('id',$_POST['buildHotelName'])->get('hotel')->row();

		$this->load->view('query/finaltransfer', $data);
	}

	public function CreateProposalVisa()
	{
		$data['proposalDetails'] = array(
			'query_id' => $_POST['QueryId'],
			'perpax_adult' =>  $_POST['perpax_adult_input'],
			'perpax_childs' =>  $_POST['perpax_childs_input'],
			'perpax_infants' => $_POST['perpax_infants_input'],

			'totalprice_adult' => $_POST['totalprice_adult'],
			'totalprice_childs' => $_POST['totalprice_childs'],
			'totalprice_infants' => $_POST['totalprice_infants'],

			'subtotal_adults' => $_POST['subtotal_adults'],
			'subtotal_childs' => $_POST['subtotal_childs'],
			'subtotal_infants' => $_POST['subtotal_infants'],
			'admin_name' => $this->session->userdata('admin_username'),
			'currencyOption' => $_POST['currencyOption'],
			'visa_category_drop_down' => $_POST['visa_category_drop_down'],
			'entry_type' => $_POST['entry_type'],
			'visa_validity' => $_POST['visa_validity'],
			'loggedInUser' => $this->session->userdata('admin_username')
		);
		$data['query_package_data'] = $this->db->where('queryId', $_POST['QueryId'])->get('querypackage')->row();
		$data['visa_data'] = $this->db->where('query_id', $_POST['QueryId'])->where('visa_category !=', 'OTB')->get('query_visa')->row();

		$data['pricing_info'] = array(
			'query_id' => $_POST['QueryId'],
			'user_id' => $this->session->userdata('admin_id'),
			'user_name' => $this->session->userdata('admin_username'),
			'visa_price' => $_POST['totalprice_visa'],

			'adult_single_sharing' => $_POST['subtotal_adults'].','.$_POST['totalprice_adult'].','.$_POST['perpax_adult_input'] ,
			'child_cwb' => $_POST['subtotal_childs'].','.$_POST['totalprice_childs'].','.$_POST['perpax_childs_input'] ,
			'infants' => $_POST['subtotal_infants'].','.$_POST['totalprice_infants'].','.$_POST['perpax_infants_input'] ,
		);
		$user_id = $this->session->userdata()['admin_id'];
		$data['admin_user_data'] = $this->db->where('id', $user_id)->get('users')->row();

		$query = $this->db->where('query_id', $_POST['QueryId'])->get('pricing_info');
		if ($query->num_rows() > 0) {
			$this->db->where('query_id', $_POST['QueryId']);
			$this->db->update('pricing_info',$data['pricing_info']);
		} else {
			$this->db->insert('pricing_info', $data['pricing_info']);
		}

		$data['buildpackage'] = $this->db->where('queryId', $_POST['QueryId'])->get('querypackage')->row();
		$data['otb'] = $this->db->where('query_id', $_POST['QueryId'])->where('visa_category','OTB')->get('query_visa')->row();


		$updatedata = array('status' => "Sent");
		$this->db->where('query_id', $_POST['QueryId'])->update('b2bcustomerquery', $updatedata);

		$data['b2bcustomerquery'] = $this->db->where('query_id', $_POST['QueryId'])->get('b2bcustomerquery')->row();

		$this->load->view('query/finalvisa', $data);
	}

	public function CreateProposalMealsSave()
	{
		try{
		$rows_count = $this->input->post('total_rows') + 1;
		$QueryId = $this->input->post('QueryId');
		$totalprice_adult = $this->input->post('totalprice_adult');
		$totalprice_childs = $this->input->post('totalprice_childs');
		$totalprice_infants = $this->input->post('totalprice_infants');

		$total_pricing = (int)$totalprice_adult + (int)$totalprice_childs + (int)$totalprice_infants;

		$tableData = $this->input->post('data');
		$datas =  array();
		for ($x = 0; $x < $rows_count; $x++) {
			$datas[$x]['query_id'] = $QueryId;
			$datas[$x]['resturent_name'] = $tableData[0]['resturants'][$x];
			$datas[$x]['meal'] = $tableData[0]['meals'][$x];
			$datas[$x]['date'] = $tableData[0]['dates'][$x];
			$datas[$x]['meal_type'] = $tableData[0]['meal_types'][$x];
			$datas[$x]['adult'] = isset($tableData[0]['meal_adults'][$x]) ? $tableData[0]['meal_adults'][$x] : 0;
			$datas[$x]['child'] = isset($tableData[0]['meal_childs'][$x]) ? $tableData[0]['meal_childs'][$x] : 0;
			$datas[$x]['resturant_name'] = isset($tableData[0]['resturants_name'][$x]) ? $tableData[0]['resturants_name'][$x] : "";
			$datas[$x]['transfer'] = isset($tableData[0]['resturants_transfer'][$x]) ? $tableData[0]['resturants_transfer'][$x] : "";
			// $datas[$x]['buildPackageRefund'] = $buildPackageRefund;
			$datas[$x]['total_price'] = $total_pricing;
		}

		$query = $this->db->where('query_id', $QueryId)->get('query_meals');
		if ($query->num_rows() > 0) {
			$this->db->where('query_id', $QueryId)->delete('query_meals');
			$this->db->insert_batch('query_meals', $datas);
		} else {
			$this->db->insert_batch('query_meals', $datas);
		}


		// echo"<pre>";print_r($datas);exit;
		echo json_encode($datas);
	} catch(Exception $e){
		echo $e->getMessage();
	}
	}

	public function CreateProposalMeals()
	{
		// echo"<pre>";print_r($_POST);exit;
		$data = array();

		
		$data['proposalDetails'] = array(

			'query_id' => $_POST['QueryId'],
			'perpax_adult' =>  $_POST['perpax_adult_input'],
			'perpax_childs' =>  $_POST['perpax_childs_input'],
			'perpax_infants' => $_POST['perpax_infants_input'],

			'totalprice_adult' => $_POST['totalprice_adult'],
			'totalprice_childs' => $_POST['totalprice_childs'],
			'totalprice_infants' => $_POST['totalprice_infants'],

			'subtotal_adults' => $_POST['subtotal_adults'],
			'subtotal_childs' => $_POST['subtotal_childs'],
			'subtotal_infants' => $_POST['subtotal_infants'],
			'admin_name' => $this->session->userdata('admin_username'),

			'currencyOption' => $_POST['currencyOption'],
			'res_type' => $_POST['res_type'],
			'res_name' => $_POST['res_name'],
			'Meal' => $_POST['Meal'],
			'Meal_Type' => $_POST['Meal_Type'],
			'loggedInUser' => $this->session->userdata('admin_username')

		);
		$data['proposalDetails']['perpax_cnb'] =  isset($_POST['perpax_cnb_input']) ? $_POST['perpax_cnb_input'] : "";
		$user_id = $this->session->userdata()['admin_id'];
		$data['admin_user_data'] = $this->db->where('id', $user_id)->get('users')->row();

		$data['pricing_info'] = array(
			'query_id' => $_POST['QueryId'],
			'user_id' => $this->session->userdata('admin_id'),
			'user_name' => $this->session->userdata('admin_username'),
			'meal_price' => $_POST['totalprice_meals'],

			'adult_single_sharing' => $_POST['subtotal_adults'].','.$_POST['totalprice_adult'].','.$_POST['perpax_adult_input'] ,
			'child_cwb' => $_POST['subtotal_childs'].','.$_POST['totalprice_childs'].','.$_POST['perpax_childs_input'] ,
			'infants' => $_POST['subtotal_infants'].','.$_POST['totalprice_infants'].','.$_POST['perpax_infants_input'] ,
		);

		$query = $this->db->where('query_id', $_POST['QueryId'])->get('pricing_info');
		if ($query->num_rows() > 0) {

			$this->db->where('query_id', $_POST['QueryId']);
			$this->db->update('pricing_info',$data['pricing_info']);

		} else {
			$this->db->insert('pricing_info', $data['pricing_info']);
		}

		$data['proposalDetailsEncode'] =  json_encode($data['proposalDetails']);
		$data['res_name'] = $_POST['res_name'];
		$data['Meal'] = $_POST['Meal'];
		$data['Meal_Type'] = $_POST['Meal_Type'];
		//   print_r($data['proposalDetails']);
		//   return;
		$data['buildpackage'] = $this->db->where('queryId', $_POST['QueryId'])->get('querypackage')->row();
		// echo"<pre>";print_r($data['buildpackage']);exit;
		$data['b2bcustomerquery'] = $this->db->where('query_id', $_POST['QueryId'])->get('b2bcustomerquery')->row();
		// $this->db->where('query_id',$_POST['QueryId'])->update('b2bcustomerquery',$updatedata);
		// echo"<pre>";print_r($data);exit;
		$data['buildhotel'] = $this->db->where('query_id', $_POST['QueryId'])->get('query_hotel')->row();
		$data['buildmeal'] = $this->db->where('query_id', $_POST['QueryId'])->get('query_meals')->row();
		$data['meals_data'] = $this->db->where('query_id', $_POST['QueryId'])->get('query_meal')->row();
		// $this->db->insert('package',$data['proposalDetails']);


		$this->load->view('query/finalmeals', $data);
	}


	public function CreateProposal()
	{
		// echo"<pre>";print_r($_POST);exit;
		$services_status = $_POST['hotel_status'].','.$_POST['trans_status'].','.$_POST['visa_status'].','.$_POST['otb_status'].','.$_POST['excursion_status'].','.$_POST['ex_meals_status'].','.$_POST['meals_status'];
		$data['services_status'] = array('services_status' => $services_status);
		$this->db->where('QueryId', $_POST['QueryId'])->update('querypackage',$data['services_status']);

		$transfer_with_or_without_arr=[];

		foreach ($_POST['res_name'] as $key => $value) {
			if($key == 0){
				array_push($transfer_with_or_without_arr, $_POST['transfer_with_or_without'][0]);
			} else {
				array_push($transfer_with_or_without_arr, $_POST['transfer_with_or_without'.$key][0]);
			}
		}

		$data = array();
		$hotels = [];
		if(isset($_POST['buildHotelName'])){
		foreach ($_POST['buildHotelName'] as $key => $value) {
			$hotels[] = $this->db->get_where('hotel', array('id' => $value))->row();
			}
		}

		$data['proposalDetails'] = array(

			'query_id' => $_POST['QueryId'],
			'hotels' => $hotels,
			'no_of_room' => $_POST['no_of_room'],
			'buildCheckIns' => $_POST['buildCheckIns'],
			'build_room_types' => $_POST['build_room_types'],

			// 'excursion_name_SIC' => $_POST['excursion'][0],
			// 'excursion_name_PVT' => $_POST['excursion'][1],
			'excursion_name_SIC' => isset($_POST['excursion_name_SIC']) ? $_POST['excursion_name_SIC'] : NULL,
			'excursion_name_PVT' => isset($_POST['excursion_name_PVT']) ? $_POST['excursion_name_PVT'] : NULL,
			'excursion_name_TKT' => isset($_POST['excursion_name_TKT']) ? $_POST['excursion_name_TKT'] : NULL,

			'buildPackageInclusions' => isset($_POST['buildPackageInclusions']) ? $_POST['buildPackageInclusions'] : NULL,
			'buildPackageExclusions' => isset($_POST['buildPackageExclusions']) ? $_POST['buildPackageExclusions'] : NULL,
			'buildPackageConditions' => isset($_POST['buildPackageConditions']) ? $_POST['buildPackageConditions'] : NULL,
			'buildPackageCancellations' => isset($_POST['buildPackageCancellations']) ? $_POST['buildPackageCancellations'] : NULL,
			// 'buildPackageRefund' => $_POST['buildPackageRefund'],

			'perpax_adult' =>  isset($_POST['perpax_adult']) ? $_POST['perpax_adult'] : "",
			'perpax_adult_single' =>  isset($_POST['perpax_adult_single']) ? $_POST['perpax_adult_single'] : "",
			'perpax_adult_double' =>  isset($_POST['perpax_adult_double']) ? $_POST['perpax_adult_double'] : "",
			'perpax_adult_triple' =>  isset($_POST['perpax_adult_triple']) ? $_POST['perpax_adult_triple'] : "",
			'perpax_childs' =>  isset($_POST['perpax_childs']) ? $_POST['perpax_childs'] : "",
			'perpax_infants' => isset($_POST['perpax_infants']) ? $_POST['perpax_infants'] : "",
			'perpax_cnb' => isset($_POST['perpax_cnb']) ? $_POST['perpax_cnb'] : "",
			
			'totalprice_adult' => isset($_POST['totalprice_adult']) ? $_POST['totalprice_adult'] : "",
			'totalprice_adult_single' => isset($_POST['totalprice_adult_single']) ? $_POST['totalprice_adult_single'] : "",
			'totalprice_adult_double' => isset($_POST['totalprice_adult_double']) ? $_POST['totalprice_adult_double'] : "",
			'totalprice_adult_triple' => isset($_POST['totalprice_adult_triple']) ? $_POST['totalprice_adult_triple'] : "",
			'totalprice_adult_triple' => isset($_POST['totalprice_adult_triple']) ? $_POST['totalprice_adult_triple'] : "",
			'totalprice_childs' => isset($_POST['totalprice_childs']) ? $_POST['totalprice_childs'] : "",
			'totalprice_cnb' => isset($_POST['totalprice_cnb']) ? $_POST['totalprice_cnb'] : "",
			'totalprice_infants' => isset($_POST['totalprice_infants']) ? $_POST['totalprice_infants'] : "",

			'subtotal_adults' => isset($_POST['subtotal_adults']) ? $_POST['subtotal_adults'] : "",
			'subtotal_adults_single' => isset($_POST['subtotal_adults_single']) ? $_POST['subtotal_adults_single'] : "",
			'subtotal_adults_double' => isset($_POST['subtotal_adults_double']) ? $_POST['subtotal_adults_double'] : "",
			'subtotal_adults_triple' => isset($_POST['subtotal_adults_triple']) ? $_POST['subtotal_adults_triple'] : "",
			'subtotal_childs' => isset($_POST['subtotal_childs']) ? $_POST['subtotal_childs'] : "",
			'subtotal_cnb' => isset($_POST['subtotal_cnb']) ? $_POST['subtotal_cnb'] : "",
			'subtotal_infants' => isset($_POST['subtotal_infants']) ? $_POST['subtotal_infants'] : "",

			'hotel_pax_adult' => isset($_POST['hotel_pax_adult']) ? $_POST['hotel_pax_adult'] : "",
			'hotel_pax_adult_single' => isset($_POST['hotel_pax_adult_single']) ? $_POST['hotel_pax_adult_single'] : "",
			'hotel_pax_adult_double' => isset($_POST['hotel_pax_adult_double']) ? $_POST['hotel_pax_adult_double'] : "",
			'hotel_pax_adult_triple' => isset($_POST['hotel_pax_adult_triple']) ? $_POST['hotel_pax_adult_triple'] : "",

			'hotelName' =>  isset($_POST['buildHotelName']) ? $_POST['buildHotelName'] : [],
			
			'noOfNights' => isset($_POST['buildNoNightss']) && !empty($_POST['buildNoNightss']) ? $_POST['buildNoNightss'] : $_POST['buildNoNight'],

			'roomType' => isset($_POST['buildRoomType']) ? $_POST['buildRoomType'] : [],

			'buildTravelFromdateCab' => isset($_POST['buildTravelFromdateCab']) ? $_POST['buildTravelFromdateCab'] : [],

			'pickupinternal' => isset($_POST['buildTravelToDateCab']) ? $_POST['buildTravelToDateCab'] : "",
			// 'dropoffinternal' => $_POST['buildTravelFromdateSIC'],

			'pickuppoint' => isset($_POST['buildTravelToDateSIC']) ? $_POST['buildTravelToDateSIC'] : "",
			// 'dropoffpoint' => $_POST['buildTravelToCityCab'],
			'currencyOption' => isset($_POST['currencyOption']) ? $_POST['currencyOption'] : "",
			// 'dropoffpointIn' => $_POST['buildTravelToCityCabIn'],

			// 'in_transfer' => $_POST['buildTravelFromCityCab'],
			'in_transfer_date' => isset($_POST['buildTravelFromdateCab']) ? $_POST['buildTravelFromdateCab'] : "",
			'in_transfer_pickup' => isset($_POST['buildTravelToDateCab']) ? $_POST['buildTravelToDateCab'] : "",
			'in_transfer_dropoff' => isset($_POST['buildTravelToCityCabDrop']) ? $_POST['buildTravelToCityCabDrop'] : "",

			// 'pp_transfer'=> $_POST['buildTravelFromCitySIC'],
			'pp_transfer_date' => isset($_POST['buildTravelFromdatePVT']) ? $_POST['buildTravelFromdatePVT'] : [],
			'pp_transfer_pickup' => isset($_POST['buildTravelToDateSIC']) ? $_POST['buildTravelToDateSIC'] : [],
			'pp_transfer_dropoff' => isset($_POST['buildTravelToCitySIC']) ? $_POST['buildTravelToCitySIC'] : [],
			'res_type' => isset($_POST['res_type']) ? $_POST['res_type'] : "",
			'res_name' => isset($_POST['res_name']) ? $_POST['res_name'] : [],
			'Meal' => isset($_POST['Meal']) ? $_POST['Meal'] : "",
			'Meal_Type' => isset($_POST['Meal_Type']) ? $_POST['Meal_Type'] : "",
			'no_of_meals' => isset($_POST['no_of_meals']) ? $_POST['no_of_meals'] : "",
			'transfer_with_or_without' => isset($transfer_with_or_without_arr) ? $transfer_with_or_without_arr : "",

			'visa_category_drop_down' => isset($_POST['visa_category_drop_down']) ? $_POST['visa_category_drop_down'] : "",
			'entry_type' => isset($_POST['entry_type']) ? $_POST['entry_type'] : "",
			'visa_validity' => isset($_POST['visa_validity']) ? $_POST['visa_validity'] : "",
			'internal_route' => isset($_POST['buildTravelTypeCab']) ? $_POST['buildTravelTypeCab'] : "",
			'return_route' => isset($_POST['buildTravelTypeSIC']) ? $_POST['buildTravelTypeSIC'] : "",
			'buildRoomType' => isset($_POST['buildRoomType']) ? $_POST['buildRoomType'] : [],
			'room_sharing_types' => isset($_POST['room_sharing_types']) ? $_POST['room_sharing_types'] : "",
			'admin_name' => $this->session->userdata('admin_username'),
		);

		if(isset($_POST['buildHotelName'])){
			$data['proposalDetails']['perpax_cnb'] =  $_POST['perpax_cnb_input'];
		}

		$user_id = $this->session->userdata()['admin_id'];
		$data['admin_user_data'] = $this->db->where('id', $user_id)->get('users')->row();

		$data['pricing_info'] = array(
			'query_id' => $_POST['QueryId'],
			'user_id' => $this->session->userdata('admin_id'),
			'user_name' => $this->session->userdata('admin_username'),
			'package_price' => $_POST['totalprice_package'],

			'adult_single_sharing' => $_POST['subtotal_adults'].','.$_POST['totalprice_adult'].','.$_POST['perpax_adult'] ,
			'double_sharing' => $_POST['subtotal_adults_double'].','.$_POST['totalprice_adult_double'].','.$_POST['perpax_adult_double'] ,
			'triple_sharing' => $_POST['subtotal_adults_triple'].','.$_POST['totalprice_adult_triple'].','.$_POST['perpax_adult_triple'] ,
			'child_cwb' => $_POST['subtotal_childs'].','.$_POST['totalprice_childs'].','.$_POST['perpax_childs'] ,
			'cnb' => $_POST['subtotal_cnb'].','.$_POST['totalprice_cnb'].','.$_POST['perpax_cnb'] ,
			'infants' => $_POST['subtotal_infants'].','.$_POST['totalprice_infants'].','.$_POST['perpax_infants'] ,
		);

		$query = $this->db->where('query_id', $_POST['QueryId'])->get('pricing_info');
		if ($query->num_rows() > 0) {
			$this->db->where('query_id', $_POST['QueryId']);
			$this->db->update('pricing_info',$data['pricing_info']);
		} else {
			$this->db->insert('pricing_info', $data['pricing_info']);
		}


		// 										print_r($data['proposalDetails']);
		// return
		$data['buildpackage'] = $this->db->where('queryId', $_POST['QueryId'])->get('querypackage')->row();
		// echo"<pre>";print_r($data['buildpackage']);exit;
		$data['b2bcustomerquery'] = $this->db->where('query_id', $_POST['QueryId'])->get('b2bcustomerquery')->row();
		$data["hotel_query_details"] = $this->db->where('query_id', $_POST['QueryId'])->get('query_hotel')->row();
		$data["activity_query_details"] = $this->db->where('query_id', $_POST['QueryId'])->get('query_excursion')->row();
		// $this->db->where('query_id',$_POST['QueryId'])->update('b2bcustomerquery',$updatedata);
		// echo"<pre>";print_r($data);exit;

		// $this->db->insert('package',$data['proposalDetails']);


		$this->load->view('query/newproposal_new', $data);
	}

	public function viewProposal($q_id = '')
	{
		// echo"<pre>";print_r($_POST);exit;
		// return;

		$adult_total = 0; $child_total = 0; $infant_total = 0;

		$data["internal_query"] = $this->db->where('query_id', $q_id)->where('transfer_type', 'internal')->get('query_transfer')->result();
		$data['return_query'] = $this->db->where('query_id', $q_id)->where('transfer_type', 'return')->get('query_transfer')->result();
		
		if(count($data["internal_query"]) > 0){
			$adult_total += ($data["internal_query"][0]->adult_price *  $data["internal_query"][0]->adult_pax) ;
			$child_total += ($data["internal_query"][0]->child_price *  $data["internal_query"][0]->child_pax);
			} 
		
		if(count($data["return_query"]) > 0){
			$adult_total += ($data["return_query"][0]->adult_price *  $data["return_query"][0]->adult_pax);
			$child_total +=	($data["return_query"][0]->child_price *  $data["return_query"][0]->child_price);
		}

		// echo"<pre>";print_r($trasnfer_adult_price);exit;

		$data["visa_query"] = $this->db->where('query_id', $q_id)->get('query_visa')->result();
		if(count($data["visa_query"]) > 0){
			$adult_total += $data["visa_query"][0]->adult_price;
			$child_total += $data["visa_query"][0]->child_price;
			$infant_total += $data["visa_query"][0]->infant_price;
		}

		$data["pvt_query"] = $this->db->where('query_id', $q_id)->where('excursion_type', 'PVT')->get('query_excursion')->result();
		$data['sic_query'] = $this->db->where('query_id', $q_id)->where('excursion_type', 'SIC')->get('query_excursion')->result();
		$data['tkt_query'] = $this->db->where('query_id', $q_id)->where('excursion_type', 'TKT')->get('query_excursion')->result();
		
		if(count($data["pvt_query"]) > 0){
			$adult_total += $data["pvt_query"][0]->adult_price;
			$child_total += $data["pvt_query"][0]->child_price;
			$infant_total += $data["pvt_query"][0]->infant_price;
		}
		if(count($data["sic_query"]) > 0){
			$adult_total += $data["sic_query"][0]->adult_price;
			$child_total += $data["sic_query"][0]->child_price;
			$infant_total += $data["sic_query"][0]->infant_price;
		}
		if(count($data["tkt_query"]) > 0){
			$adult_total += $data["tkt_query"][0]->adult_price;
			$child_total += $data["tkt_query"][0]->child_price;
			$infant_total += $data["tkt_query"][0]->infant_price;
		}

		$data["meal_query"] = $this->db->where('query_id', $q_id)->get('query_meal')->result();
		
		if(count($data["meal_query"]) > 0){
			$adult_total += $data["meal_query"][0]->adult_price;
			$child_total += $data["meal_query"][0]->child_price;
		}
		$data["hotel_query"] = $this->db->where('query_id', $q_id)->get('query_hotel')->result();

		if(count($data["hotel_query"]) > 0){
			$adult_total += $data["hotel_query"][0]->adult_price;
			$child_total += $data["hotel_query"][0]->child_price;
			$infant_total += $data["hotel_query"][0]->infant_price;
		}

		$user_id = $this->session->userdata()['admin_id'];
		$data['admin_user_data'] = $this->db->where('id', $user_id)->get('users')->row();

		$data["package_query"] = $this->db->where('queryId', $q_id)->get('querypackage')->result();
		
		$data['buildpackage'] = $this->db->where('queryId', $q_id)->get('querypackage')->row();
		$data['b2bcustomerquery'] = $this->db->where('query_id', $q_id)->get('b2bcustomerquery')->row();

		$data["price_info"] = $this->db->where('query_id', $q_id)->get('pricing_info')->row();

		$data['adult_per_pax'] = $adult_total == 0 || $data["package_query"][0]->adult == 0  ? 0 :  $adult_total / $data["package_query"][0]->adult;
		$data['child_per_pax'] = $child_total == 0 || $data["package_query"][0]->child  == 0 ? 0 :  $child_total / $data["package_query"][0]->child;
		$data['infant_per_pax'] = $infant_total == 0 || $data["package_query"][0]->infant == 0 ? 0 : $infant_total / $data["package_query"][0]->infant;
		$this->load->view('query/view_proposal', $data);
	}


	/*public function CreateProposal()
	{
		// echo '<pre>';print_r($_POST);exit;
		$data['proposalDetails'] = array('package_title'=>$_POST['packageType'],
										'inclusion_supplier'=>$_POST['packageInclusion'],
										'supplier'=>$_POST['supplier'],	
										'distance_covered'=>$_POST['destinationCovered'],
										'hotel_city'=>$_POST['buildHotelCity'],
										'checkin'=>$_POST['buildCheckIn'],
										'nights'=>$_POST['buildNoNights'],
										'hotel_name'=>$_POST['buildHotelName'],
										'room_type'=>$_POST['buildRoomType'],
										'meal_plan'=>$_POST['buildMealType'],
									
										'transport_type'=>$_POST['TransType'],
										'fromdate_transport'=>$_POST['buildTravelFromdateCab'],
										'fromcity_transport'=>$_POST['buildTravelFromCityCab'],
										'todate_transport'=>$_POST['buildTravelToDateCab'],
										'tocity_transport'=>$_POST['buildTravelToCityCab'],
										'transport_desc'=>$_POST['buildTravelTypeCab'],

										'visa_details'=>$_POST['visaDetails'],
										'price_per_adult'=>$_POST['visaPerAdultCost'],
										'total_cost_visa'=>$_POST['visaTotalCost'],
										'markup_visa'=>$_POST['visaTotalMarkup'],
										'final_cost_visa'=>$_POST['visaFinalPrice'],
										'transfer_details'=>$_POST['transferDetails'],

										'pricing_info_type'=>$_POST['pricingInfo'],
										'pricing_info_curreny'=>$_POST['currencyOption'],

										'visa_total_cost_per'=>$_POST['pricingTotalCost'],
										'visa_total_cost'=>$_POST['pricingTotalMarkup'],
										'visa_total_markup'=>$_POST['pricingTotalCost']+$_POST['pricingTotalMarkup'],

										'package_total_cost_per'=>$_POST['totalCostPackage'],
										'package_markup'=>$_POST['PackageMarkup'],
                                         'package_total_cost'=>(!empty($_POST['totalCostPackage']) ? $_POST['totalCostPackage'] : 0 )+$_POST['PackageMarkup'],

                                         
										
										'total_package_cost'=>$_POST['TotalSales'],
										'whyuseus'=>$_POST['buildPackageWhyUse'],
										'booking_terms'=>$_POST['buildPackageBookingTerms'],
										'refund'=>$_POST['buildPackageRefund'],
										'general_info'=>$_POST['buildPackageInformations'],
										'cancelation_policy'=>$_POST['buildPackageCancellations'],
										'inclusions'=>$_POST['buildPackageInclusions'],
										'exclusions'=>$_POST['buildPackageExclusions'],
										'query_id'=>$_POST['QueryId'],

										'buildPackageConditions'=>$_POST['buildPackageConditions'],
										
									
									);
									$this->db->insert('package',$data['proposalDetails']);
									$data['buildpackage']= $this->db->where('queryId',$_POST['QueryId'])->get('querypackage')->row();
									$data['b2bcustomerquery']= $this->db->where('query_id',$_POST['QueryId'])->get('b2bcustomerquery')->row();
		// $this->load->view('query/newproposal',$data,TRUE);
	$updatedata = array('status' => "Sent");
	$this->db->where('query_id',$_POST['QueryId'])->update('b2bcustomerquery',$updatedata);

		 $this->load->view('query/newproposal',$data);
	// 	echo $response;
	// 	//echo $response;exit;
	// 	$this->pdf->load_html($response); 

    //      $this->pdf->set_base_path('/');// Load HTML content
	// 	$this->pdf->setPaper('A4', 'landscape'); // (Optional) Setup the paper size and orientation
			
	// 	$this->pdf->render();// Render the HTML as PDF
	// 		$output = $this->pdf->output();
    //    // $this->pdf->stream("welcome.pdf", array("Attachment"=>1));// Output the generated PDF (1 = download and 0 = preview)
	// 		file_put_contents("./public/uploads/file1.pdf", $output);
       

		

	}*/

	public function CreateProposalExcursion()
	{
		error_reporting(0);
		// echo"<pre>";print_r($_POST);exit;
		$data['proposalDetails'] = array(

			'query_id' => $_POST['QueryId'],
			'perpax_adult' =>  $_POST['perpax_adult_input'],
			'perpax_childs' =>  $_POST['perpax_childs_input'],
			'perpax_infants' => $_POST['perpax_infants_input'],

			'totalprice_adult' => $_POST['totalprice_adult'],
			'totalprice_childs' => $_POST['totalprice_childs'],
			'totalprice_infants' => $_POST['totalprice_infants'],

			'subtotal_adults' => $_POST['subtotal_adults'],
			'subtotal_childs' => $_POST['subtotal_childs'],
			'subtotal_infants' => $_POST['subtotal_infants'],
			'admin_name' => $this->session->userdata('admin_username'),

			'excursion_name_SIC' => $_POST['excursion_name_SIC'],
			'excursion_name_PVT' => $_POST['excursion_name_PVT'],
			'excursion_name_TKT' => $_POST['excursion_name_TKT'],
			'ex_hotel_pickup' => $_POST['ex_hotel_pickup'],

			'currencyOption' => $_POST['currencyOption'],
			'loggedInUser' => $this->session->userdata('admin_username')

		);


		$data['pricing_info'] = array(
			'query_id' => $_POST['QueryId'],
			'user_id' => $this->session->userdata('admin_id'),
			'user_name' => $this->session->userdata('admin_username'),
			'excursion_price' => $_POST['totalprice_excursion'],

			'adult_single_sharing' => $_POST['subtotal_adults'].','.$_POST['totalprice_adult'].','.$_POST['perpax_adult_input'] ,
			'child_cwb' => $_POST['subtotal_childs'].','.$_POST['totalprice_childs'].','.$_POST['perpax_childs_input'] ,
			'infants' => $_POST['subtotal_infants'].','.$_POST['totalprice_infants'].','.$_POST['perpax_infants_input'] ,
			
		);

		$query = $this->db->where('query_id', $_POST['QueryId'])->get('pricing_info');
		if ($query->num_rows() > 0) {
			$this->db->where('query_id', $_POST['QueryId']);
			$this->db->update('pricing_info',$data['pricing_info']);
		} else {
			$this->db->insert('pricing_info', $data['pricing_info']);
		}

		$user_id = $this->session->userdata()['admin_id'];
		$data['admin_user_data'] = $this->db->where('id', $user_id)->get('users')->row();

		$data['buildpackage'] = $this->db->where('queryId', $_POST['QueryId'])->get('querypackage')->row();
		$data['b2bcustomerquery'] = $this->db->where('query_id', $_POST['QueryId'])->get('b2bcustomerquery')->row();
		// $this->load->view('query/newproposal',$data,TRUE);
		$data['buildhotel'] = $this->db->where('query_id', $_POST['QueryId'])->get('query_hotel')->row();

		$updatedata = array('status' => "Sent");
		$this->db->where('query_id', $_POST['QueryId'])->update('b2bcustomerquery', $updatedata);

		$this->load->view('query/finalexcursion', $data);
		// 	echo $response;
		// 	//echo $response;exit;
		// 	$this->pdf->load_html($response); 

		//      $this->pdf->set_base_path('/');// Load HTML content
		// 	$this->pdf->setPaper('A4', 'landscape'); // (Optional) Setup the paper size and orientation

		// 	$this->pdf->render();// Render the HTML as PDF
		// 		$output = $this->pdf->output();
		//    // $this->pdf->stream("welcome.pdf", array("Attachment"=>1));// Output the generated PDF (1 = download and 0 = preview)
		// 		file_put_contents("./public/uploads/file1.pdf", $output);


	}

	public function CreateProposalHotelSave()
	{

		$rows_count = $this->input->post('total_rows') + 1;
		$QueryId = $this->input->post('QueryId');
		$buildPackageInclusions = $this->input->post('buildPackageInclusions');
		$buildPackageExclusions = $this->input->post('buildPackageExclusions');
		$buildPackageConditions = $this->input->post('buildPackageConditions');
		$buildPackageCancellations = $this->input->post('buildPackageCancellations');
		$buildPackageRefund = $this->input->post('buildPackageRefund');
		$totalprice_adult = $this->input->post('totalprice_adult');
		$totalprice_childs = $this->input->post('totalprice_childs');
		$totalprice_infants = $this->input->post('totalprice_infants');

		$totalprice_adult_double = $this->input->post('totalprice_adult_double');
		$totalprice_adult_triple = $this->input->post('totalprice_adult_triple');

		$hotel_pax_adult = $this->input->post('hotel_pax_adult');
		$hotel_pax_adult_double = $this->input->post('hotel_pax_adult_double');
		$hotel_pax_adult_triple = $this->input->post('hotel_pax_adult_triple');

		$total_pricing = (int)$totalprice_adult + (int)$totalprice_adult_double + (int)$totalprice_adult_triple + (int)$totalprice_childs + (int)$totalprice_infants;
		$created_by = $this->session->userdata('admin_id');
		$tableData = $this->input->post('data');
		$datas =  array();
		for ($x = 0; $x < $rows_count; $x++) {
			$datas[$x]['query_id'] = $QueryId;
			$datas[$x]['hotel_city'] = $tableData[0]['cities'][$x];
			$datas[$x]['checkin'] = $tableData[0]['checkIn'][$x];
			$datas[$x]['nights'] = $tableData[0]['nights'][$x];
			$datas[$x]['hotel_id'] = $tableData[0]['hotelName'][$x];
			$datas[$x]['category'] = $tableData[0]['category'][$x];
			$datas[$x]['room_type'] = $tableData[0]['roomType'][$x];
			// $datas[$x]['bed_types'] = $tableData[0]['bedType'][$x];
			$datas[$x]['created_at'] = date('Y-m-d');
			$datas[$x]['booked_by'] = "";
			$datas[$x]['buildPackageInclusions'] = $buildPackageInclusions;
			$datas[$x]['buildPackageExclusions'] = $buildPackageExclusions;
			$datas[$x]['buildPackageConditions'] = $buildPackageConditions;
			$datas[$x]['buildPackageCancellations'] = $buildPackageCancellations;
			$datas[$x]['buildPackageRefund'] = $buildPackageRefund;
			$datas[$x]['total_price'] = $total_pricing;
			$datas[$x]['created_by'] = $created_by;
		}
		

		// $query = $this->db->where('query_id', $QueryId)->get('query_hotel');
		// if ($query->num_rows() > 0) {
		// 	$this->db->where('query_id', $QueryId)->delete('query_hotel');
		// 	$this->db->insert_batch('query_hotel', $datas);
		// } else {
		// 	$this->db->insert_batch('query_hotel', $datas);
		// }

		echo json_encode($datas);
	}
	public function CreateProposalHotel()
	{
		// print_r($this->input->post());
		// exit;return;
		$hotels = [];
		if(isset($_POST['buildHotelName'])){
		foreach ($_POST['buildHotelName'] as $key => $value) {
			$hotels[] = $this->db->get_where('hotel', array('id' => $value))->row();
		}
	}

		$data['proposalDetails'] = array(
			'perpax_adult' =>  $_POST['perpax_adult'],
			'perpax_childs' =>  $_POST['perpax_childs'],
			'perpax_infants' => $_POST['perpax_infants'],

			'perpax_double' => $_POST['perpax_adult_double'],
			'perpax_triple' => $_POST['perpax_adult_triple'],
			'admin_name' => $this->session->userdata('admin_username'),

			// 'totalprice_adult' => $_POST['totalprice_adult'],
			// 'totalprice_adult_double' => $_POST['totalprice_adult_double'],
			// 'totalprice_adult_triple' => $_POST['totalprice_adult_triple'],
			// 'totalprice_childs' => $_POST['totalprice_childs'],
			// 'totalprice_infants' => $_POST['totalprice_infants'],

			'buildPackageInclusions' => isset($_POST['buildPackageInclusions']) ? $_POST['buildPackageInclusions'] : NULL,
			'buildPackageExclusions' => isset($_POST['buildPackageExclusions']) ? $_POST['buildPackageExclusions'] : NULL,
			'buildPackageConditions' => isset($_POST['buildPackageConditions']) ? $_POST['buildPackageConditions'] : NULL,
			'buildPackageCancellations' => isset($_POST['buildPackageCancellations']) ? $_POST['buildPackageCancellations'] : NULL,
			// 'buildPackageRefund' => $_POST['buildPackageRefund'],

			'totalprice_adult' => $_POST['totalprice_adult'],
			'totalprice_adult_double' => $_POST['totalprice_adult_double'],
			'totalprice_adult_triple' => $_POST['totalprice_adult_triple'],
			'totalprice_childs' => $_POST['totalprice_childs'],
			'totalprice_infants' => $_POST['totalprice_infants'],

			'subtotal_adults' => $_POST['subtotal_adults'],
			'subtotal_adults_double' => $_POST['subtotal_adults_double'],
			'subtotal_adults_triple' => $_POST['subtotal_adults_triple'],
			'subtotal_childs' => $_POST['subtotal_childs'],
			'subtotal_infants' => $_POST['subtotal_infants'],

			'hotel_pax_adult' => $_POST['hotel_pax_adult'],
			'hotel_pax_adult_double' => $_POST['hotel_pax_adult_double'],
			'hotel_pax_adult_triple' => $_POST['hotel_pax_adult_triple'],

			'hotel_city' => $_POST['buildHotelCity'],
			'nights' => $_POST['buildNoNight'],
			'hotels' => $hotels,
			'roomType' => $_POST['buildRoomType'],
			'hotel_name' => $_POST['buildHotelName'],
			'room_type' => $_POST['buildRoomType'],
			'pricing_info_curreny' => $_POST['currencyOption'],
			'query_id' => $_POST['QueryId'],
			'loggedInUser' => $this->session->userdata('admin_username'),
			'room_sharing_types' => $_POST['room_sharing_types'],
			'build_room_types' => $_POST['build_room_types'],
			'roomType' => $_POST['buildRoomType'],

		);
		
		
		$data['pricing_info'] = array(
			'query_id' => $_POST['QueryId'],
			'user_id' => $this->session->userdata('admin_id'),
			'user_name' => $this->session->userdata('admin_username'),
			'hotel_price' => $_POST['totalprice_hotel'],

			'adult_single_sharing' => $_POST['subtotal_adults'].','.$_POST['totalprice_adult'].','.$_POST['perpax_adult'] ,
			'double_sharing' => $_POST['subtotal_adults_double'].','.$_POST['totalprice_adult_double'].','.$_POST['perpax_adult_double'] ,
			'triple_sharing' => $_POST['subtotal_adults_triple'].','.$_POST['totalprice_adult_triple'].','.$_POST['perpax_adult_triple'] ,
			'child_cwb' => $_POST['subtotal_childs'].','.$_POST['totalprice_childs'].','.$_POST['perpax_childs'] ,
			'cnb' => $_POST['subtotal_infants'].','.$_POST['totalprice_infants'].','.$_POST['perpax_infants'] ,
			
		);

		$query = $this->db->where('query_id', $_POST['QueryId'])->get('pricing_info');
		if ($query->num_rows() > 0) {

			$this->db->where('query_id', $_POST['QueryId']);
			$this->db->update('pricing_info',$data['pricing_info']);

		} else {
			$this->db->insert('pricing_info', $data['pricing_info']);
		}



		$user_id = $this->session->userdata()['admin_id'];
		$data['admin_user_data'] = $this->db->where('id', $user_id)->get('users')->row();

		$data['buildpackage'] = $this->db->where('queryId', $_POST['QueryId'])->get('querypackage')->row();
		$data['b2bcustomerquery'] = $this->db->where('query_id', $_POST['QueryId'])->get('b2bcustomerquery')->row();
		// $this->load->view('query/newproposal',$data,TRUE);

		$updatedata = array('status' => "Sent");
		$this->db->where('query_id', $_POST['QueryId'])->update('b2bcustomerquery', $updatedata);
		$data['hotels'] = array(); // $this->db->where('id',$_POST['buildHotelName'])->get('hotel')->row();
		// echo"<pre>";print_r($data['hotels']);exit;

		// echo"<pre>";print_r($data);exit;
		$this->load->view('query/finalhotel', $data);
		// 	echo $response;
		// 	//echo $response;exit;
		// 	$this->pdf->load_html($response); 

		//      $this->pdf->set_base_path('/');// Load HTML content
		// 	$this->pdf->setPaper('A4', 'landscape'); // (Optional) Setup the paper size and orientation

		// 	$this->pdf->render();// Render the HTML as PDF
		// 		$output = $this->pdf->output();
		//    // $this->pdf->stream("welcome.pdf", array("Attachment"=>1));// Output the generated PDF (1 = download and 0 = preview)
		// 		file_put_contents("./public/uploads/file1.pdf", $output);


	}


	public function addQueryTransfer()
	{
		//echo '<pre>';print_r($_POST);exit;

		$data = array(
			'qtype' => $this->input->post('qtype'),
			'TgoingTo' => $this->input->post('TgoingTo'),
			'TgoingFrom' => $this->input->post('TgoingFrom'),
			'TspecificDate' => $this->input->post('TspecificDate'),
			'TnoOfDays' => $this->input->post('TnoOfDays'),
			'Ttravelers' => $this->input->post('Ttravelers'),
			'pickUp' => $this->input->post('pickUp'),
			'Tpreference' => $this->input->post('Tpreference'),
			'TleadSource' => $this->input->post('TleadSource'),
			'Tremarks' => $this->input->post('Tremarks'),
			'Tassignto' => $this->input->post('Tassignto'),
			'queryId' => $this->input->post('queryId'),
			'created_date' => $this->input->post('created_date')
		);

		$query_id = $this->input->post('queryId');

		if ($this->db->insert('querytransfer', $data)) {
			$this->session->set_flashdata('successPackage', 'Transfer Query Created Sucessfully');
			redirect('query/package/' . $query_id, 'refresh');
		} else {
			$this->session->set_flashdata('error', 'Something Went Wrong');
			redirect('query/package/' . $query_id, 'refresh');
		}
	}


	public function addQueryVisa()
	{
		// echo '<pre>';print_r($_POST);exit;

		$data = array(
			'visaCountry' => $this->input->post('visaCountry'),
			'vCategory' => $this->input->post('vCategory'),
			'visaEntryType' => $this->input->post('visaEntryType'),
			'visaDateofTravel' => $this->input->post('visaDateofTravel'),
			'visaApplicants' => $this->input->post('visaApplicants'),
			'visaDuration' => $this->input->post('visaDuration'),
			'visaNationality' => $this->input->post('visaNationality'),
			'visaAssignTo' => $this->input->post('visaAssignTo'),
			'visaTraveler' => $this->input->post('visaTraveler'),
			'visaFirstname' => $this->input->post('visaFirstname'),
			'visaLastname' => $this->input->post('visaLastname'),
			'visaPax' => $this->input->post('visaPax'),
			'visaComment' => $this->input->post('visaComment'),
			'queryId' => $this->input->post('queryId'),
			'created_date' => $this->input->post('created_date')
		);

		$query_id = $this->input->post('queryId');

		if ($this->db->insert('queryvisa', $data)) {
			$this->session->set_flashdata('successPackage', 'Visa Query Created Sucessfully');
			redirect('query/package/' . $query_id, 'refresh');
		} else {
			$this->session->set_flashdata('error', 'Something Went Wrong');
			redirect('query/package/' . $query_id, 'refresh');
		}
	}



	public function addQueryHotel()
	{
		// echo '<pre>';print_r($_POST);exit;
		$data = array(
			'hotelDestination' => $this->input->post('hotelDestination'),
			'hotelCheckIn' => $this->input->post('hotelCheckIn'),
			'hotelCheckOut' => $this->input->post('hotelCheckOut'),
			'hotelNights' => $this->input->post('hotelNights'),
			'hotelNationality' => $this->input->post('hotelNationality'),
			'hotelRatings' => $this->input->post('hotelRatings'),
			'hotelAssignto' => $this->input->post('hotelAssignto'),
			'hotelRemarks' => $this->input->post('hotelRemarks'),
			'queryId' => $this->input->post('queryId'), 
			'created_date' => $this->input->post('created_date')
		);
		$query_id = $this->input->post('queryId');

		if ($this->db->insert('queryhotel', $data)) {
			$this->session->set_flashdata('successPackage', 'Hotel Query Created Sucessfully');
			redirect('query/package/' . $query_id, 'refresh');
		} else {
			$this->session->set_flashdata('error', 'Something Went Wrong');
			redirect('query/package/' . $query_id, 'refresh');
		}
	}

	public function addQueryExcursion()
	{
		// echo '<pre>';print_r($_POST);exit;
		$data = array(
			'Edestination' => $this->input->post('Edestination'),
			'EtourDate' => $this->input->post('EtourDate'),
			'ENatioality' => $this->input->post('ENatioality'),
			'EnoOfPax' => $this->input->post('EnoOfPax'),
			'Eadults' => $this->input->post('Eadults'),
			'Echild' => $this->input->post('Echild'),
			'Eremarks' => $this->input->post('Eremarks'),
			'EassignTo' => $this->input->post('EassignTo'),
			'queryId' => $this->input->post('queryId'),
			'created_date' => $this->input->post('created_date')
		);
		$query_id = $this->input->post('queryId');

		if ($this->db->insert('queryexcusion', $data)) {
			$this->session->set_flashdata('successPackage', 'Excursion Query Created Sucessfully');
			redirect('query/package/' . $query_id, 'refresh');
		} else {
			$this->session->set_flashdata('error', 'Something Went Wrong');
			redirect('query/package/' . $query_id, 'refresh');
		}
	}
	public function addFollowUp()
	{
		//echo '<pre>';print_r($_POST);exit;
		$redirect_url = site_url() . '/query/view_query';

		$today = $this->input->post('followUpday');
		$Date = date('Y-m-d');
		$dt = '';
		if($today == 'today')
		{
			$dt = date('Y-m-d', strtotime($Date));
			
		}
		if($today == 'tomorrow')
		{
			$dt = date('Y-m-d', strtotime($Date. ' + 1 days'));
			
		}
		if($today == '2days')
		{
			$dt = date('Y-m-d', strtotime($Date. ' + 2 days'));
		}
		if($today == '3days')
		{
			$dt = date('Y-m-d', strtotime($Date. ' + 3 days'));
		}

		$data = array(
			'followUptype' => $this->input->post('followUptype'),
			'followUpday' => $this->input->post('followUpday'),
			'followUpTime' => $this->input->post('followUpTime'),
			'followUpCustomer' => $this->input->post('followUpCustomer'),
			'followUpAssignTo' => $this->input->post('followUpAssignTo'),
			'followUpdetails' => $this->input->post('followUpdetails'),
			'followUpQueryStatus' => $this->input->post('followUpQueryStatus'),
			'query_id' => $this->input->post('followUpQueryId'),
			'followUpRemarks' => $this->input->post('followUpRemarks')
		);

		$data_package = ["follow_up_status" => $this->input->post('followUpQueryStatus')];
		$package = $this->db->where('queryId',  $this->input->post('followUpQueryId'))->update('querypackage', $data_package);

		if ($this->db->insert('followups', $data)) {
			// echo "<script>alert('Follow Added Sucessfully');window.location='" . $redirect_url . "';</script>";
			$this->session->set_flashdata('success','Follow Added Sucessfully');
			redirect('query/view_query','refresh');
		} else {
			echo "<script>alert('Something went wrong try again later');window.location='" . $redirect_url . "';</script>";
		}
	}
}
