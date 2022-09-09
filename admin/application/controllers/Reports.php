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
		$data['query_report'] = $this->db->query("SELECT DISTINCT reportsTo FROM b2bcustomerquery")->result();
		$this->load->view('reports/query_report',$data);
	}

	public function invoice_report()
	{
		$data['query_report'] = $this->db->query("SELECT DISTINCT reportsTo FROM b2bcustomerquery")->result();
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