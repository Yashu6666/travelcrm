<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('Image_Slug');
	}

	public function view_supplier()
	{
		$data['view'] = $this->db->order_by('id', 'desc')->get('supplier')->result();
		// echo '<pre>';print_r($data);exit;
		$this->load->view('supplier/view',$data);
	}

	public function add_supplier()
	{
		$this->load->view('supplier/add');
	}
	

	public function addSupplier()
	{
		//echo '<pre>';print_r($_POST);exit;

		$data = array('company_name'=> $this->input->post('company_name'),
					'salulation'=> $this->input->post('salulation'),
					'firstName'=> $this->input->post('firstName'),
					'lastName'=> $this->input->post('lastName'),
					'email'=> $this->input->post('email'),
					'mobile_no'=> $this->input->post('mobile_no'),
					'designation'=> $this->input->post('designation'),
					'country'=> $this->input->post('country'),
					'state'=>"test",
					'address'=> $this->input->post('address'),
					'category'=> $this->input->post('category'),
					'services'=> "test",
					'city'=> $this->input->post('city'),
					'acc_name'=> $this->input->post('acc_name'),
					'acc_num'=> $this->input->post('acc_num'),
					'bank_name'=> $this->input->post('bank_name'),
					'ifsc_code'=> $this->input->post('ifsc_code'),
					'swift_code'=> $this->input->post('swift_code'),
					'isPrimary'=> $this->input->post('inlineRadioOptions'),
					'comments'=> "test",
	);

		if($this->db->insert('supplier',$data))
		{
			
			$this->session->set_flashdata('success','Supplier Details Added Sucessfully! Please Add Supplier Contact Details');
			redirect('supplier/view_supplier','refresh');
		}
		else
		{
			$this->session->set_flashdata('error','Something Went Wrong');
			redirect('supplier/view_supplier','refresh');
		}
		
	}


	public function updateSupplier($id)
	{

		$data = array('company_name'=> $this->input->post('company_name'),
					'salulation'=> $this->input->post('salulation'),
					'firstName'=> $this->input->post('firstName'),
					'lastName'=> $this->input->post('lastName'),
					'email'=> $this->input->post('email'),
					'mobile_no'=> $this->input->post('mobile_no'),
					'designation'=> $this->input->post('designation'),
					'country'=> $this->input->post('country'),
					'state'=>"test",
					'address'=> $this->input->post('address'),
					'category'=> $this->input->post('category'),
					'services'=>"test",
					'city'=> $this->input->post('city'),
					'acc_name'=> $this->input->post('acc_name'),
					'acc_num'=> $this->input->post('acc_num'),
					'bank_name'=> $this->input->post('bank_name'),
					'ifsc_code'=> $this->input->post('ifsc_code'),
					'swift_code'=> $this->input->post('swift_code'),
					'isPrimary'=> $this->input->post('inlineRadioOptions'),
					'comments'=>"test",
	);

		if($this->db->where('id',$id)->update('supplier',$data))
		{
			
			$this->session->set_flashdata('success','Supplier Details Updated Sucessfully! Please Add Supplier Contact Details');
			redirect('supplier/view_supplier','refresh');
		}
		else
		{
			$this->session->set_flashdata('error','Something Went Wrong');
			redirect('supplier/view_supplier','refresh');
		}
	}

	
	public function editSupplierDetails($id)
	{
		$data['edit'] = $this->db->where('id',$id)->get('supplier')->row();
		$this->load->view('supplier/edit',$data);
	}

	

	

	public function deleteSupplierDetails($id)
	{
		if($this->db->where('id',$id)->delete('supplier'))
		{
			$this->session->set_flashdata('success','Supplier  Details Deleted Sucessfully!');
			redirect('supplier/view_supplier','refresh');
		}
		else
		{
			$this->session->set_flashdata('error','Something Went Wrong');
			redirect('supplier/view_supplier','refresh');
		}
	}
}