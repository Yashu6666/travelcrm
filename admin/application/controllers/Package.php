<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('Image_Slug');
	}


	public function view_package()
	{
		$data['view'] = $this->db->get('package')->result();
		$this->load->view('package/view_package',$data);
	}

	public function add_package()
	{
		$data['listSightseeings'] = $this->db->get('excursion')->result();
		$data['supplierList'] = $this->db->get('supplier')->result();
		$this->load->view('package/add_package',$data);
	}

	public function addPackageDetails()
	{
		//echo '<pre>';print_r($_POST);exit;

		$data = array('package_name'=>$this->input->post('package_name'),
						'city_name'=>$this->input->post('city_name'),
						'end_city'=>$this->input->post('end_city'),
						'destination_covered'=>$this->input->post('destination_covered'),
						'inclusions'=>$this->input->post('inclusions'),
						'package_title'=>$this->input->post('package_title'),
						'start_from'=>$this->input->post('start_from'),
						'go_to'=>$this->input->post('go_to'),
						'start_date'=>$this->input->post('start_date'),
						'no_days'=>$this->input->post('no_days'),
						'days_added'=>$this->input->post('days_added'),
						'no_nights'=>$this->input->post('no_nights'),
						'start_city'=>$this->input->post('start_city'),
						'service_name'=>$this->input->post('service_name'),
						'service_type'=>$this->input->post('service_type'),
						'rate'=>$this->input->post('rate'),
						'currency'=>$this->input->post('currency'),
						'total_cost'=>$this->input->post('total_cost'),
						'type'=>$this->input->post('type'),
						'supplier'=>$this->input->post('supplier'),
						'terms_conditions'=>$this->input->post('terms_conditions'),
						'cancel_policy'=>$this->input->post('cancel_policy'),
						'booking_terms'=>$this->input->post('booking_terms'),
						'why_use'=>$this->input->post('why_use'),
						'return_policy'=>$this->input->post('return_policy'),
						'cost_markup'=>$this->input->post('cost_markup'),
						'btob'=>$this->input->post('btob'),
						'advance'=>$this->input->post('advance'),
						'balance_cost'=>$this->input->post('balance_cost'),
						'total_price_range'=>$this->input->post('total_price_range')
					);

		if($this->db->insert('package',$data))
	{
		$this->session->set_flashdata('success','Package Added Sucessfully');
			redirect('package/view_package','refresh');
	}
	else
	{
		$this->session->set_flashdata('error','Something Went Wrong');
			redirect('package/view_package','refresh');
	}


	}


	public function add_cities()
	{
		//echo '<pre>';print_r($_POST['p_id']);exit;
		$data = array('cityName'=>$_POST['itncity_name'],
						'noNights'=>$_POST['no_nights'],
						'fromDay'=>$_POST['from_day'],
						'toDay'=>$_POST['to_day'],
						'cityId'=>$_POST['id'],
						'package_id'=>$_POST['p_id']
					);

		$this->db->insert('cities',$data);
		$data = $this->db->where('package_id',$_POST['p_id'])->get('cities')->result();
		echo json_encode($data);
		

	}

	public function save_search_query()
	{
		$date = strtotime ($_POST['fromdate'] );
		$date2 = strtotime ($_POST['todate'] );
		$from_d = date ( 'Y-m-d' , $date);
		$to_d = date ( 'Y-m-d' , $date2);
		
		// $rating  = strtotime ($_POST['rating'] );
		// $rating  = strtotime ($_POST['rating'] );

		
		$this->db->select("h.id,h.hotelmapaddress,h.hotelname,r.supplier,h.hotelstars,r.roomtype");
		$this->db->from("hotel h,rooms r");
		//echo '<pre>';print_r($where);exit;
		$this->db->where('h.from_date',$from_d);
		$this->db->where('h.to_date',$to_d);
		$this->db->where('h.hotelstars',$_POST['rating']);
		// $this->db->where('h.hotelname',$_POST['rating']);
		// $this->db->where('h.hotelmapaddress',$_POST['rating']);
		// $this->db->where('r.roomtype',$_POST['rating']);
		$data = $this->db->get()->result();
		// echo '<pre>';print_r($data);exit;
		echo json_encode($data);
		
	}
	
}