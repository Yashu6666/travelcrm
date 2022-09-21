<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('Image_Slug');
	}

	public function add_hotel()
	{
		if($this->session->userdata('reg_type')){
         $data['supplier']=$this->db->query("SELECT * FROM supplier")->result();
	
		$this->load->view('hotels/add_hotel',$data);
		}else{
			$this->load->view('login/login');
		}
	}

	public function view_hotels()
	{
		$data['hotels'] = $this->db->order_by("id", "desc")->get('hotel')->result();
		$this->load->view('hotels/view_hotels',$data);
	}

	public function edit_hotel($id)
	{
		 $data['supplier']=$this->db->query("SELECT * FROM supplier")->result();
	
		$data['edit'] = $this->db->where('id',$id)->get('hotel')->row();
		$this->load->view('hotels/edit_hotel',$data);
	}

	public function delete_hotel($id)
	{
		if($this->db->where('hotelname',$id)->delete('rooms'))
		{
			$this->db->where('id',$id)->delete('hotel');

			$this->session->set_flashdata('success','Hotel deleted Sucessfully');
			redirect('hotel/view_hotels','refresh');
		}
	else
		{
			$this->session->set_flashdata('error','Something Went Wrong');
			redirect('hotel/view_hotels','refresh');
		}
	}

	public function addHotelDetails()
{
	//echo '<pre>';print_r($_POST);exit;
	$hotelamenities = implode(',', $_POST['hotelamenities']);
	$hotelpayments = implode(',', $_POST['hotelpayments']);
	$hotelemail = implode(',', $_POST['hotelemail']);
	$contact_person = implode(',', $_POST['contact_person']);
	$phone = implode(',', $_POST['phone']);
	// echo '<pre>';print_r($this->input->post('hotelmapaddress'));exit;
	$data = array('hotelname' => $this->input->post('hotelname'), 
				'hoteldesc' => $this->input->post('hoteldesc'),
			'hotelmapaddress' => $this->input->post('hotelmapaddress'),
			'latitude' => $this->input->post('latitude'),
			'longitude' => $this->input->post('longitude'),
			'hotelamenities'=> $hotelamenities,
			'hotelpayments'=> $hotelpayments,
			'hotelemail'=> $hotelemail,
			'hotel_full_address'=> $this->input->post('hotel_full_address'),
			'checkintime' => $this->input->post('checkintime'),
			'checkouttime' => $this->input->post('checkouttime'),
			'hotelpolicy' => $this->input->post('hotelpolicy'),
			// 'hotelemail' => $this->input->post('hotelemail'),
			'hotelwebsite' => $this->input->post('hotelwebsite'),
			'hotelphone' => $phone,
			'contact_name' => $contact_person,
			'hotelstars' => $this->input->post('hotelstars'),
			'propertytype' => $this->input->post('propertytype'),
			'total_markup' => $this->input->post('total_markup'),
			'total_markup_per' => $this->input->post('total_markup_per'),
			'supplier' => $this->input->post('supplier'),
			'created_by' => $this->session->userdata('admin_id')

			);
	if($this->db->insert('hotel',$data))
	{
		$this->session->set_flashdata('success','Hotel Added Sucessfully');
			redirect('hotel/view_hotels','refresh');
	}
	else
	{
		$this->session->set_flashdata('error','Something Went Wrong');
			redirect('hotel/view_hotels','refresh');
	}
}

 public function updateHotelDetails($id)
 {
 	//echo '<pre>';print_r($_POST);exit;
	$hotelamenities = implode(',', $_POST['hotelamenities']);
	$hotelpayments = implode(',', $_POST['hotelpayments']);
	$hotelemail = implode(',', $_POST['hotelemail']);
	$contact_person = implode(',', $_POST['contact_person']);
	$phone = implode(',', $_POST['phone']);
	//echo '<pre>';print_r($hotelpayments);exit;
	$data = array('hotelname' => $this->input->post('hotelname'), 
		'hoteldesc' => $this->input->post('hoteldesc'),
			'hotelmapaddress' => $this->input->post('hotelmapaddress'),
			'latitude' => $this->input->post('latitude'),
			'longitude' => $this->input->post('longitude'),
			'hotelamenities'=> $hotelamenities,
			'hotelpayments'=> $hotelpayments,
			'hotelemail'=> $hotelemail,
			'hotel_full_address'=> $this->input->post('hotel_full_address'),
			'checkintime' => $this->input->post('checkintime'),
			'checkouttime' => $this->input->post('checkouttime'),
			'hotelpolicy' => $this->input->post('hotelpolicy'),
			// 'hotelemail' => $this->input->post('hotelemail'),
			'hotelwebsite' => $this->input->post('hotelwebsite'),
			'hotelphone' => $phone,
			'contact_name' => $contact_person,
			'hotelstatus' => $this->input->post('hotelstatus'),
			'hotelstars' => $this->input->post('hotelstars'),
			'propertytype' => $this->input->post('propertytype'),
			'total_markup' => $this->input->post('total_markup'),
			'total_markup_per' => $this->input->post('total_markup_per'),
			'supplier' => $this->input->post('supplier'),
			'created_by' => $this->session->userdata('admin_id')
			);
	if($this->db->where('id',$id)->update('hotel',$data))
	{
		$this->session->set_flashdata('success','Hotel Updated Sucessfully');
			redirect('hotel/view_hotels','refresh');
	}
	else
	{
		$this->session->set_flashdata('error','Something Went Wrong');
			redirect('hotel/view_hotels','refresh');
	}
 }
}	