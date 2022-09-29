<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('Image_Slug');
	}

	public function query_report()
	{

		$query_package = $this->db->distinct()->select('created_by')->get('querypackage')->result();

		$result = [];
	    foreach ($query_package as $key => $value) {
			// print_r($value);exit;
			if($value->created_by == NULL || $value->created_by == "" ){
				continue;
			}
			else {
			$query_package_data = $this->db->where('created_by', $value->created_by)->get('querypackage')->result();
			$proposal_sent_data = $this->db->where('is_proposal_sent', 1)->where('created_by', $value->created_by)->get('querypackage')->result();
			$proposal_not_sent_data = $this->db->where('is_proposal_sent', 0)->where('created_by', $value->created_by)->get('querypackage')->result();

			$lead_stage_Inprogress = $this->db->where('lead_stage', "Inprogress")->where('created_by', $value->created_by)->get('querypackage')->result();
			$lead_stage_Callback = $this->db->where('lead_stage', "Callback")->where('created_by', $value->created_by)->get('querypackage')->result();
			$lead_stage_Confirmed = $this->db->where('lead_stage', "Confirmed")->where('created_by', $value->created_by)->get('querypackage')->result();
			$lead_stage_Rejected = $this->db->where('lead_stage', "Rejected")->where('created_by', $value->created_by)->get('querypackage')->result();

			$follow_up_status_No_Status = $this->db->where('follow_up_status', "No Status")->where('created_by', $value->created_by)->get('querypackage')->result();
			$follow_up_status_Hot = $this->db->where('follow_up_status', "Hot")->where('created_by', $value->created_by)->get('querypackage')->result();
			$follow_up_status_Cold = $this->db->where('follow_up_status', "Cold")->where('created_by', $value->created_by)->get('querypackage')->result();
			$follow_up_status_Warm = $this->db->where('follow_up_status', "Warm")->where('created_by', $value->created_by)->get('querypackage')->result();

			$user_name = $this->db->where('id', $value->created_by)->get('users')->row();

			$res = array(
			"total_queries" => count($query_package_data), 
			"proposal_sent_queries" => count($proposal_sent_data), 
			"proposal_not_sent_queries" => count($proposal_not_sent_data), 

			"lead_stage_Inprogress" => count($lead_stage_Inprogress), 
			"lead_stage_Callback" => count($lead_stage_Callback), 
			"lead_stage_Confirmed" => count($lead_stage_Confirmed), 
			"lead_stage_Rejected" => count($lead_stage_Rejected), 

			"follow_up_status_No_Status" => count($follow_up_status_No_Status), 
			"follow_up_status_Hot" => count($follow_up_status_Hot), 
			"follow_up_status_Cold" => count($follow_up_status_Cold), 
			"follow_up_status_Warm" => count($follow_up_status_Warm), 

			"user" => $user_name->UserName, 

			);
			array_push($result,$res);
		}
		}
		// print_r($result);exit;

		$data['result'] = $result;
		$this->load->view('reports/query_report',$data);
	}

	public function invoice_report()
	{
		$invoice = $this->db->distinct()->select('created_by')->get('invoice')->result();
		
		$result = [];
	    foreach ($invoice as $key => $value) {
			if($value->created_by == NULL || $value->created_by == "" ){
				continue;
			}
			else {
			$user_name = $this->db->where('id', $value->created_by)->get('users')->row();
			
			$total_invoice_val = 0; 
			$bal_invoice_val = 0; 
			$received_invoice_val = 0;
			$completed = 0;
			$pending = 0;

			$query_invoice_data = $this->db->where('created_by', $value->created_by)->get('invoice')->result();
				foreach($query_invoice_data as $k => $v) {
					$total_invoice_val += $v->finalTotalInvoice;
					$bal_invoice_val += $v->finalBalance;
					$received_invoice_val += $v->finalAdvance; 
					$completed += $v->finalBalance > 0 ? 0 : 1; 
					$pending += $v->finalBalance > 0 ? 1 : 0; 
				}

				$res = array(
				"total_queries" => count($query_invoice_data), 
				"total_invoice_val" => $total_invoice_val, 
				"bal_invoice_val" => $bal_invoice_val, 
				"received_invoice_val" => $received_invoice_val, 
				"completed" => $completed, 
				"pending" => $pending, 
				"user" => $user_name->UserName, 
				);
				array_push($result,$res);

			}

		}
			// print_r($result);exit;

		$data['result'] = $result;
		$this->load->view('reports/invoice_report',$data);
	}

	public function package_report()
	{
		$data['package_report'] = $this->db->get('package')->result();
		$this->load->view('reports/package_report',$data);
	}
	public function visa_report()
	{
		$data['visa_report'] = $this->db->get('visa_report')->result();
		$this->load->view('reports/visa_report',$data);
	}

	public function hotel_report()
	{
	

	//    print_r($result);die();
		$data['hotel_report'] = $this->db->get('queryhotel')->result();
		
		$this->load->view('reports/hotel_report',$data);
	}
}