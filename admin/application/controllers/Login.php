<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_Model');
		$this->load->library('Image_Slug');
	}

	public function index()
	{
		$this->load->view('login/login');
	}
	public function login()
	{
		//print_r($this->input->post('remember-me'));die();
		//echo '<pre>';print_r($_POST);exit;
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('pass', 'Password', 'trim|required');

		$data['status'] = '';
		$redirect_url = site_url() . 'login/index';
		if ($this->form_validation->run() !== FALSE) {
			//echo 'valid';exit;
			$loginEmail = $this->input->post('username');
			$loginPassword = $this->input->post('pass');

			//echo $loginPassword;exit;
			$res = $this->db->where('UserName', $loginEmail)->where('password', $loginPassword)->get('users')->row();
			// if ($res->userType !== 'Super Admin') {
			// echo "true";

			// }else{
			// 	echo "false";

			// }
			// echo '<pre>';print_r($res);exit;
			$modules = explode(',', $res->modules);
			// $is_superAdmin = $res->userType !== 'Stocks';
			$is_superAdmin = in_array('Stocks', $modules);

			// if ($is_superAdmin == true) {
				if (!empty($res)) {
					$rem = $this->input->post('remember-me');
					if (isset($rem)) {
						setcookie("loginId", $loginEmail, time() + (10 * 365 * 24 * 60 * 60));
						setcookie("loginPass",	$loginPassword,	time() + (10 * 365 * 24 * 60 * 60));
					} else {
						setcookie("loginId", "");
						setcookie("loginPass", "");
					}
					$sessionAdminInfo = array(
						'admin_id' => $res->id,
						'admin_username' => $res->UserName,
						'reg_type' => $res->userType,
						'for_stocks' => FALSE,
						'access_stocks' => $is_superAdmin == TRUE ? TRUE : FALSE,
						'admin_logged_in' => TRUE
					);
					$this->session->set_userdata($sessionAdminInfo);
					redirect('login/dashboard', 'refresh');

				} else {
					// echo 'error';exit;
					// $data['status'] = 'Login Failed. Please check Login details..!!';
					// $this->load->view('login',$data);
					echo "<script>alert('Login Failed. Please check Login details..!!');window.location='" . $redirect_url . "';</script>";
				}
			// } else {

			// 	echo "<script>alert('Login Failed. Please check Login details..!!');window.location='" . $redirect_url . "';</script>";
			// }
		}
	}

	/*------------------Dashboard------------*/
	public function dashboard()
	{
		
		$graph = $this->db->get('stocks')->result();
		$total_ticket = 0;
		$remaning_ticket = 0;
		$date = date('m-d-Y');
		$weekdate = date('m-d-Y', strtotime('-7 days'));
		$month = date('m-d-Y', strtotime('-30 days'));
		$year = date('m-d-Y', strtotime('-365 days'));
		$current_date = date('Y-m-d');

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
		$confirmed = $this->db->where('lead_stage', "Confirmed")->get('b2bcustomerquery')->result();
		$result = array();
		foreach ($confirmed as $value) {
			$query_id = $value->query_id;
			$name = $value->b2bfirstName . ' ' . $value->b2blastName;
			$mobile = $value->b2bmobileNumber;
			$lead_stage = $value->lead_stage;

			$created_at = $value->created_at;
			$id = $value->id;
			// $package = $this->db->where('queryId', $query_id)->get('querypackage')->row();
			$package = $this->db->where('queryId', $query_id)->where('specificDate >=', $current_date)->get('querypackage')->row();

			if (isset($package)) {
				$res = array("id" => $id, "created_at" => $created_at, "query_id" => $query_id, "name" => $name, "mobile" => $mobile, "Description" => $package->type, "traveldate" => $package->specificDate, "checkout" => $package->noDaysFrom, "nopax" => "adult " . $package->Packagetravelers . ", child " . $package->child, "goingTo" => $package->goingTo, "lead_stage" => $lead_stage);
				$result[] = $res;
			}
		}
		//print_r($result);die();
		$data['iternary'] = $result;
		//print_r($result);die();
		
		$date_today = new DateTime("now");
		$curr_date = $date_today->format('Y-m-d');
		$user = $this->session->userdata('admin_username');
		$data['todo'] = $this->db->where('Tododay', $curr_date)->get('todo')->result_array();
		
		$todo_data_arr = [];

		$user = $this->session->userdata();

		if($user['reg_type'] == 'Super Admin') {

			$todo_data = $this->db->where('Tododay', $curr_date)->get('todo')->result_array();
			$followups_todo_data = $this->db->where('followUpday', $curr_date)->get('followups')->result_array();

		} else {

			$todo_data = $this->db->where('Tododay', $curr_date)->where('TodoAssigned', $user['admin_username'])->get('todo')->result_array();
			$followups_todo_data = $this->db->where('followUpday', $curr_date)->where('followUpAssignTo', $user['admin_username'])->get('followups')->result_array();

		}

		foreach ($todo_data as $key => $value) {
			$data_arr = [
				'query_id' => $value['query_id'],
				'customer' => $value['TodoCustomer'],
				'follow_up' => $value['Tododay'],
				'assigned_to' => $value['TodoAssigned'],
			];
			array_push($todo_data_arr,$data_arr);
		}



		foreach ($followups_todo_data as $key => $value) {
			$data_arr = [
				'query_id' => $value['query_id'],
				'customer' => $value['followUpCustomer'],
				'follow_up' => $value['followUpday'],
				'assigned_to' => $value['followUpAssignTo'],
			];
			array_push($todo_data_arr,$data_arr);
		}
		$data['todo'] = $todo_data_arr;

		$total_sales = $this->db->select("DATE_FORMAT(invoiceDate,'%b') AS data_month,SUM(finalTotalInvoice) AS total")->where("YEAR (invoiceDate) = YEAR(CURDATE())")->group_by("MONTH (invoiceDate) , YEAR (invoiceDate)","DESC")->get('invoice')->result();
		$data['all_total']=0;
		$data['total']=array();
		foreach($total_sales as $value){
			// $data['months'][] = $value->data_month;
			$data['total'][$value->data_month] = $value->total;
			$data['all_total'] += $value->total;

		}

		
		$staffs_revenue = $this->db->select("user_id,SUM(hotel_price) AS hotel_price,SUM(meal_price) AS meal_price,SUM(transfer_price) AS transfer_price,SUM(excursion_price) AS excursion_price,SUM(package_price) AS package_price,user_name")
					->from('pricing_info')												
					->group_by('user_id')	
					->get()->result();
					
		$data['staffs_data']=array();
		$data['staffs_name'] = array();

		foreach($staffs_revenue as $k => $val){
			$data['staffs_name'][$val->user_id] = $val->user_name;
			$data['staffs_data'][$val->user_id]['package'] = $val->package_price;
			$data['staffs_data'][$val->user_id]['hotel'] = $val->hotel_price;
			$data['staffs_data'][$val->user_id]['transfer'] = $val->transfer_price;
			$data['staffs_data'][$val->user_id]['visa'] = $val->package_price;
			$data['staffs_data'][$val->user_id]['excursion'] = $val->excursion_price;
			$data['staffs_data'][$val->user_id]['meal'] = $val->meal_price;
			
		}

		$query_data = $this->db->where('lead_stage', "Confirmed")->get('b2bcustomerquery')->result();
		// $data['upcoming_arrivals'] = $upcoming_arrivals;

		$result = array();
		foreach ($query_data as $value) {
			$query_id = $value->query_id;
			$name = $value->b2bfirstName . ' ' . $value->b2blastName;
			$mobile = $value->b2bmobileNumber;
			$lead_stage = $value->lead_stage;

			$created_at = $value->created_at;
			$id = $value->id;

			$package = $this->db->where('queryId', $query_id)->where('specificDate >=', $current_date)->get('querypackage')->row();

			if (isset($package)) {
				$res = array("id" => $id, "created_at" => $created_at, "query_id" => $query_id, "name" => $name, "mobile" => $mobile, "Description" => $package->type, "traveldate" => $package->specificDate, "nopax" => "adult " . $package->Packagetravelers . ", child " . $package->child, "goingTo" => $package->goingTo, "lead_stage" => $lead_stage);
				$result[] = $res;
			}
		}

		$data['upcoming_arrivals'] = $result;


		$all_query = $this->db->distinct()->select('query_id')->get('b2bcustomerquery');
		$confirmed_query = $this->db->distinct()->select('query_id')->where('lead_stage','Confirmed')->get('b2bcustomerquery');
		$inprogress_query = $this->db->distinct()->select('query_id')->where('lead_stage','Inprogress')->get('b2bcustomerquery');
		$rejected_query = $this->db->distinct()->select('query_id')->where('lead_stage','Rejected')->get('b2bcustomerquery');
		$data['query_count'] = json_encode([count($confirmed_query->result()),count($inprogress_query->result()),count($rejected_query->result()),]);
		
// echo"<pre>";print_r($data['staffs_name'] );	exit;
		

		$this->load->view('dashboard', $data);
	}

	public function loginstock_otp()
	{


		$username = $this->input->post('username');
		$password = $this->input->post('password');


		$res = $this->db->where('UserName', $username)->where('password', $password)->get('users')->row();
		// echo"<pre>";print_r($username);exit;

		if (!empty($res)) {

			$otp = $this->sendOtp($res->emialId);
			if($otp){

				$otp_data = array(
					'otp'=>$otp,
					'user_id'=>$res->id,
					'mobile_number' => $res->phoneNumber,
					'email_id' => $res->emialId,
					'sent_time' =>  date("Y-m-d h:i:s"),
				);
			
				$this->db->insert('otp',$otp_data);
				echo json_encode(["msg" => "success","code" => true,"mail_id" => $res->emialId,"user_id" => $res->id]);
			}
		}else{
			echo json_encode(["msg" => "User Name or Password Mismatch..","code" => false]);
		}

	}

	public function loginstock()
	{
		$user_id = $this->input->post('user_id');
		$email_id = $this->input->post('email_id');
		$otp = $this->input->post('otp');
		// $res = $this->db->where('user_id', $user_id)->where('email_id', $email_id)->get('otp')->order_by('sent_time', 'DESC')->limit(1)->row();


		$data['status'] = '';
		$redirect_url = site_url() . 'login/dashboard';
		$res = $this->db->select('us.*,ot.*')->from('users  us')->join('otp  ot', 'us.id = ot.user_id', 'inner')->where('us.id', $user_id)->order_by('sent_time', 'DESC')->limit(1)->get()->row();

				// echo"<pre>";print_r($res);exit;
				
			$modules = explode(',', $res->modules);
			$is_stocks = in_array('Stocks', $modules);
			if (!empty($res)) {
			// if (!empty($res) && $res->userType == 'Admin') {
				if ($is_stocks == true) {

					if ($res->otp == $otp) {
						$sessionAdminInfo = array(
							'admin_id' => $res->id,
							'admin_username' => $res->UserName,
							'reg_type' => $res->userType,
							'for_stocks' => TRUE,
							'admin_logged_in' => TRUE,
							'access_stocks' => TRUE,
							'stock_logged_in' => TRUE
						);
						$this->session->set_userdata($sessionAdminInfo);
						// redirect('stocks/dashboardstock', 'refresh');

						$update_data = array(
							'verified_time' => date("Y-m-d h:i:s"),
							'status' => 'Verified'
							);
							
						$this->db->update('otp',$update_data,'otp_id='.$res->otp_id,);

						$redirect_url = base_url().'/stocks/dashboardstock';
						echo json_encode(["msg" => "Success","code" => true,"redirect_url" =>$redirect_url ]);

					}else{
						echo json_encode(["msg" => "Wrong Otp","code" => false]);
					}
				}
			} else {			
				echo "<script>alert('Login Failed. Please check Login details..!!');window.location='" . $redirect_url . "';</script>";
			}
		

		// SELECT * FROM otp WHERE user_id='12' AND email_id='rajasekar123.svks@gmail.com' ORDER BY sent_time DESC LIMIT 1

		// $this->form_validation->set_rules('username', 'Username', 'trim|required');
		// $this->form_validation->set_rules('pass', 'Password', 'trim|required');

		// $data['status'] = '';
		// $redirect_url = site_url() . 'login/dashboard';
		// if ($this->form_validation->run() !== FALSE) {

		// 	$loginEmail = $this->input->post('username');
		// 	$loginPassword = $this->input->post('pass');


		// 	$res = $this->db->where('UserName', $loginEmail)->where('password', $loginPassword)->get('users')->row();
		// 	// echo"<pre>";print_r($res);exit;
		// 	$modules = explode(',', $res->modules);
		// 	$is_stocks = in_array('Stocks', $modules);

		// 	// if (!empty($res) && $res->userType == 'Stocks') {
		// 	if (!empty($res) && $is_stocks == true) {

		// 		// $otp = $this->sendOtp($res->emialId);
		// 		// if($otp){

		// 		// 	$otp_data = array(
		// 		// 		'otp'=>$otp,
		// 		// 		'user_id'=>$res->id,
		// 		// 		'mobile_number' => $res->phoneNumber,
		// 		// 		'email_id' => $res->emialId,
		// 		// 		'sent_time' =>  date("Y-m-d h:i:s"),
		// 		// 	);
				
		// 		// 	$this->db->insert('otp',$otp_data);


		// 			$sessionAdminInfo = array(
		// 				'admin_id' => $res->id,
		// 				'admin_username' => $res->UserName,
		// 				'reg_type' => $res->userType,
		// 				'for_stocks' => TRUE,
		// 				'admin_logged_in' => TRUE,
		// 				'access_stocks' => TRUE,
		// 				'stock_logged_in' => TRUE
		// 			);
		// 			$this->session->set_userdata($sessionAdminInfo);
		// 			redirect('stocks/dashboardstock', 'refresh');
		// 		// }
				
		// 	} else {
		// 		echo "<script>alert('Login Failed. Please check Login details..!!');window.location='" . $redirect_url . "';</script>";
		// 	}
		// }else{
		// 	echo "<script>alert('Login Failed. Please check Login details..!!');window.location='" . $redirect_url . "';</script>";

		// }
	}
	
	// public function loginstock()
	// {


	// 	$this->form_validation->set_rules('username', 'Username', 'trim|required');
	// 	$this->form_validation->set_rules('pass', 'Password', 'trim|required');

	// 	$data['status'] = '';
	// 	$redirect_url = site_url() . 'login/dashboard';
	// 	if ($this->form_validation->run() !== FALSE) {

	// 		$loginEmail = $this->input->post('username');
	// 		$loginPassword = $this->input->post('pass');


	// 		$res = $this->db->where('UserName', $loginEmail)->where('password', $loginPassword)->get('users')->row();
	// 		// echo"<pre>";print_r($res);exit;
	// 		$modules = explode(',', $res->modules);
	// 		$is_stocks = in_array('Stocks', $modules);

	// 		// if (!empty($res) && $res->userType == 'Stocks') {
	// 		if (!empty($res) && $is_stocks == true) {


	// 				$sessionAdminInfo = array(
	// 					'admin_id' => $res->id,
	// 					'admin_username' => $res->UserName,
	// 					'reg_type' => $res->userType,
	// 					'for_stocks' => TRUE,
	// 					'admin_logged_in' => TRUE,
	// 					'access_stocks' => TRUE,
	// 					'stock_logged_in' => TRUE
	// 				);
	// 				$this->session->set_userdata($sessionAdminInfo);
	// 				redirect('stocks/dashboardstock', 'refresh');
	// 			// }
				
	// 		} else {
	// 			echo "<script>alert('Login Failed. Please check Login details..!!');window.location='" . $redirect_url . "';</script>";
	// 		}
	// 	}else{
	// 		echo "<script>alert('Login Failed. Please check Login details..!!');window.location='" . $redirect_url . "';</script>";

	// 	}
	// }

	public  function logout()
	{
		$user_data = $this->session->all_userdata();
		foreach ($user_data as $key => $value) {
			if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
				$this->session->unset_userdata($key);
			}
		}
		$this->session->sess_destroy();
		redirect('login/index');
	}


