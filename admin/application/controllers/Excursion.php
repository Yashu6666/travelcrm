<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excursion extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('Image_Slug');
	}


	public function view_excursion()
	{
		$data['view'] = $this->db->order_by("id", "desc")->get('excursion')->result();
		$this->load->view('excursion/view',$data);
	}

	public function add_excursion()
	{
		$data['supplier']=$this->db->query("SELECT * FROM supplier")->result();
		$this->load->view('excursion/add',$data);
	}

	public function edit_excursion($id)
	{
		$data['supplier']=$this->db->query("SELECT * FROM supplier")->result();
		$data['edit'] = $this->db->where('id',$id)->get('excursion')->row();
		$this->load->view('excursion/edit',$data);
	}

	public function delete_excursion($id)
	{
		if($this->db->where('id',$id)->delete('excursion'))
		{
			$this->session->set_flashdata('success','Excursion deleted Sucessfully');
			redirect('excursion/view_excursion','refresh');
		}
	else
		{
			$this->session->set_flashdata('error','Something Went Wrong');
			redirect('excursion/view_excursion','refresh');
		}
	}

	public function addExcursionDetails()
	{
		//echo '<pre>';print_r($_POST);exit;

	// $touramenities = implode(',', $_POST['touramenities']);
	// $tourexclusions = implode(',', $_POST['tourexclusions']);
	// $hotelpayments = implode(',', $_POST['hotelpayments']);
	
	//echo '<pre>';print_r($hotelpayments);exit;

	$type= $this->input->post('type');

	if($type=='PVT'){
		$pax= $this->input->post('pax');
		$price=$this->input->post('vehicle_price');
	}else{
		$pax=0;
		$price=0;
	}
	$data = array('tourname' => $this->input->post('tourname'),
					'tourdesc' => $this->input->post('tourdesc'),
					'type' => $this->input->post('type'),
					'tour_time' => $this->input->post('tour_time'),
					'created_by' => $this->session->userdata('admin_id'),
		     'adultprice' => $this->input->post('adultprice'),
			'childprice' => $this->input->post('childprice'),
			'infantprice' => $this->input->post('infantprice'),
			'tourmapaddress' => $this->input->post('tourmapaddress'),
			
			'operating_from' => $this->input->post('operating_from'),
			'operating_to' => $this->input->post('operating_to'),
			'pax'=>$pax,
			'vehicle_price'=>$price
				
	
			);


		if($this->db->insert('excursion',$data))
		{
			$this->session->set_flashdata('success','Excursion Added Sucessfully');
			redirect('excursion/view_excursion','refresh');
		}
		else
		{
			$this->session->set_flashdata('error','Something Went Wrong');
			redirect('excursion/view_excursion','refresh');
		}
	}

	public function updateExcursionDetails($id)
	{
		$type= $this->input->post('type');

	if($type=='PVT'){
		$pax= $this->input->post('pax');
		$price=$this->input->post('vehicle_price');
	}else{
		$pax=0;
		$price=0;
	}
	$data = array('tourname' => $this->input->post('tourname'),
					'tourdesc' => $this->input->post('tourdesc'),
					'type' => $this->input->post('type'),
		     'adultprice' => $this->input->post('adultprice'),
			'childprice' => $this->input->post('childprice'),
			'infantprice' => $this->input->post('infantprice'),
			'tourmapaddress' => $this->input->post('tourmapaddress'),
			
			'tour_time' => $this->input->post('tour_time'),
			'created_by' => $this->session->userdata('admin_id'),

			'operating_from' => $this->input->post('operating_from'),
			'operating_to' => $this->input->post('operating_to'),
			'pax'=>$pax,
			'vehicle_price'=>$price
				
	
			);

		if($this->db->where('id',$id)->update('excursion',$data))
		{
			$this->session->set_flashdata('success','Excursion Updated Sucessfully');
			redirect('excursion/view_excursion','refresh');
		}
		else
		{
			$this->session->set_flashdata('error','Something Went Wrong');
			redirect('excursion/view_excursion','refresh');
		}
	}
}