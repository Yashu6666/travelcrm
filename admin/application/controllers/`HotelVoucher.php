<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HotelVoucher extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('Image_Slug');
	}

	public function add_hotel()
	{
		if($this->session->userdata('reg_type')){
         $data['supplier']=$this->db->query("SELECT * FROM supplier")->result();
	
		$this->load->view('hotel_voucher/add_hotel_voucher',$data);
		}else{
			$this->load->view('login/login');
		}
	}

	public function view_hotels_voucher()
	{
		$data['hotels'] = $this->db->get('hotel')->result();
		$this->load->view('hotel_voucher/view_hotels_voucher',$data);
	}

	public function edit_hotel($id)
	{
		 $data['supplier']=$this->db->query("SELECT * FROM supplier")->result();
	
		$data['edit'] = $this->db->where('id',$id)->get('hotel')->row();
		$this->load->view('hotel_voucher/edit_hotel_voucher',$data);
	}

	public function delete_hotel($id)
	{
		if($this->db->where('hotelname',$id)->delete('rooms'))
		{
			$this->db->where('id',$id)->delete('hotel');

			$this->session->set_flashdata('success','Hotel deleted Sucessfully');
			redirect('HotelVoucher/view_hotels_voucher','refresh');
		}
	else
		{
			$this->session->set_flashdata('error','Something Went Wrong');
			redirect('HotelVoucher/view_hotels_voucher','refresh');
		}
	}

	public function addHotelDetails()
{
	//echo '<pre>';print_r($_POST);exit;
	$hotelamenities = implode(',', $_POST['hotelamenities']);
	$hotelpayments = implode(',', $_POST['hotelpayments']);
	// echo '<pre>';print_r($this->input->post('hotelmapaddress'));exit;
	$data = array('hotelname' => $this->input->post('hotelname'), 
				'hoteldesc' => $this->input->post('hoteldesc'),
			'hotelmapaddress' => $this->input->post('hotelmapaddress'),
			'latitude' => $this->input->post('latitude'),
			'longitude' => $this->input->post('longitude'),
			'hotelamenities'=> $hotelamenities,
			'hotelpayments'=> $hotelpayments,
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
	if($this->db->insert('hotel',$data))
	{
		$this->session->set_flashdata('success','Hotel Added Sucessfully');
			redirect('HotelVoucher/view_hotels_voucher','refresh');
	}
	else
	{
		$this->session->set_flashdata('error','Something Went Wrong');
			redirect('HotelVoucher/view_hotels_voucher','refresh');
	}
}

 public function updateHotelDetails($id)
 {
 	//echo '<pre>';print_r($_POST);exit;
	$hotelamenities = implode(',', $_POST['hotelamenities']);
	$hotelpayments = implode(',', $_POST['hotelpayments']);
	//echo '<pre>';print_r($hotelpayments);exit;
	$data = array('hotelname' => $this->input->post('hotelname'), 
		'hoteldesc' => $this->input->post('hoteldesc'),
			'hotelmapaddress' => $this->input->post('hotelmapaddress'),
			'latitude' => $this->input->post('latitude'),
			'longitude' => $this->input->post('longitude'),
			'hotelamenities'=> $hotelamenities,
			'hotelpayments'=> $hotelpayments,
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
	if($this->db->where('id',$id)->update('hotel',$data))
	{
		$this->session->set_flashdata('success','Hotel Updated Sucessfully');
			redirect('HotelVoucher/view_hotels_voucher','refresh');
	}
	else
	{
		$this->session->set_flashdata('error','Something Went Wrong');
			redirect('HotelVoucher/view_hotels_voucher','refresh');
	}
 }
}	