// 	    public function sendOtp(){
//         $otp = random_int(100000, 999999);
//         $message =  "OTP to login to your account on travel CRM application is ".$otp.". OTP is valid for one login attempt or 5 mins only.
// Do not share it with anyone.

// Regards
// travel CRM";

//         $this->load->library("phpmailer_library");
//         $mail = $this->phpmailer_library->load();
//         $mail->isSMTP();
// 		//$mail->SMTPDebug  = 1;  
// 		/*$mail->SMTPAuth   = TRUE;
// 		$mail->SMTPSecure = "tls";
// 		$mail->Port       = 587;
// 		$mail->Host       = "smtp.gmail.com";
// 	    $mail->Username = 'noreplyfonalytics@gmail.com';
//         $mail->Password = 'sidmm@SIDMM2@22';
// 		$mail->IsHTML(true);
// 		$mail->AddAddress($this->session->userdata("email"), "");
// 		$mail->SetFrom("noreplyfonalytics@gmail.com", "noreplyfonalytics");
//         $mail->AddReplyTo("noreplyfonalytics", "noreplyfonalytics");*/
        
//         $mail->SMTPAuth   = TRUE;
// 		$mail->SMTPSecure = "tls";
// 		$mail->Port       = 587;
// 		$mail->Host       = "us2.smtp.mailhostbox.com";
// 	    $mail->Username = 'otp@sidmm.com';
//      $mail->Password = 'D*I@BMgxc6';
// 		$mail->IsHTML(true);
// 		$mail->AddAddress($this->session->userdata("email"), "");
// 		$mail->SetFrom("otp@sidmm.com", "OTP SIDMM");
//         $mail->AddReplyTo("otp@sidmm.com", "OTP SIDMM");
//         $mail->Subject = "OTP to login fonalytics. (".$otp.")";
//         $contents = "<b>".$message."</b> <br/><br/><b>Thank you <br/>Fonalytics Team</b>";
//         $mail->MsgHTML($contents); 
//         $mail->Send();
// 		// if(!$mail->Send())  {
//         //     var_dump($mail);exit;
//         // }
//         $sms = rawurlencode($message);
// 		$urlInit  ="http://textart.in/api/sendhttp.php?authkey=6211Ae8nmXFYW5c262f3e&sender=FONALS&route=4&mobiles=".$this->session->userdata("mobile_number")."&message=".$sms."&country=91&PE_ID=1201160517572765195&DLT_TE_ID=1207164675010756950";
		
//         $c = curl_init();
//         curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
//         curl_setopt($c, CURLOPT_URL, $urlInit);
//         $response = curl_exec($c);
//         curl_close($c);
//         $this->common_model->insert_otp($otp,$this->session->userdata("user_id"),$this->session->userdata("mobile_number"),$this->session->userdata("email"));
    
//     }


	public function sendOtp($mail_id)
	{
		$email = $mail_id;

		$otp = random_int(100000, 999999);
        $message =  "OTP to login to your account on travel CRM application is ".$otp.". OTP is valid for one login attempt or 5 mins only.
Do not share it with anyone.

Regards
travel CRM";

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

		$subject = 'Otp Verification';

		$this->email->initialize($config);
		$this->email->from('test.yrpitsolutions.com@gmail.com');
		$this->email->to($email);
		$this->email->subject($subject);
		$contents = "<b>".$message."</b> <br/><br/><b>Thank you <br/>travel CRM Team</b>";
		$this->email->message($contents); 
		// $body = $this->load->view('invoice/template/invoice_mail', $data, TRUE);
		// $this->email->message($body);
		$this->email->send();

		// echo json_encode(["msg" => "Email Send Successfully"]);


		return $otp;
	}


}
