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



	public function loginstock()
	{


		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('pass', 'Password', 'trim|required');

		$data['status'] = '';
		$redirect_url = site_url() . 'login/dashboard';
		if ($this->form_validation->run() !== FALSE) {

			$loginEmail = $this->input->post('username');
			$loginPassword = $this->input->post('pass');


			$res = $this->db->where('UserName', $loginEmail)->where('password', $loginPassword)->get('users')->row();
			$modules = explode(',', $res->modules);
			$is_stocks = in_array('Stocks', $modules);

			// if (!empty($res) && $res->userType == 'Stocks') {
			if (!empty($res) && $is_stocks == true) {

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
				redirect('stocks/dashboardstock', 'refresh');
			} else {
				echo "<script>alert('Login Failed. Please check Login details..!!');window.location='" . $redirect_url . "';</script>";
			}
		}
	}

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
}
