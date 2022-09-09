<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('Image_Slug');
	}


	public function view_users()
	{
		$data['view'] = $this->db->order_by('id', 'desc')->get('users')->result();
		$this->load->view('roles/users',$data);
	}

	public function edit_users()
	{
		//echo '<pre>';print_r($_POST);exit;
		$id = $_POST['id'];
		$data = $this->db->where('id',$id)->get('users')->row();
		echo json_encode($data);
	}

	public function delete_user()
	{
		//echo '<pre>';print_r($_POST);exit;
		$id = $_POST['id'];
		
		if($this->db->where('id',$id)->delete('users'))
		{
			$msg = 'User Deleted Sucessfully';
			echo json_encode($msg);
		}
		else
		{
			$msg = 'Something Went Wrong';
			echo json_encode($msg);
		}
		
	}

	public function addUsers()
	{
		//echo '<pre>';print_r($_POST);exit;
		$image_path = '';
		if($_FILES['userPhoto']['name'])
		{
			$image_path = $this->image_slug->upload_image('userPhoto','','users');
		}

		$modules = implode(',', $this->input->post('checkContainer'));
		//echo '<pre>';print_r($modules);exit;

		$data = array('UserName'=>$this->input->post('UserName'),
						'password'=>$this->input->post('password'),
					'firstName'=>$this->input->post('firstName'),
					'LastName'=>$this->input->post('LastName'),
					'Address'=>$this->input->post('Address'),
					'phoneNumber'=>$this->input->post('phoneNumber'),
					'emialId'=>$this->input->post('emialId'),
					'modules'=>$modules,
					'userType'=>$this->input->post('userType'),
					'userPhoto'=>$image_path
				);

		// echo"<pre>";print_r($data);exit;
		if($this->db->insert('users',$data))
		{
			$this->session->set_flashdata('successPackage','User Added Sucessfully');
			redirect('roles/view_users','refresh');
		}
		else
		{
			$this->session->set_flashdata('error','Something Went Wrong');
			redirect('roles/view_users','refresh');
		}
		
	}


	public function updateUsers()
	{
		//echo '<pre>';print_r($_POST);exit;
		$id = $_POST['userId'];
		$old_image = $this->input->post('old_path');
		$image_path = '';

		$modules = implode(',', $this->input->post('checkContainer'));
		if($_FILES['userPhoto']['name'])
		{
		$data = array('UserName'=>$this->input->post('UserName'),
						'password'=>$this->input->post('password'),
					'firstName'=>$this->input->post('firstName'),
					'LastName'=>$this->input->post('LastName'),
					'Address'=>$this->input->post('Address'),
					'phoneNumber'=>$this->input->post('phoneNumber'),
					'emialId'=>$this->input->post('emialId'),
					'modules'=>$modules,
					'userType'=>$this->input->post('userType'),
					'userPhoto'=>$image_path
				);
	}
	else
	{
		$data = array('UserName'=>$this->input->post('UserName'),
						'password'=>$this->input->post('password'),
					'firstName'=>$this->input->post('firstName'),
					'LastName'=>$this->input->post('LastName'),
					'Address'=>$this->input->post('Address'),
					'phoneNumber'=>$this->input->post('phoneNumber'),
					'emialId'=>$this->input->post('emialId'),
					'modules'=>$modules,
					'userType'=>$this->input->post('userType'),
					'userPhoto'=>$old_image
				);
	}

		if($this->db->where('id',$id)->update('users',$data))
		{
			$this->session->set_flashdata('successPackage','User Updated Sucessfully');
			redirect('roles/view_users','refresh');
		}
		else
		{
			$this->session->set_flashdata('error','Something Went Wrong');
			redirect('roles/view_users','refresh');
		}
		
	}
}