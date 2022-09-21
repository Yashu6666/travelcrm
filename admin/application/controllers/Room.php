<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('Image_Slug');
	}

	public function view_rooms()
	{
         
		$data['view'] = $this->db->order_by("id", "desc")->get('rooms')->result();
		$this->load->view('room/view',$data);
	}

	public function add_room()
	{

		$data['hotelList'] = $this->db->get('hotel')->result();
		$data['room_types'] = $this->db->get('room_types')->result();
		$this->load->view('room/add',$data);
	}

	public function edit_room($id)
	{
		$data['edit'] = $this->db->where('id',$id)->get('rooms')->row();
		$data['hotelList'] = $this->db->get('hotel')->result();
		$data['room_types'] = $this->db->get('room_types')->result();

		$this->load->view('room/edit',$data);
	}

	public function addRoomDetails()
	{
		// echo"<pre>";print_r($_POST);exit;
		if (isset($_POST['roomamenities'])) {
			$roomamenities = implode(',', $_POST['roomamenities']);
		}

		if (isset($_POST['netrate'])) {
			$netrate = $_POST['netrate'];
		}
		if (isset($_POST['netrate_extra'])) {
			$netrate_extra = $_POST['netrate_extra'];
		}
		if (isset($_POST['netrate_double'])) {
			$netrate_double = $_POST['netrate_double'];
		}

		if (isset($_POST['netrate_extra_child'])) {
			$netrate_extra_child = $_POST['netrate_extra_child'];
		}

		if (isset($_POST['roomtype'])) {
			$roomtype = $_POST['roomtype'];
		}

		if (isset($_POST['vat'])) {
			$vat = $_POST['vat'];
		}
		if (isset($_POST['vat_double'])) {
			$vat_double = $_POST['vat_double'];
		}
		if (isset($_POST['vat_extra'])) {
			$vat_extra = $_POST['vat_extra'];
		}

		if (isset($_POST['vat_extra_child'])) {
			$vat_extra_child = $_POST['vat_extra_child'];
		}

		if (isset($_POST['vat_extra_wo'])) {
			$vat_extra_wo = $_POST['vat_extra_wo'];
		}

		if (isset($_POST['netrate_extra_wo'])) {
			$netrate_extra_wo = $_POST['netrate_extra_wo'];
		}
		try {
			foreach ($roomtype as $key => $val) {
				$insert_data = array(
					'hotelname' => $this->input->post('hotelname'),
					'roomtype' => $roomtype[$key],
					'room_desc' => $this->input->post('room_desc'),
					'roomamenities' => $roomamenities,
					'netrate' => implode(',', $netrate[$key]),
					'netrate_double' => implode(',', $netrate_double[$key]),
					'netrate_extra' => implode(',', $netrate_extra[$key]),
					'vat' => implode(',', $vat[$key]),
					'vat_double' => implode(',', $vat_double[$key]),
					// 'vat_extra' => implode(',', $vat_extra[$key]),
					'netrate_extra_child' => implode(',', $netrate_extra_child[$key]),
					// 'vat_extra_child' => implode(',', $vat_extra_child[$key]),
					// 'vat_extra_wo' => implode(',', $vat_extra_wo[$key]),
					'netrate_extra_wo' => implode(',', $netrate_extra_wo[$key]),
					'bed' => $this->input->post('bed'),
					'bedtype' => $this->input->post('bedtype'),
					'adultsbase' => $this->input->post('adultsbase'),
					'childbase' => $this->input->post('childbase'),
					'adultsmax' => $this->input->post('adultsmax'),
					'childmax' => $this->input->post('childmax'),
					'guestmax' => $this->input->post('guestmax'),
					'from_date' => $this->input->post('from_date'),
					'to_date' => $this->input->post('to_date'),
					'currency' => $this->input->post('currency'),
					'supplementary_cost' =>  $this->input->post('supplementary')
				);
				$this->db->insert('rooms', $insert_data);
			}
			$this->session->set_flashdata('success', 'Room Added Sucessfully');
			redirect('room/view_rooms', 'refresh');
		} catch (\Exception $e) {
			$this->session->set_flashdata('error', 'Something Went Wrong');
			redirect('room/view_rooms', 'refresh');
		}
	}


	public function addRoomDetailss()
	{
		
		$roomamenities_post = $this->input->post('roomamenities');
		$netrate_post = $this->input->post('netrate');
		$netrate_extra_post = $this->input->post('netrate_extra');
		$netrate_double_post = $this->input->post('netrate_double');
		$netrate_extra_child_post = $this->input->post('netrate_extra_child');
		$roomtype_post  = $this->input->post('roomtype');
		$vat_post = $this->input->post('vat');
		$vat_double_post = $this->input->post('vat_double');
		$vat_extra_post = $this->input->post('vat_extra');
		$vat_extra_child_post = $this->input->post('vat_extra_child');
		$vat_extra_wo_post = $this->input->post('vat_extra_wo');
		$netrate_extra_wo_post =$this->input->post('netrate_extra_wo');

		if (isset($roomamenities_post)) {
			$roomamenities = $roomamenities_post;
		}
		if (isset($netrate_post)) {
			$netrate = $netrate_post;
		}
		if (isset($netrate_extra_post)) {
			$netrate_extra = $netrate_extra_post;
		}
		if (isset($netrate_double_post)) {
			$netrate_double = $netrate_double_post;
		}

		if (isset($netrate_extra_child_post)) {
			$netrate_extra_child = $netrate_extra_child_post;
		}

		if (isset($roomtype_post)) {
			$roomtype = $roomtype_post;
		}

		if (isset($vat_post)) {
			$vat = $vat_post;
		}
		if (isset($vat_double_post)) {
			$vat_double = $vat_double_post;
		}
		if (isset($vat_extra_post)) {
			$vat_extra = $vat_extra_post;
		}

		if (isset($vat_extra_child_post)) {
			$vat_extra_child = $vat_extra_child_post;
		}

		if (isset($vat_extra_wo_post)) {
			$vat_extra_wo = $vat_extra_wo_post;
		}

		if (isset($netrate_extra_wo_post)) {
			$netrate_extra_wo = $netrate_extra_wo_post;
		}
		try {
			foreach ($roomtype as $key => $val) {
				$insert_data = array(
					'promo_code' => $this->input->post('promo_code'),
					'created_by' => $this->session->userdata('admin_id'),
					'hotelname' => $this->input->post('hotelname'),
					'roomtype' => $roomtype[$key],
					'room_desc' => $this->input->post('room_desc'),
					'roomamenities' => implode(',', $roomamenities),
					'netrate' => implode(',', $netrate[$key]),
					'netrate_double' => implode(',', $netrate_double[$key]),
					'netrate_extra' => implode(',', $netrate_extra[$key]),
					'vat' => implode(',', $vat[$key]),
					'vat_double' => implode(',', $vat_double[$key]),
					// 'vat_extra' => implode(',', $vat_extra[$key]),
					'netrate_extra_child' => implode(',', $netrate_extra_child[$key]),
					// 'vat_extra_child' => implode(',', $vat_extra_child[$key]),
					// 'vat_extra_wo' => implode(',', $vat_extra_wo[$key]),
					'netrate_extra_wo' => implode(',', $netrate_extra_wo[$key]),
					'bed' => $this->input->post('bed'),
					'bedtype' => $this->input->post('bedtype'),
					'adultsbase' => $this->input->post('adultsbase'),
					'childbase' => $this->input->post('childbase'),
					'adultsmax' => $this->input->post('adultsmax'),
					'childmax' => $this->input->post('childmax'),
					'guestmax' => $this->input->post('guestmax'),
					'from_date' => $this->input->post('from_date'),
					'to_date' => $this->input->post('to_date'),
					'currency' => $this->input->post('currency'),
					'supplementary_cost' =>  $this->input->post('supplementary')
				);
				// echo json_encode($insert_data); exit;

				$this->db->insert('rooms', $insert_data);
			}
			// exit;
			$this->session->set_flashdata('success', 'Room Added Sucessfully');
			echo json_encode('Room Added Sucessfully');
		} catch (\Exception $e) {
			$this->session->set_flashdata('error', 'Something Went Wrong');
			echo json_encode('Something Went Wrong');
		}
	}


		public function updateRoomDetails($id)
		{

			//echo '<pre>';print_r($_POST);exit;
			if(isset($_POST['roomamenities']))
		{
			$roomamenities = implode(',', $_POST['roomamenities']);
			//echo '<pre>';print_r($roomamenities);exit;
		}
		if(isset($_POST['netrate']))
		{
			$netrate = implode(',', $_POST['netrate']);
		}
		if(isset($_POST['netrate_extra']))
		{
			$netrate_extra = implode(',', $_POST['netrate_extra']);
		}
		if(isset($_POST['netrate_double']))
		{
			$netrate_double = implode(',', $_POST['netrate_double']);
		}
		if(isset($_POST['vat']))
		{
			$vat = implode(',', $_POST['vat']);
		}
		if(isset($_POST['vat_double']))
		{
			$vat_double = implode(',', $_POST['vat_double']);
		}
		if(isset($_POST['vat_extra']))
		{
			$vat_extra = implode(',', $_POST['vat_extra']);
		}

		if(isset($_POST['vat_extra_child']))
		{
			$vat_extra_child = implode(',', $_POST['vat_extra_child']);
		}

		if(isset($_POST['vat_extra_wo']))
		{
			$vat_extra_wo = implode(',', $_POST['vat_extra_wo']);
		}

		if(isset($_POST['netrate_extra_wo']))
		{
			$netrate_extra_wo = implode(',', $_POST['netrate_extra_wo']);
		}
		if(isset($_POST['netrate_extra_child']))
		{
			$netrate_extra_child = implode(',', $_POST['netrate_extra_child']);
		}

		
		

		$data = array(	'hotelname' => $this->input->post('hotelname'), 
						'roomtype' => $this->input->post('roomtype'),
						'room_desc' => $this->input->post('room_desc'),
						'roomamenities' => $roomamenities,
						'netrate' => $netrate,
						'netrate_double' => $netrate_double,
						'netrate_extra' => $netrate_extra,
						'vat' => $vat,
						'vat_double' => $vat_double,
						// 'vat_extra' => $vat_extra,
						
						'promo_code' => $this->input->post('promo_code'),
						'created_by' => $this->session->userdata('admin_id'),

						'netrate_extra_child'=>$netrate_extra_child,
						// 'vat_extra_child'=>$vat_extra_child,
						// 'vat_extra_wo'=>$vat_extra_wo,
						'netrate_extra_wo'=>$netrate_extra_wo,

						'bed' => $this->input->post('bed'),
						'bedtype' => $this->input->post('bedtype'),
						'adultsbase' => $this->input->post('adultsbase'),
						'childbase' => $this->input->post('childbase'),
						'adultsmax' => $this->input->post('adultsmax'),
						'childmax' => $this->input->post('childmax'),
						'guestmax' => $this->input->post('guestmax'),
						'from_date' => $this->input->post('from_date'),
						'to_date' => $this->input->post('to_date'),
						'currency' => $this->input->post('currency')
				);		
		

		if($this->db->where('id',$id)->update('rooms',$data))
		{
			$this->session->set_flashdata('success','Room Updated Sucessfully');
			redirect('room/view_rooms','refresh');
		}
		else
		{
			$this->session->set_flashdata('error','Something Went Wrong');
			redirect('room/view_rooms','refresh');
		}
	}

	public function updateRoomDetailss($id)
		{
			// $id = $this->input->post('id');
			// echo '<pre>';print_r($this->input->post('roomamenities'));exit;
			// echo json_encode($id);exit;
		if(isset($_POST['roomamenities']))
		{
			$roomamenities = implode(',', $_POST['roomamenities']);
			//echo '<pre>';print_r($roomamenities);exit;
		}
		if(isset($_POST['netrate']))
		{
			$netrate = implode(',', $_POST['netrate']);
		}
		if(isset($_POST['netrate_extra']))
		{
			$netrate_extra = implode(',', $_POST['netrate_extra']);
		}
		if(isset($_POST['netrate_double']))
		{
			$netrate_double = implode(',', $_POST['netrate_double']);
		}
		if(isset($_POST['vat']))
		{
			$vat = implode(',', $_POST['vat']);
		}
		if(isset($_POST['vat_double']))
		{
			$vat_double = implode(',', $_POST['vat_double']);
		}
		if(isset($_POST['vat_extra']))
		{
			$vat_extra = implode(',', $_POST['vat_extra']);
		}

		if(isset($_POST['vat_extra_child']))
		{
			$vat_extra_child = implode(',', $_POST['vat_extra_child']);
		}

		if(isset($_POST['vat_extra_wo']))
		{
			$vat_extra_wo = implode(',', $_POST['vat_extra_wo']);
		}

		if(isset($_POST['netrate_extra_wo']))
		{
			$netrate_extra_wo = implode(',', $_POST['netrate_extra_wo']);
		}
		if(isset($_POST['netrate_extra_child']))
		{
			$netrate_extra_child = implode(',', $_POST['netrate_extra_child']);
		}

		
		

		$data = array(	'hotelname' => $this->input->post('hotelname'), 
						'roomtype' => $this->input->post('roomtype'),
						'room_desc' => $this->input->post('room_desc'),
						'roomamenities' => $roomamenities,
						'netrate' => $netrate,
						'netrate_double' => $netrate_double,
						'netrate_extra' => $netrate_extra,
						'vat' => $vat,
						'vat_double' => $vat_double,
						// 'vat_extra' => $vat_extra,

						'netrate_extra_child'=>$netrate_extra_child,
						// 'vat_extra_child'=>$vat_extra_child,
						// 'vat_extra_wo'=>$vat_extra_wo,
						'netrate_extra_wo'=>$netrate_extra_wo,

						'bed' => $this->input->post('bed'),
						'bedtype' => $this->input->post('bedtype'),
						'adultsbase' => $this->input->post('adultsbase'),
						'childbase' => $this->input->post('childbase'),
						'adultsmax' => $this->input->post('adultsmax'),
						'childmax' => $this->input->post('childmax'),
						'guestmax' => $this->input->post('guestmax'),
						'from_date' => $this->input->post('from_date'),
						'to_date' => $this->input->post('to_date'),
						'currency' => $this->input->post('currency')
				);		
		
				// echo json_encode($data);exit;
		if($this->db->where('id',$id)->update('rooms',$data))
		{
			$this->session->set_flashdata('success','Room Updated Sucessfully');
			// redirect('room/view_rooms','refresh');
			echo json_encode('Room Updated Sucessfully');
		}
		else
		{
			$this->session->set_flashdata('error','Something Went Wrong');
			// redirect('room/view_rooms','refresh');
			echo json_encode('Something Went Wrong');
		}
	}

	public function delete_room($id)
	{
		if($this->db->where('id',$id)->delete('rooms'))
		{
			$this->session->set_flashdata('success','Data deleted Sucessfully');
			redirect('room/view_rooms','refresh');
		}
	else
		{
			$this->session->set_flashdata('error','Something Went Wrong');
			redirect('room/view_rooms','refresh');
		}
	}


}
