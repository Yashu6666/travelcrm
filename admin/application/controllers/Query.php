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
				'smtp_user' => 'test.yrpitsolutions.com@gmail.com',
				'smtp_pass' => 'xcvbtihuojnhvmrn',
				'crlf' => "\r\n",
				'mailtype' => "html",
				'newline' => "\r\n",
			);
			
			$data['details'] = $data_en;
			// echo"<pre>";print_r($data['details']);exit;return;

			// $body = $this->load->view('query/email_templates/proposal', $data, TRUE);	
			// print_r($body);	
			// return;	
			// print_r($data['details']);	
			// print_r($data['details2']);	
			// $this->load->view('query/email_templates/proposal', $data);
			// return;	
			if ($data['details']->type == 'package'){
				$body = $this->load->view('query/email_templates/package/package_mail', $data, TRUE);
				echo "Email Sent package";
			}
			elseif ($data['details']->type == 'transfer'){
				// $this->load->view('query/email_templates/proposal_transfer', $data);return;
				$body = $this->load->view('query/email_templates/proposal_transfer', $data, TRUE);
			}elseif($data['details']->type == 'hotel'){
				$body = $this->load->view('query/email_templates/temp_hotel', $data, TRUE);
			}elseif($data['details']->type == 'visa'){
				$body = $this->load->view('query/email_templates/temp_visa', $data, TRUE);
			}elseif($data['details']->type == 'excursions'){
				$body = $this->load->view('query/email_templates/temp_excursion', $data, TRUE);
			}elseif($data['details']->type == 'meals'){
				$body = $this->load->view('query/email_templates/temp_meal', $data, TRUE);
			}
			else {
				$body = $this->load->view('query/email_templates/proposal', $data, TRUE);
			}

			$this->email->initialize($config);
			$this->email->from('test.yrpitsolutions.com@gmail.com');
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
		// $this->db->select("*");

		// $this->db->from("b2bcustomerquery cb");

		// $this->db->join('querypackage qp','cb.query_id=qp.queryId','LEFT');
		// $this->db->join('querytransfer qt','cb.query_id=qt.queryId','LEFT');
		// $this->db->join('queryvisa qv','cb.query_id=qv.queryId','LEFT');
		// $this->db->join('queryhotel qh','cb.query_id=qh.queryId','LEFT');
		// $this->db->join('queryexcusion qe','cb.query_id=qe.queryId','LEFT');

		// $sql="SELECT * FROM b2bcustomerquery";
		error_reporting(0);
		// $inprogress = $this->db->where('lead_stage', "Inprogress")->get('b2bcustomerquery')->result();
		$inprogress = $this->db->where('cb.lead_stage', "Inprogress")->join('querypackage qp','cb.query_id=qp.queryId')->group_by('qp.queryId')->get('b2bcustomerquery cb')->result();

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
		$recent = $this->db->query("select * FROM querypackage as qp join b2bcustomerquery as cb  ON cb.query_id=qp.queryId where cb.created_at BETWEEN DATE_SUB(NOW(), INTERVAL 15 DAY) AND NOW() group by qp.queryId ")->result();



		if (isset($recent)) {
			$data['recent'] = count($recent);
		} else {
			$data['recent'] = 0;
		}

		$confirmed = $this->db->where('lead_stage', "Confirmed")->get('b2bcustomerquery')->result();
		if (isset($confirmed)) {
			$data['confirmed'] = count($confirmed);
		} else {
			$data['confirmed'] = 0;
		}

		$rejected = $this->db->where('lead_stage', "Rejected")->get('b2bcustomerquery')->result();
		if (isset($rejected)) {
			$data['rejected'] = count($rejected);
		} else {
			$data['rejected'] = 0;
		}


		$callback = $this->db->where('lead_stage', "Callback")->get('b2bcustomerquery')->result();
		if (isset($callback)) {
			$data['callback'] = count($callback);
		} else {
			$data['callback'] = 0;
		}

		$overall = $this->db->query("SELECT DISTINCT(queryId) FROM querypackage")->result();
		if (isset($overall)) {
			$data['overall'] = count($overall);
		} else {
			$data['overall'] = 0;
		}

		
		if ($type == 'Inprogress') {
			$query = $this->db->where('lead_stage', "Inprogress")->get('b2bcustomerquery')->result();
		} else if ($type == 'Callback') {
			$query = $this->db->where('lead_stage', "Callback")->get('b2bcustomerquery')->result();
		} else if ($type == 'Rejected') {
			$query = $this->db->where('lead_stage', "Rejected")->get('b2bcustomerquery')->result();
		} else if ($type == 'Confirmed') {
			$query = $this->db->where('lead_stage', "Confirmed")->get('b2bcustomerquery')->result();
		} else if ($type == 'recent') {
			// $query = $this->db->query("select * FROM b2bcustomerquery where created_at BETWEEN '" . $today_date . " 00:00:00' AND    '" . $today_date . " 11:59:59'")->result();
			$query = $this->db->query("select * FROM querypackage as qp join b2bcustomerquery as cb  ON cb.query_id=qp.queryId where cb.created_at BETWEEN DATE_SUB(NOW(), INTERVAL 15 DAY) AND NOW() group by qp.queryId ")->result();

		} else if ($type == 'Overall') {
			$query = $this->db->query("SELECT * FROM b2bcustomerquery")->result();
		} else {
			$query = $this->db->where('lead_stage', "Inprogress")->get('b2bcustomerquery')->result();
		}
		// $query=$this->db->get('b2bcustomerquery')->result();
		// echo"<pre>";print_r($query);die();

		$result = array();
		foreach ($query as $value) {
			$query_id = $value->query_id;
			$name = $value->b2bfirstName . ' ' . $value->b2blastName;
			$mobile = $value->b2bmobileNumber;
			$lead_stage = $value->lead_stage;
			$company_name = $value->b2bcompanyName;

			$created_at = $value->created_at;
			$id = $value->id;

			$package = $this->db->where('queryId', $query_id)->get('querypackage')->row();

			if (isset($package)) {
				$res = array("id" => $id, "company_name" => $company_name, "created_at" => $created_at, "query_id" => $query_id, "name" => $name, "mobile" => $mobile, "Description" => $package->type, "traveldate" => $package->specificDate, "nopax" => "adult " . $package->Packagetravelers . ", child " . $package->child, "goingTo" => $package->goingTo, "lead_stage" => $lead_stage);
				$result[] = $res;
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

	// public function view_query($type = '')
	// {

	// 	error_reporting(0);

	// 	// $query = $this->db->select("count(*) as overall")
	// 	// ->from("b2bcustomerquery cb")
	// 	// ->join('querypackage qp','cb.query_id=qp.queryId')->get()->result();
	// 	// echo"<pre>";print_r($query);exit;
	// 	// exit;
	// 	$inprogress = $this->db->where('cb.lead_stage', "Inprogress")->join('querypackage qp','cb.query_id=qp.queryId')->get('b2bcustomerquery cb')->result();


	// 	if (isset($inprogress)) {
	// 		$data['inprogress'] = count($inprogress);
	// 	} else {
	// 		$data['inprogress'] = 0;
	// 	}
		
	// 	// $today_date = date("Y-m-d");
	// 	$date = new DateTime("now");

	// 	$curr_date = $date->format('Y-m-d ');
	// 	//print_r("select * FROM b2bcustomerquery where created_at BETWEEN '".$today_date." 00:00:00' AND    '".$today_date." 11:59:59'");die();
	// 	// $recent = $this->db->query("select * FROM b2bcustomerquery where created_at BETWEEN '" . $today_date . " 00:00:00' AND    '" . $today_date . " 11:59:59'")->result();
	// 	$recent = $this->db->query("select cb.* FROM b2bcustomerquery as cb join querypackage as qp ON cb.query_id=qp.queryId where DATE(cb.created_at) = '" . $curr_date . "' ")->result();

	// 	if (isset($recent)) {
	// 		$data['recent'] = count($recent);
	// 	} else {
	// 		$data['recent'] = 0;
	// 	}
		
	// 	$confirmed = $this->db->where('cb.lead_stage', "Confirmed")->join('querypackage qp','cb.query_id=qp.queryId')->get('b2bcustomerquery cb')->result();
	// 	if (isset($confirmed)) {
	// 		$data['confirmed'] = count($confirmed);
	// 	} else {
	// 		$data['confirmed'] = 0;
	// 	}

	// 	$rejected = $this->db->where('cb.lead_stage', "Rejected")->join('querypackage qp','cb.query_id=qp.queryId')->get('b2bcustomerquery cb')->result();
	// 	if (isset($rejected)) {
	// 		$data['rejected'] = count($rejected);
	// 	} else {
	// 		$data['rejected'] = 0;
	// 	}
	// 	// echo"<pre>";print_r($rejected);exit;

	// 	$callback = $this->db->where('cb.lead_stage', "Callback")->join('querypackage qp','cb.query_id=qp.queryId')->get('b2bcustomerquery cb')->result();
	// 	if (isset($callback)) {
	// 		$data['callback'] = count($callback);
	// 	} else {
	// 		$data['callback'] = 0;
	// 	}

	// 	$overall = $this->db->query("SELECT * FROM b2bcustomerquery as cb  join querypackage as qp ON cb.query_id=qp.queryId")->result();
	// 	if (isset($overall)) {
	// 		$data['overall'] = count($overall);
	// 	} else {
	// 		$data['overall'] = 0;
	// 	}

	// 	// echo '<pre>';print_r($type);exit;
	// 	if ($type == 'Inprogress') {
	// 		$query = $this->db->where('cb.lead_stage', "Inprogress")->join('querypackage qp','cb.query_id=qp.queryId')->get('b2bcustomerquery cb')->result();
	// 	} else if ($type == 'Callback') {
	// 		$query = $this->db->where('cb.lead_stage', "Callback")->join('querypackage qp','cb.query_id=qp.queryId')->get('b2bcustomerquery cb')->result();
	// 	} else if ($type == 'Rejected') {
	// 		$query = $this->db->where('cb.lead_stage', "Rejected")->join('querypackage qp','cb.query_id=qp.queryId')->get('b2bcustomerquery cb')->result();
	// 	} else if ($type == 'Confirmed') {
	// 		$query = $this->db->where('cb.lead_stage', "Confirmed")->join('querypackage qp','cb.query_id=qp.queryId')->get('b2bcustomerquery cb')->result();
	// 	} else if ($type == 'recent') {
	// 		$query = $this->db->query("select cb.* FROM b2bcustomerquery as cb join querypackage as qp ON cb.query_id=qp.queryId where DATE(cb.created_at) = '" . $curr_date . "' ")->result();
	// 	} else if ($type == 'Overall') {
	// 		$query = $this->db->query("SELECT cb.* FROM b2bcustomerquery as cb join querypackage as qp ON cb.query_id=qp.queryId")->result();
	// 	} else {
	// 		$query = $this->db->where('cb.lead_stage', "Inprogress")->join('querypackage qp','cb.query_id=qp.queryId')->get('b2bcustomerquery cb')->result();
	// 	}

		
	// 	// $query=$this->db->get('b2bcustomerquery')->result();
	// 	// echo"<pre>";print_r($query);exit();
		
	// 	$result = array();
	// 	foreach ($query as $value) {
	// 		$query_id = $value->query_id;
	// 		$name = $value->b2bfirstName . ' ' . $value->b2blastName;
	// 		$mobile = $value->b2bmobileNumber;
	// 		$lead_stage = $value->lead_stage;

	// 		$Package = $value->Package;
	// 		$Transfer = $value->Transfer;
	// 		$Hotel = $value->Hotel;
	// 		$Excursion = $value->Excursion;
	// 		$Visa = $value->Visa;
	// 		$Meals = $value->Meals;

	// 		$created_at = $value->created_at;
	// 		$id = $value->id;

	// 		$package = $this->db->where('queryId', $query_id)->get('querypackage')->row();
	// 		// $package = $this->db->query("SELECT * FROM querypackage as qp  join b2bcustomerquery as cb ON qp.queryId=cb.query_id")->result();
			

	// 		if (isset($package)) {
	// 			$res = array("id" => $id, 
	// 						"created_at" => $created_at,
	// 						"query_id" => $query_id,
	// 			 			"name" => $name,
	// 			 			"mobile" => $mobile, 
	// 						"Description" => $package->type,
	// 			  			"traveldate" => $package->specificDate,
	// 						"nopax" => "adult " . $package->Packagetravelers . ", child " . $package->child,
	// 						"goingTo" => $package->goingTo,
	// 						// "lead_stage" => $lead_stage
	// 					);
	// 			$res['lead_stage'] = "";
	// 			if($package->type == "Package") $res['lead_stage'] = $Package;
	// 			if($package->type == "Transfer") $res['lead_stage'] = $Transfer;
	// 			if($package->type == "Hotel") $res['lead_stage'] = $Hotel;
	// 			if($package->type == "Excursion") $res['lead_stage'] = $Excursion;
	// 			if($package->type == "Visa") $res['lead_stage'] = $Visa;
	// 			if($package->type == "Meals") $res['lead_stage'] = $Meals;
	// 			$result[] = $res;
	// 		}
			
	// 	}
	// 	echo '<pre>';print_r($result);
	// 	exit;
		
	// 	$data['result'] = $result;
	// 	$data['users'] = $this->db->query("SELECT * FROM users where userType!='Super Admin'")->result();
	// 	$this->load->view('query/view_query', $data);
	// }

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
		if ($this->db->where('id', $id)->delete('b2bcustomerquery')) {
			$this->session->set_flashdata('success', 'Data deleted Sucessfully');
			redirect('query/view_query', 'refresh');
		} else {
			$this->session->set_flashdata('error', 'Something Went Wrong');
			redirect('query/view_query', 'refresh');
		}
	}

	public function addQueryPackage()
	{
		//echo '<pre>';print_r($_POST);exit;

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
			'created_date' => $this->input->post('created_date')
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
		// $type = $_POST['type'];
		$data = array( 'lead_stage' => $status);
		$this->db->where('id', $id)->update('b2bcustomerquery', $data);
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
	  echo json_encode(array("data"=>$priceperperson,"route_name"=>$route_name,'row_data' =>$dropoff ));
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
	 	echo json_encode(array("data"=>$priceperperson,"route_name"=>$route_name,'row_data' =>$dropoff ));
	
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

		$subject = $data['view']->query_id . '
			 - Diamond Tours LLC Dubai / Pax:' . $data['view']->Packagetravelers . ' 
			 / ' . $data['view']->specificDate . ' / ' . $data['view']->goingTo . ' / 
			' . $data['admin_user']->firstName . ' ' . $data['admin_user']->LastName;

		$this->email->initialize($config);
		$this->email->from('test.yrpitsolutions.com@gmail.com');
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
		$data["internal_query"] = $this->db->where('query_id', $q_id)->where('transfer_type', 'internal')->get('query_transfer')->result();
		$data['return_query'] = $this->db->where('query_id', $q_id)->where('transfer_type', 'return')->get('query_transfer')->result();
		
		$data["visa_query"] = $this->db->where('query_id', $q_id)->get('query_visa')->result();

		$data["pvt_query"] = $this->db->where('query_id', $q_id)->where('excursion_type', 'PVT')->get('query_excursion')->result();
		$data['sic_query'] = $this->db->where('query_id', $q_id)->where('excursion_type', 'SIC')->get('query_excursion')->result();
		$data['tkt_query'] = $this->db->where('query_id', $q_id)->where('excursion_type', 'TKT')->get('query_excursion')->result();
		
		$data["meal_query"] = $this->db->where('query_id', $q_id)->get('query_meal')->result();

		$data["hotel_query"] = $this->db->where('query_id', $q_id)->get('query_hotel')->result();

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

	// public function getHotelCalculation(){
	// 	$pax_adult = $this->input->post('pax_adult');
	// 	$pax_child = $this->input->post('pax_child');
	// 	$build_room_type = $this->input->post('build_room_type');
	// 	$no_of_nights = $this->input->post('no_of_nights');
	// 	$build_hotel_name = $this->input->post('build_hotel_name');
	// 	$build_bed_type = $this->input->post('build_bed_type');

	// 	$extra_with_adult = $this->input->post('extra_with_adult');
	//     $extra_with_child =$this->input->post('extra_with_child');
	//     $extra_without_bed =$this->input->post('extra_without_bed');

	// 	// echo"<pre>";print_r($_POST);

	// 	$this->db->select("*");
	// 	$this->db->from("rooms");
	// 	$this->db->where('roomtype',$build_room_type);
	// 	$this->db->where('hotelname',$build_hotel_name);
	// 	$hotels_calculation = $this->db->get()->result_array();

	// 	$hotels_calculation_data =array();
	// 	if($extra_with_adult){
	// 		$netrate_extra_array = explode (",", $hotels_calculation[0]['netrate_extra']);
	// 		$vat_extra_array = explode (",", $hotels_calculation[0]['vat_extra']);

	// 		$net_rate_extra= $netrate_extra_array[0];	
	// 		$vat_extra = $vat_extra_array[0];
	// 	}else{
	// 		$net_rate_extra= 0;$vat_extra = 0;
	// 	}
	// 	if($extra_with_child){
	// 		$netrate_extra_child_array = explode (",", $hotels_calculation[0]['netrate_extra_child']);
	// 		$vat_extra_child_array = explode (",", $hotels_calculation[0]['vat_extra_child']);

	// 		$netrate_extra_child= $netrate_extra_child_array[0];	
	// 		$vat_extra_child = $vat_extra_child_array[0];

	// 	}else{
	// 		$netrate_extra_child=0; $vat_extra_child = 0;
	// 	}
	// 	if($extra_without_bed){
	// 		$netrate_extra_wo_array = explode (",", $hotels_calculation[0]['netrate_extra_wo']);
	// 		$vat_extra_wo_array = explode (",", $hotels_calculation[0]['vat_extra_wo']);

	// 		$netrate_extra_wo= $netrate_extra_wo_array[0];	
	// 		$vat_extra_wo = $vat_extra_wo_array[0];

	// 	}else{
	// 		$netrate_extra_wo= 0;$vat_extra_wo = 0;
	// 	}




	// 	if($build_bed_type == "Single" ){
	// 		// $net_rate_array = explode (",", $hotels_calculation[0]['netrate']);
	// 		// $vat_array = explode (",", $hotels_calculation[0]['vat']); 
	// 		// $net_rate= $net_rate_array[0];	
	// 		// $vat = 	$vat_array[0];
	// 		// $per_pax_adult = $net_rate + $vat;
	// 		// $total_pax_adult_rate = ($pax_adult * ($net_rate + $vat)) * $no_of_nights;

	// 		$net_rate_array = explode (",", $hotels_calculation[0]['netrate']);
	// 		$vat_array = explode (",", $hotels_calculation[0]['vat']);
	// 		// $net_rate_extra = explode (",", $hotels_calculation[0]['netrate']);
	// 		// $vat_extra = explode (",", $hotels_calculation[0]['netrate']);

	// 		$net_rate= $net_rate_array[0];	
	// 		$vat = 	$vat_array[0];



	// 	}else if($build_bed_type == "Double"){
	// 		$net_rate_array = explode (",", $hotels_calculation[0]['netrate_double']);
	// 		$vat_array = explode (",", $hotels_calculation[0]['vat_double']); 
	// 		$net_rate= $net_rate_array[0];	
	// 		$vat = 	$vat_array[0];
	// 		// $per_pax_adult = $net_rate + $vat;
	// 		// $total_pax_adult_rate = ($pax_adult * ($net_rate + $vat)) * $no_of_nights;
	// 		// $hotels_calculation_data['netrate_double'] = $hotels_calculation[0]['netrate_double'];
	// 	}else{
	// 		$net_rate= 0;$vat =0;	
	// 	}

	// 	$total_per_pax_adult = $net_rate + $vat + $net_rate_extra + $vat_extra ;

	// 	$total_per_pax_child = $netrate_extra_child + $vat_extra_child + $netrate_extra_wo + $vat_extra_wo;

	// 	$hotel_calculation_data['total_pax_adult_rate'] = ($pax_adult * ($total_per_pax_adult)) * $no_of_nights;

	// 	$hotel_calculation_data['total_pax_child_rate'] = ($pax_child * ($total_per_pax_child)) * $no_of_nights;

	// 	// $hotel_calculation_data['total_pax_adult_rate'] = ($pax_adult * ($per_pax_adult)) * $no_of_nights;



	// 	echo json_encode($hotel_calculation_data);


	// }

	public function getHotelCalculation()
	{
		$pax_adult = $this->input->post('pax_adult');
		$pax_child = $this->input->post('pax_child');
		$pax_infants = $this->input->post('pax_infants');

		// $build_room_type = $this->input->post('build_room_type');
		// $no_of_nights = $this->input->post('no_of_nights');
		// $build_hotel_name = $this->input->post('build_hotel_name');
		// $build_bed_type = $this->input->post('build_bed_type');

		// $extra_with_adult = $this->input->post('extra_with_adult');
		// $extra_with_child =$this->input->post('extra_with_child');
		// $extra_without_bed =$this->input->post('extra_without_bed');


		$rows_count = $this->input->post('total_rows') + 1;
		$QueryId = $this->input->post('query_id');

		$tableData = $this->input->post('data');
		
		// print_r($tableData);

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

			$datas[$x]['buildHotelCity'] = $tableData[0]['buildHotelCity'][$x];
			$datas[$x]['buildCheckIns'] = $tableData[0]['buildCheckIns'][$x];
			$datas[$x]['Category'] = $tableData[0]['Category'][$x];
			$datas[$x]['get_room_types'] = $tableData[0]['get_room_types'][$x];
			$datas[$x]['sharing_types'] = $tableData[0]['sharing_types'][$x];
			
		}
		$no_of_nights = ($tableData[0]['nights']);
		// print_r();exit;
		
		$hotel_names = [];
		foreach ($tableData[0]['hotelName'] as $key => $value) {
			$this->db->select('hotelname');
			$this->db->where('id', $value);
			$this->db->limit(1);
  			$name = $this->db->get('hotel');
			$hotel_names[] = $name->row()->hotelname;
		}

		// $hotel_query_data = [
		// 	'nights' => implode(',',$tableData[0]['nights']),
		// 	'hotel_id' => implode(',',$tableData[0]['hotelName']),
		// 	'room_type' => implode(',',$tableData[0]['roomType']),

		// 	'hotel_name' => implode(',',$hotel_names),
		// 	'category' => implode(',',$tableData[0]['Category']),
		// 	'checkin' => implode(',',$tableData[0]['buildCheckIns']),
		// 	'hotel_city' => implode(',',$tableData[0]['buildHotelCity']),

		// ];

		// $this->db->where('query_id', $QueryId);
		// $this->db->update('query_hotel',$hotel_query_data);

		// echo"<pre>";print_r($datas[0]['room_type']);exit;
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
			// print_r($hotels_calculation);

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
				// $vat_extra = $vat_extra_array[0];
			} else {
				$net_rate_extra = 0;
				$vat_extra = 0;
			}
			if ($val['extra_with_child']) {

				if (!empty($val['extra_with_child'])) {
					$netrate_extra_child_array = explode(",", $hotels_calculation[$k][0]['netrate_extra_child']);
					// $vat_extra_child_array = explode(",", $hotels_calculation[$k][0]['vat_extra_child']);
					$netrate_extra_child = $netrate_extra_child_array[$room_val_index];
					// $vat_extra_child = $vat_extra_child_array[0];
				}  else {
					$netrate_extra_child = 0;
				}

			} else {
				$netrate_extra_child = 0;
			}
			if ($val['extra_without_bed']) {

				if (!empty($val['extra_without_bed'])) {
					$netrate_extra_wo_array = explode(",", $hotels_calculation[$k][0]['netrate_extra_wo']);
					// $vat_extra_wo_array = explode(",", $hotels_calculation[$k][0]['vat_extra_wo']);
					$netrate_extra_wo = $netrate_extra_wo_array[$room_val_index];
					// $vat_extra_wo = $vat_extra_wo_array[0];
				}  else {
					$netrate_extra_wo = 0;
				}
			} else {
				$netrate_extra_wo = 0;
				$vat_extra_wo = 0;
			}


			

			if ($val['bed_types'] == "Single") {
				// $net_rate_array = explode (",", $hotels_calculation[0]['netrate']);
				// $vat_array = explode (",", $hotels_calculation[0]['vat']); 
				// $net_rate= $net_rate_array[0];	
				// $vat = 	$vat_array[0];
				// $per_pax_adult = $net_rate + $vat;
				// $total_pax_adult_rate = ($pax_adult * ($net_rate + $vat)) * $no_of_nights;

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
				// $per_pax_adult = $net_rate + $vat;
				// $total_pax_adult_rate = ($pax_adult * ($net_rate + $vat)) * $no_of_nights;
				// $hotels_calculation_data['netrate_double'] = $hotels_calculation[0]['netrate_double'];
			} else {
				$net_rate = 0;
				$vat = 0;
				$net_rate_extra = 0;
			}

			$total_per_pax_adult = (int)$net_rate + (int)$vat + (int)$net_rate_extra;

			$total_per_pax_child = (int)$netrate_extra_child;

			$total_per_pax_wo = (int)$netrate_extra_wo;


			// if ($pax_adult == 1) {
			// 	$hotel_calculation_data['total_pax_adult_rate'] += ((int)$pax_adult != 0  ? (int)$total_per_pax_adult / (int)$pax_adult : (int)$pax_adult) * (int)$val['nights'];
			// } else {
			
			// 	if ($val['nights'] == 1) {
			// 		$hotel_calculation_data['total_pax_adult_rate'] += ((int)$pax_adult != 0  ? (int)$total_per_pax_adult / (int)$pax_adult : (int)$pax_adult) * array_sum($no_of_nights);
			// 	} else {
			// 	print_r(($total_per_pax_adult));
			// 	print_r("---------");
			// 	print_r((int)$val['nights']);
			// 	print_r("---------");

			// 		$ad_pax = (int)$total_per_pax_adult / (int)$pax_adult;
			// 		$ad_pax1 = $ad_pax * (int)$val['nights'];
			// 		print_r("---------");
			// 		print_r($ad_pax1);
			// 		print_r("---------");
			// 		$hotel_calculation_data['total_pax_adult_rate'] += ((int)$pax_adult != 0  ? (int)$total_per_pax_adult / (int)$pax_adult : (int)$pax_adult) * (int)$val['nights'];
			// 	}

			// 	// $pax_adult_price = (int)$pax_adult != 0  ? (int)$total_per_pax_adult / (int)$pax_adult : (int)$pax_adult ;
			// 	// $hotel_calculation_data['total_pax_adult_rate'] += $pax_adult_price * (int)$no_of_nights;
			// 	// print_r($pax_adult_price);
			// 	// print_r("---------");
			// 	// print_r($total_per_pax_adult);
			// 	// print_r("---------");
			// 	// print_r(array_sum($no_of_nights));
			// 	// print_r("---------");
				
			// 	// // print_r(((int)$total_per_pax_adult / (int)$pax_adult) * (int)$no_of_nights);
			// 	// print_r(gettype((int)$pax_adult));

			// }

					// if ($val['nights'] == 1) {
					// 	$hotel_calculation_data['total_pax_adult_rate'] += ($pax_adult != 0  ? $total_per_pax_adult / $pax_adult : $pax_adult);
					// } else {
						// $hotel_calculation_data['total_pax_adult_rate'] += ($pax_adult != 0  ? $total_per_pax_adult / $pax_adult : $pax_adult) * $val['nights'];
					// }

			// if ($pax_adult == 1) {

			// 	$hotel_calculation_data['total_pax_adult_rate'] += ($pax_adult != 0  ? $total_per_pax_adult / $pax_adult : $pax_adult) * $val['nights'];
			// echo '<pre>';print_r($hotel_calculation_data['total_pax_adult_rate']); 

			// } else {

			// 	if ($val['nights'] == 1) {
			// 		$hotel_calculation_data['total_pax_adult_rate'] += ($pax_adult != 0  ? $total_per_pax_adult / $pax_adult : $pax_adult);
			// 	} else {
			// 		$hotel_calculation_data['total_pax_adult_rate'] += ($pax_adult != 0  ? $total_per_pax_adult / $pax_adult : $pax_adult) * $val['nights'];
			// 	}
			// }
			
			
			// $hotel_calculation_data['total_pax_adult_rate'] += ($pax_adult != 0  ? $total_per_pax_adult / $pax_adult : $pax_adult ) * $val['nights'];
			$hotel_calculation_data['total_pax_adult_rate'] += (($total_per_pax_adult)) *  $val['nights'];

			$hotel_calculation_data['total_pax_child_rate'] += (($pax_child * ($total_per_pax_child)) * $val['nights']);

			$hotel_calculation_data['total_pax_wo_rate'] += (($pax_infants * ($total_per_pax_wo)) * $val['nights']);

			// $hotel_calculation_data['total_pax_adult_rate'] = ($pax_adult * ($per_pax_adult)) * $no_of_nights;

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
			'infant_price' => $hotel_calculation_data['total_pax_wo_rate'],

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
		$type_transfer = $this->input->post('transfer');
		$type_resturant = $this->input->post('rest_type');
			$this->db->select("id,resturant_name");
			$this->db->from("meals");
			$this->db->where('resturant_type', $type_resturant);
			$this->db->where('transfer', $type_transfer);
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

		$query = $this->db->where('query_id', $query_id)->where('transfer_type', 'internal')->get('query_transfer');
		if ($query->num_rows() > 0) {
			$this->db->where('query_id', $query_id);
			$this->db->where('transfer_type', 'internal');
			$this->db->update('query_transfer',$internal_transfer_data);
		} else {
			$this->db->insert('query_transfer', $internal_transfer_data);
		}

		echo json_encode("transfer details saved successfully");
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
	
			$query = $this->db->where('query_id', $query_id)->where('transfer_type', 'return')->get('query_transfer');
			if ($query->num_rows() > 0) {
				$this->db->where('query_id', $query_id);
				$this->db->where('transfer_type', 'return');
				$this->db->update('query_transfer',$return_transfer_data);
			} else {
				$this->db->insert('query_transfer', $return_transfer_data);
			}

			echo json_encode("transfer details saved successfully");
	
			}
		
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

		$query = $this->db->where('query_id', $query_id)->where('transfer_type', 'internal')->get('query_transfer');
		if ($query->num_rows() > 0) {
			$this->db->where('query_id', $query_id);
			$this->db->where('transfer_type', 'internal');
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
	
			$query = $this->db->where('query_id', $query_id)->where('transfer_type', 'return')->get('query_transfer');
			if ($query->num_rows() > 0) {
				$this->db->where('query_id', $query_id);
				$this->db->where('transfer_type', 'return');
				$this->db->update('query_transfer',$return_transfer_data);
			} else {
				$this->db->insert('query_transfer', $return_transfer_data);
			}
	
			}

			echo json_encode(array("internal_price"=> (int)$priceperperson_internal,"return_price"=> (int)$priceperperson_return ));
		
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

		$excursion=array();
		$excursion_sic_data =array();
		$total_adultprice =0; $total_childprice= 0;$total_infantprice= 0;

		if(!empty($excursion_name_SIC)){

		if(!empty($excursion_name_SIC)){
				foreach($excursion_name_SIC as $k => $val){
					$excursion =$this->db->query("SELECT * FROM `excursion` WHERE tourname='".$excursion_name_SIC[$k]."' AND type='".$excursion_types_SIC."' AND pax >=$total_pax  LIMIT 1")->row();
					if(empty($excursion)){
						$excursion =$this->db->query("SELECT * FROM `excursion` WHERE tourname='".$excursion_name_SIC[$k]."' AND type='".$excursion_types_SIC."' AND pax <=$total_pax  LIMIT 1")->row();
					}
					if($excursion_adults_SIC) {
						$total_adultprice += (int)$excursion->adultprice * (int)$excursion_adults_SIC;
					}
					if($excursion_childs_SIC) {
						$total_childprice += (int)$excursion->childprice * (int)$excursion_childs_SIC;
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
					if($excursion_adults_TKT) {
						$total_adultprice += (int)$excursion->adultprice * (int)$excursion_adults_TKT;
					}
					if($excursion_childs_TKT) {
						$total_childprice += (int)$excursion->childprice * (int)$excursion_childs_TKT;
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
		
		$total_pax = $excursion_adult_PVT+$excursion_child_PVT+$excursion_infant_PVT;
		

		$excursion=array();
		$excursion_pvt_data =array();

		$total_adultprice =0; $total_childprice= 0;$total_infantprice= 0;
		if(!empty($excursion_name_PVT)){

			foreach($excursion_name_PVT as $k => $val){
				$excursion =$this->db->query("SELECT * FROM `excursion` WHERE tourname='".$excursion_name_PVT[$k]."' AND type='".$excursion_type_PVT."'  AND pax >=$total_pax  LIMIT 1")->row();
				if(empty($excursion)){
					$excursion =$this->db->query("SELECT * FROM `excursion` WHERE tourname='".$excursion_name_PVT[$k]."' AND type='".$excursion_type_PVT."'  AND pax <=$total_pax  LIMIT 1")->row();
				}

				if($excursion->pax <= $total_pax){
					echo json_encode(["status"=>0,"pax"=>$excursion->pax]);
					return;
				}


				if($excursion_adult_PVT) {
					$total_adultprice += ((((int)$excursion->vehicle_price / (int)$total_pax) + (int)$excursion->adultprice)) * (int)$excursion_adult_PVT ; //$excursion->adultprice * $excursion_adult_PVT;
					// $total_adultprice += ( (int)$excursion->adultprice) * (int)$excursion_adult_PVT ; //$excursion->adultprice * $excursion_adult_PVT;
				}
				if($excursion_child_PVT) {
					$total_childprice += (((int)$excursion->vehicle_price / (int)$total_pax) + (int)$excursion->childprice) * (int)$excursion_child_PVT  ; // $excursion->childprice * $excursion_child_PVT;
					// $total_childprice += ( (int)$excursion->childprice) * (int)$excursion_child_PVT  ; // $excursion->childprice * $excursion_child_PVT;
				}
				if($excursion_infant_PVT) {
					$total_infantprice += (((int)$excursion->vehicle_price / (int)$total_pax) + (int)$excursion->infantprice) * (int)$excursion_infant_PVT ;//$excursion->infantprice * $excursion_infant_PVT;
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


		$query = $this->db->where('query_id', $query_id)->get('query_visa');
		if ($query->num_rows() > 0) {
			$this->db->where('query_id', $query_id);
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

		$subject = $data['view']->query_id . '
			 - Diamond Tours LLC Dubai / Pax:' . $data['view']->Packagetravelers . ' 
			 / ' . $data['view']->specificDate . ' / ' . $data['view']->goingTo . ' / 
			' . $data['admin_user']->firstName . ' ' . $data['admin_user']->LastName;

		$this->email->initialize($config);
		$this->email->from('test.yrpitsolutions.com@gmail.com');
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
			'smtp_user' => 'test.yrpitsolutions.com@gmail.com',
			'smtp_pass' => 'xcvbtihuojnhvmrn',
			'crlf' => "\r\n",
			'mailtype' => "html",
			'newline' => "\r\n",
		);

		$subject = $data['view']->query_id . '
			 - Diamond Tours LLC Dubai / Pax:' . $data['view']->Packagetravelers . ' 
			 / ' . $data['view']->specificDate . ' / ' . $data['view']->goingTo . ' / 
			' . $data['admin_user']->firstName . ' ' . $data['admin_user']->LastName;

		$this->email->initialize($config);
		$this->email->from('test.yrpitsolutions.com@gmail.com');
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

		//echo '<pre>';print_r($q_id);exit;
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
			'smtp_user' => 'test.yrpitsolutions.com@gmail.com',
			'smtp_pass' => 'xcvbtihuojnhvmrn',
			'crlf' => "\r\n",
			'mailtype' => "html",
			'newline' => "\r\n",
		);

		$subject = $data['view']->query_id . '
			 - Diamond Tours LLC Dubai / Pax:' . $data['view']->Packagetravelers . ' 
			 / ' . $data['view']->specificDate . ' / ' . $data['view']->goingTo . ' / 
			' . $data['admin_user']->firstName . ' ' . $data['admin_user']->LastName;

		$this->email->initialize($config);
		$this->email->from('test.yrpitsolutions.com@gmail.com');
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
		$data['admin_user'] = $this->db->where('id', $user_id)->get('users')->row();

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

		$subject = $data['view']->query_id . '
			 - Diamond Tours LLC Dubai / Pax:' . $data['view']->Packagetravelers . ' 
			 / ' . $data['view']->specificDate . ' / ' . $data['view']->goingTo . ' / 
			' . $data['admin_user']->firstName . ' ' . $data['admin_user']->LastName;

		$this->email->initialize($config);
		$this->email->from('test.yrpitsolutions.com@gmail.com');
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
			'smtp_user' => 'test.yrpitsolutions.com@gmail.com',
			'smtp_pass' => 'xcvbtihuojnhvmrn',
			'crlf' => "\r\n",
			'mailtype' => "html",
			'newline' => "\r\n",
		);

		$subject = $data['view']->query_id . '
			 - Diamond Tours LLC Dubai / Pax:' . $data['view']->Packagetravelers . ' 
			 / ' . $data['view']->specificDate . ' / ' . $data['view']->goingTo . ' / 
			' . $data['admin_user']->firstName . ' ' . $data['admin_user']->LastName;

		$this->email->initialize($config);
		$this->email->from('test.yrpitsolutions.com@gmail.com');
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
		
		$data['proposalDetails'] = array(

			'query_id' => $_POST['QueryId'],
			'perpax_adult' =>  $_POST['perpax_adult_input'],
			'perpax_childs' =>  $_POST['perpax_childs_input'],
			'perpax_infants' => $_POST['perpax_infants_input'],


			'buildPackageInclusions' => $_POST['buildPackageInclusions'],
			'buildPackageExclusions' => $_POST['buildPackageExclusions'],
			'buildPackageConditions' => $_POST['buildPackageConditions'],
			'buildPackageCancellations' => $_POST['buildPackageCancellations'],
			'buildTravelFromdateCab' => $_POST['buildTravelFromdateCab'],

			'pickupinternal' => $_POST['buildTravelToDateCab'],
			// 'dropoffinternal' => $_POST['buildTravelFromdateSIC'],

			'pickuppoint' => $_POST['buildTravelToDateSIC'],
			'currencyOption' => $_POST['currencyOption'],

			'in_transfer_date' => $_POST['buildTravelFromdateCab'],
			'in_transfer_pickup' => $_POST['buildTravelToDateCab'],
			'in_transfer_dropoff' => $_POST['buildTravelToCityCabDrop'],

			'pp_transfer_date' => $_POST['buildTravelFromdatePVT'],
			'pp_transfer_pickup' => $_POST['buildTravelToDateSIC'],
			'pp_transfer_dropoff' => $_POST['buildTravelToCitySIC']
		);

		$data['pricing_info'] = array(
			'query_id' => $_POST['QueryId'],
			'user_id' => $this->session->userdata('admin_id'),
			'user_name' => $this->session->userdata('admin_username'),
			'transfer_price' => $_POST['totalprice_transfer']
			
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

		$updatedata = array('status' => "Sent");
		$this->db->where('query_id', $_POST['QueryId'])->update('b2bcustomerquery', $updatedata);

		$data['buildpackage'] = $this->db->where('queryId', $_POST['QueryId'])->get('querypackage')->row();
		$data['b2bcustomerquery'] = $this->db->where('query_id', $_POST['QueryId'])->get('b2bcustomerquery')->row();
		// $data['hotels']= $this->db->where('id',$_POST['buildHotelName'])->get('hotel')->row();

		$this->load->view('query/finaltransfer', $data);
	}

	public function CreateProposalVisa()
	{
		// echo '<pre>';print_r($_POST);exit;

		//   $data['buildpackage']= $this->db->where('queryId',$_POST['QueryId'])->get('querypackage')->row();
		//   $first_date = new DateTime($data['buildpackage']->noDaysFrom);
		//     $second_date = new DateTime( $data['buildpackage']->specificDate);
		// 	$difference = $first_date->diff($second_date);
		// 	$data['proposalDetails'] = array('QueryId' => $_POST['QueryId'],
		//     'iternary' => $_POST['iternary'],
		//     'excusions' => $_POST['excusions'],
		//     'currency' => $_POST['currency'],
		//     'total' => $_POST['total'],
		//     'markup' =>$_POST['markup'], 
		//     'vat' => $_POST['vat'],
		//     'total_price' => $_POST['total_price'],
		//     'advance_amount' => $_POST['advance_amount'],
		//     'inclusions' => $_POST['inclusions'],
		//     'exclusions' => $_POST['exclusions'],
		//     'booking_terms' => $_POST['booking_terms'],
		// 	'difference'=>$difference->days,
		// 	'booked_by'=>$this->session->userdata('admin_username')

		//   );

		$data['proposalDetails'] = array(
			'query_id' => $_POST['QueryId'],
			'perpax_adult' =>  $_POST['perpax_adult_input'],
			'perpax_childs' =>  $_POST['perpax_childs_input'],
			'perpax_infants' => $_POST['perpax_infants_input'],

			// 'hotelName' => $_POST['buildHotelName'],


			// 'noOfNights' => $_POST['buildNoNights'],
			// 'roomType' => $_POST['buildRoomType'],

			// 'excursion_name_SIC' => $_POST['excursion'][0],
			// 'excursion_name_PVT' => $_POST['excursion'][1],
			'buildPackageInclusions' => $_POST['buildPackageInclusions'],
			'buildPackageExclusions' => $_POST['buildPackageExclusions'],
			'buildPackageConditions' => $_POST['buildPackageConditions'],
			'buildPackageCancellations' => $_POST['buildPackageCancellations'],
			'buildPackageRefund' => $_POST['buildPackageRefund'],
			// 'buildTravelFromdateCab' => $_POST['buildTravelFromdateCab'],

			// 'pickupinternal' => $_POST['buildTravelToDateCab'],
			// 'dropoffinternal' => $_POST['buildTravelFromdateSIC'],	

			// 'pickuppoint' => $_POST['buildTravelToDateSIC'],
			// // 'dropoffpoint' => $_POST['buildTravelToCityCab'],
			'currencyOption' => $_POST['currencyOption'],
			// 'dropoffpointIn' => $_POST['buildTravelToCityCabIn'],

			// 'in_transfer' => $_POST['buildTravelFromCityCab'],
			// 'in_transfer_date'=> $_POST['buildTravelFromdateCab'],
			// 'in_transfer_pickup'=> $_POST['buildTravelToDateCab'],
			// 'in_transfer_dropoff'=> $_POST['buildTravelToCityCabDrop'],

			// 'pp_transfer'=> $_POST['buildTravelFromCitySIC'],
			// 'pp_transfer_date'=> $_POST['buildTravelFromdatePVT'],
			// 'pp_transfer_pickup'=> $_POST['buildTravelToDateSIC'],
			// 'pp_transfer_dropoff'=> $_POST['buildTravelToCitySIC']

			'visa_category_drop_down' => $_POST['visa_category_drop_down'],
			'entry_type' => $_POST['entry_type'],
			'visa_validity' => $_POST['visa_validity'],

			'loggedInUser' => $this->session->userdata('admin_username')



		);
		$data['pricing_info'] = array(
			'query_id' => $_POST['QueryId'],
			'user_id' => $this->session->userdata('admin_id'),
			'user_name' => $this->session->userdata('admin_username'),
			'visa_price' => $_POST['totalprice_visa']
			
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


		$updatedata = array('status' => "Sent");
		$this->db->where('query_id', $_POST['QueryId'])->update('b2bcustomerquery', $updatedata);

		//   $this->db->insert('visa_report',$data['proposalDetails']);
		$data['b2bcustomerquery'] = $this->db->where('query_id', $_POST['QueryId'])->get('b2bcustomerquery')->row();

		$this->load->view('query/finalvisa', $data);
	}

	public function CreateProposalMealsSave()
	{
		$rows_count = $this->input->post('total_rows');
		$QueryId = $this->input->post('QueryId');
		$buildPackageInclusions = $this->input->post('buildPackageInclusions');
		$buildPackageExclusions = $this->input->post('buildPackageExclusions');
		$buildPackageConditions = $this->input->post('buildPackageConditions');
		$buildPackageCancellations = $this->input->post('buildPackageCancellations');
		$buildPackageRefund = $this->input->post('buildPackageRefund');
		$totalprice_adult = $this->input->post('totalprice_adult');
		$totalprice_childs = $this->input->post('totalprice_childs');
		$totalprice_infants = $this->input->post('totalprice_infants');

		$total_pricing = (int)$totalprice_adult + (int)$totalprice_childs + (int)$totalprice_infants;

		$tableData = $this->input->post('data');
		// echo"<pre>";print_r($tableData);exit;
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
			$datas[$x]['buildPackageInclusions'] = $buildPackageInclusions;
			$datas[$x]['buildPackageExclusions'] = $buildPackageExclusions;
			$datas[$x]['buildPackageConditions'] = $buildPackageConditions;
			$datas[$x]['buildPackageCancellations'] = $buildPackageCancellations;
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

			'buildPackageInclusions' => $_POST['buildPackageInclusions'],
			'buildPackageExclusions' => $_POST['buildPackageExclusions'],
			'buildPackageConditions' => $_POST['buildPackageConditions'],
			'buildPackageCancellations' => $_POST['buildPackageCancellations'],
			// 'buildPackageRefund' => $_POST['buildPackageRefund'],

			'currencyOption' => $_POST['currencyOption'],

			'res_type' => $_POST['res_type'],
			'res_name' => $_POST['res_name'],
			'Meal' => $_POST['Meal'],
			'Meal_Type' => $_POST['Meal_Type'],

			'loggedInUser' => $this->session->userdata('admin_username')

		);

		$user_id = $this->session->userdata()['admin_id'];
		$data['admin_user_data'] = $this->db->where('id', $user_id)->get('users')->row();

		$data['pricing_info'] = array(
			'query_id' => $_POST['QueryId'],
			'user_id' => $this->session->userdata('admin_id'),
			'user_name' => $this->session->userdata('admin_username'),
			'meal_price' => $_POST['totalprice_meals']
			
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
		// $this->db->insert('package',$data['proposalDetails']);


		$this->load->view('query/finalmeals', $data);
	}


	public function CreateProposal()
	{
		// echo"<pre>";print_r($_POST);exit;
		// return;
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

			'buildPackageInclusions' => $_POST['buildPackageInclusions'],
			'buildPackageExclusions' => $_POST['buildPackageExclusions'],
			'buildPackageConditions' => $_POST['buildPackageConditions'],
			'buildPackageCancellations' => $_POST['buildPackageCancellations'],
			// 'buildPackageRefund' => $_POST['buildPackageRefund'],

			'perpax_adult' =>  $_POST['perpax_adult_input'],
			'perpax_childs' =>  $_POST['perpax_childs_input'],
			'perpax_infants' => $_POST['perpax_infants_input'],

			'hotelName' =>  isset($_POST['buildHotelName']) ? $_POST['buildHotelName'] : [],

			'noOfNights' => $_POST['buildNoNightss'],
			'roomType' => $_POST['buildRoomType'],

			'buildTravelFromdateCab' => $_POST['buildTravelFromdateCab'],

			'pickupinternal' => $_POST['buildTravelToDateCab'],
			// 'dropoffinternal' => $_POST['buildTravelFromdateSIC'],

			'pickuppoint' => $_POST['buildTravelToDateSIC'],
			// 'dropoffpoint' => $_POST['buildTravelToCityCab'],
			'currencyOption' => $_POST['currencyOption'],
			// 'dropoffpointIn' => $_POST['buildTravelToCityCabIn'],

			// 'in_transfer' => $_POST['buildTravelFromCityCab'],
			'in_transfer_date' => $_POST['buildTravelFromdateCab'],
			'in_transfer_pickup' => $_POST['buildTravelToDateCab'],
			'in_transfer_dropoff' => $_POST['buildTravelToCityCabDrop'],

			// 'pp_transfer'=> $_POST['buildTravelFromCitySIC'],
			'pp_transfer_date' => $_POST['buildTravelFromdatePVT'],
			'pp_transfer_pickup' => $_POST['buildTravelToDateSIC'],
			'pp_transfer_dropoff' => $_POST['buildTravelToCitySIC'],
			'res_type' => $_POST['res_type'],
			'res_name' => $_POST['res_name'],
			'Meal' => $_POST['Meal'],
			'Meal_Type' => $_POST['Meal_Type'],
			'no_of_meals' => $_POST['no_of_meals'],

			'visa_category_drop_down' => $_POST['visa_category_drop_down'],
			'entry_type' => $_POST['entry_type'],
			'visa_validity' => $_POST['visa_validity'],
			'internal_route' => $_POST['buildTravelTypeCab'],
			'return_route' => $_POST['buildTravelTypeSIC'],
			'buildRoomType' => $_POST['buildRoomType'],
			'room_sharing_types' => $_POST['room_sharing_types'],

		);

		$user_id = $this->session->userdata()['admin_id'];
		$data['admin_user_data'] = $this->db->where('id', $user_id)->get('users')->row();

		$data['pricing_info'] = array(
			'query_id' => $_POST['QueryId'],
			'user_id' => $this->session->userdata('admin_id'),
			'user_name' => $this->session->userdata('admin_username'),
			'package_price' => $_POST['totalprice_package']
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


			// 'excursion_name_SIC' => $_POST['excursion'][0],
			// 'excursion_name_PVT' => $_POST['excursion'][1],
			'excursion_name_SIC' => $_POST['excursion_name_SIC'],
			'excursion_name_PVT' => $_POST['excursion_name_PVT'],

			'buildPackageInclusions' => $_POST['buildPackageInclusions'],
			'buildPackageExclusions' => $_POST['buildPackageExclusions'],
			'buildPackageConditions' => $_POST['buildPackageConditions'],
			'buildPackageCancellations' => $_POST['buildPackageCancellations'],
			
			'currencyOption' => $_POST['currencyOption'],
			'loggedInUser' => $this->session->userdata('admin_username')

		);


		$data['pricing_info'] = array(
			'query_id' => $_POST['QueryId'],
			'user_id' => $this->session->userdata('admin_id'),
			'user_name' => $this->session->userdata('admin_username'),
			'excursion_price' => $_POST['totalprice_excursion']
			
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
		$total_pricing = (int)$totalprice_adult + (int)$totalprice_childs + (int)$totalprice_infants;
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

		$query = $this->db->where('query_id', $QueryId)->get('query_hotel');
		if ($query->num_rows() > 0) {
			$this->db->where('query_id', $QueryId)->delete('query_hotel');
			$this->db->insert_batch('query_hotel', $datas);
		} else {
			$this->db->insert_batch('query_hotel', $datas);
		}

		echo json_encode($datas);
	}
	public function CreateProposalHotel()
	{

		$hotels = [];
		if(isset($_POST['buildHotelName'])){
		foreach ($_POST['buildHotelName'] as $key => $value) {
			$hotels[] = $this->db->get_where('hotel', array('id' => $value))->row();
		}
	}
		
		$data['proposalDetails'] = array(
			'perpax_adult' =>  $_POST['perpax_adult_input'],
			'perpax_childs' =>  $_POST['perpax_childs_input'],
			'perpax_infants' => $_POST['perpax_infants_input'],
			'hotel_city' => $_POST['buildHotelCity'],
			'nights' => $_POST['buildNoNight'],
			'hotels' => $hotels,
			'roomType' => $_POST['buildRoomType'],
			'hotel_name' => $_POST['buildHotelName'],
			'room_type' => $_POST['buildRoomType'],
			'pricing_info_curreny' => $_POST['currencyOption'],
			'cancelation_policy' => $_POST['buildPackageCancellations'],
			'inclusions' => $_POST['buildPackageInclusions'],
			'exclusions' => $_POST['buildPackageExclusions'],
			'query_id' => $_POST['QueryId'],
			'buildPackageConditions' => $_POST['buildPackageConditions'],
			'loggedInUser' => $this->session->userdata('admin_username')


		);
		
		
		$data['pricing_info'] = array(
			'query_id' => $_POST['QueryId'],
			'user_id' => $this->session->userdata('admin_id'),
			'user_name' => $this->session->userdata('admin_username'),
			'hotel_price' => $_POST['totalprice_hotel']
			
		);

		$query = $this->db->where('query_id', $_POST['QueryId'])->get('pricing_info');
		if ($query->num_rows() > 0) {

			$this->db->where('query_id', $_POST['QueryId']);
			$this->db->update('pricing_info',$data['pricing_info']);

		} else {
			$this->db->insert('pricing_info', $data['pricing_info']);
		}




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
			'followUpday' => $dt,
			'followUpTime' => $this->input->post('followUpTime'),
			'followUpCustomer' => $this->input->post('followUpCustomer'),
			'followUpAssignTo' => $this->input->post('followUpAssignTo'),
			'followUpdetails' => $this->input->post('followUpdetails'),
			'followUpQueryStatus' => $this->input->post('followUpQueryStatus'),
			'query_id' => $this->input->post('followUpQueryId'),
			'followUpRemarks' => $this->input->post('followUpRemarks')
		);
		if ($this->db->insert('followups', $data)) {
			// echo "<script>alert('Follow Added Sucessfully');window.location='" . $redirect_url . "';</script>";
			$this->session->set_flashdata('success','Follow Added Sucessfully');
			redirect('query/view_query','refresh');
		} else {
			echo "<script>alert('Something went wrong try again later');window.location='" . $redirect_url . "';</script>";
		}
	}
}
