<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('Image_Slug');
	}


	public function view_visa()
	{
		$data['view'] = $this->db->order_by('id', 'DESC')->get('visa')->result(); 
		$this->load->view('visa/view',$data);
	}

	public function add_visa()
	{
		
		$this->load->view('visa/add');
	}

	public function edit_visa($id)
	{
	
	$data['edit'] = $this->db->where('id',$id)->get('visa')->row();
	//echo '<pre>';print_r($data['edit_files']);exit();
		$this->load->view('visa/edit_visa',$data);
	}





	public function upload_docs()
	{
		//echo '<pre>';print_r($_POST);exit();
		 $occupation_path = '';
		 $oldpassport_path='';
		 $pancard_path='';                  
		 $newpassport_path='';
		 $photo_path='';
		 $biometrics_path='';
		 $basic_path='';
		 $basic_photo_path='';
		 $passport_scan_path='';
		 $address_path='';
		 $address_photo_path='';
		
		if($_FILES['occupation_photo']['name'])
	{
		
		$occupation_path = $this->image_slug->upload_image('occupation_photo','','visadocuments');
		//echo $occupation_path;exit;
		
	}
		if($_FILES['oldpassport_photo']['name'])
	{
		$oldpassport_path = $this->image_slug->upload_image('oldpassport_photo','','visadocuments');
	}
		if($_FILES['pancard_photo']['name'])
	{
		$pancard_path = $this->image_slug->upload_image('pancard_photo','','visadocuments');
	}
		if($_FILES['newpassport_photo']['name'])
	{
		$newpassport_path = $this->image_slug->upload_image('newpassport_photo','','visadocuments');
	}
		if($_FILES['photo']['name'])
	{
		$photo_path = $this->image_slug->upload_image('photo','','visadocuments');
	}	
		if($_FILES['biometrics']['name'])
	{
		$biometrics_path = $this->image_slug->upload_image('biometrics','','visadocuments');
	}
		if($_FILES['basic_require']['name'])
	{
		$basic_path = $this->image_slug->upload_image('basic_require','','visadocuments');
	}
		if(isset($_FILES['basic_photo']['name']))
	{
		$basic_photo_path = $this->image_slug->upload_image('basic_photo','','visadocuments');
	}
	if($_FILES['passport_scan']['name'])
	{
		$passport_scan_path = $this->image_slug->upload_image('passport_scan','','visadocuments');
	}	
	if($_FILES['address']['name'])
	{
		$address_path = $this->image_slug->upload_image('address','','visadocuments');
	}	
	if($_FILES['address_photo']['name'])
	{
		$address_photo_path = $this->image_slug->upload_image('address_photo','','visadocuments');
	}	
		
		$data = array('rowids' => $this->input->post('xyz'),
						'doc_submission'=>$this->input->post('doc_submission'),
						'interview'=>$this->input->post('interview'),
						'occupation_proof'=> $occupation_path,
						'old_passport'=> $oldpassport_path,
						'pancard'=> $pancard_path, 
						'original_passport'=> $newpassport_path,
						'photo'=> $photo_path,
						'biometrics'=> $biometrics_path,
						'basic_requirements'=> $basic_path,
						'photo2'=> $basic_photo_path,
						'passport_scan'=> $passport_scan_path,
						'address'=> $address_path,
						'photo3'=> $address_photo_path
		
						);

		$this->db->where('rowids',$this->input->post('xyz'))->insert('visa_documents',$data);
	}


	public function update_docs()
	{
		 //echo '<pre>';print_r($_POST);
		 //echo '<pre>';print_r($_FILES);
		 $occupation_path = '';
		 $oldpassport_path='';
		 $pancard_path='';                  
		 $newpassport_path='';
		 $photo_path='';
		 $biometrics_path='';
		 $basic_path='';
		 $basic_photo_path='';
		 $passport_scan_path='';
		 $address_path='';
		 $address_photo_path='';
		
		if($_FILES['occupation_photo']['name'])
	{
		
		$occupation_path = $this->image_slug->upload_image('occupation_photo','','visadocuments');
		//echo $occupation_path;exit;
		$data = array('occupation_proof'=>$occupation_path);
		$this->db->where('rowids',$this->input->post('xyz'))->update('visa_documents',$data);
		
	}
	else
	{
		//echo $this->input->post('old_occ');exit;
		$data = array('occupation_proof'=>$this->input->post('old_occ'));
		$this->db->where('rowids',$this->input->post('xyz'))->update('visa_documents',$data);
	}

		if($_FILES['oldpassport_photo']['name'])
	
	{

		$oldpassport_path = $this->image_slug->upload_image('oldpassport_photo','','visadocuments');
		$data = array('old_passport'=>$oldpassport_path);
		//echo '<pre>';print_r($data);exit;
		$this->db->where('rowids',$this->input->post('xyz'))->update('visa_documents',$data);
	}
	else
	{
		$data = array('old_passport'=>$this->input->post('oldpass'));
		$this->db->where('rowids',$this->input->post('xyz'))->update('visa_documents',$data);
	}

		if($_FILES['pancard_photo']['name'])

	{
		$pancard_path = $this->image_slug->upload_image('pancard_photo','','visadocuments');
		$data = array('pancard'=>$pancard_path);
		$this->db->where('rowids',$this->input->post('xyz'))->update('visa_documents',$data);
	}
	else
	{
		$data = array('pancard'=>$this->input->post('pan'));
		$this->db->where('rowids',$this->input->post('xyz'))->update('visa_documents',$data);
	}


		if($_FILES['newpassport_photo']['name'])
	{
		$newpassport_path = $this->image_slug->upload_image('newpassport_photo','','visadocuments');
		$data = array('original_passport'=>$newpassport_path);
		$this->db->where('rowids',$this->input->post('xyz'))->update('visa_documents',$data);
	}
	else
	{
		$data = array('original_passport'=>$this->input->post('newpass'));
		$this->db->where('rowids',$this->input->post('xyz'))->update('visa_documents',$data);
	}


		if($_FILES['photo']['name'])
	{
		$photo_path = $this->image_slug->upload_image('photo','','visadocuments');
		$data = array('photo'=>$photo_path);
		$this->db->where('rowids',$this->input->post('xyz'))->update('visa_documents',$data);
	}	
	else
	{
		$data = array('photo'=>$this->input->post('oldphoto'));
		$this->db->where('rowids',$this->input->post('xyz'))->update('visa_documents',$data);
	}

		if($_FILES['biometrics']['name'])
	{
		$biometrics_path = $this->image_slug->upload_image('biometrics','','visadocuments');
		$data = array('biometrics'=>$biometrics_path);
		$this->db->where('rowids',$this->input->post('xyz'))->update('visa_documents',$data);
	}
	else
	{
		$data = array('biometrics'=>$this->input->post('oldbiometric'));
		$this->db->where('rowids',$this->input->post('xyz'))->update('visa_documents',$data);
	}	
		

		if($_FILES['basic_require']['name'])
	
	{
		$basic_path = $this->image_slug->upload_image('basic_require','','visadocuments');
		$data = array('basic_requirements'=>$basic_path);
		$this->db->where('rowids',$this->input->post('xyz'))->update('visa_documents',$data);

	}
	else
	{
		$data = array('basic_requirements'=>$this->input->post('oldbasic'));
		$this->db->where('rowids',$this->input->post('xyz'))->update('visa_documents',$data);
	}



		if(isset($_FILES['basic_photo']['name']))
	{
		$basic_photo_path = $this->image_slug->upload_image('basic_photo','','visadocuments');
		$data = array('photo2'=>$basic_photo_path);
		$this->db->where('rowids',$this->input->post('xyz'))->update('visa_documents',$data);
	}
	else
	{
		$data = array('photo2'=>$this->input->post('oldbasic_photo'));
		$this->db->where('rowids',$this->input->post('xyz'))->update('visa_documents',$data);
	}


	if($_FILES['passport_scan']['name'])
	{
		$passport_scan_path = $this->image_slug->upload_image('passport_scan','','visadocuments');
		$data = array('passport_scan'=>$passport_scan_path);
		$this->db->where('rowids',$this->input->post('xyz'))->update('visa_documents',$data);
	}	
	else
	{
		$data = array('passport_scan'=>$this->input->post('oldpassport_scan'));
		$this->db->where('rowids',$this->input->post('xyz'))->update('visa_documents',$data);
	}


	if($_FILES['address']['name'])
	{
		$address_path = $this->image_slug->upload_image('address','','visadocuments');
		$data = array('address'=>$address_path);
		$this->db->where('rowids',$this->input->post('xyz'))->update('visa_documents',$data);
	}	
	else
	{
		$data = array('address'=>$this->input->post('oldaddress'));
		$this->db->where('rowids',$this->input->post('xyz'))->update('visa_documents',$data);
	}



	if($_FILES['address_photo']['name'])
	{
		$address_photo_path = $this->image_slug->upload_image('address_photo','','visadocuments');
		$data = array('photo3'=>$address_photo_path);
		$this->db->where('rowids',$this->input->post('xyz'))->update('visa_documents',$data);
	}	
	else
	{
		$data = array('photo3'=>$this->input->post('oldphotourl'));
		$this->db->where('rowids',$this->input->post('xyz'))->update('visa_documents',$data);
	}
		
		$data = array('doc_submission'=>$this->input->post('doc_submission'),
						'interview'=>$this->input->post('interview')
					);

		$this->db->where('rowids',$this->input->post('xyz'))->update('visa_documents',$data);
	}


	

	public function addVisaDetails()
	{
		$visa_category =  $this->input->post('visa_category');
		$entry_type = $this->input->post('entry_type');
		$process_time = $this->input->post('process_time');
		$visa_validity =$this->input->post('visa_validity');
		$adult =  $this->input->post('adult');
		$infant = $this->input->post('infant');
	$child= $this->input->post('child');

		$data = array(
						'visa_category'=>$visa_category,
						'entry_type'=>$entry_type,
						'process_time'=>$process_time,
						'visa_validity'=>$visa_validity,
						'adult'=>$adult,
						'infant'=>$infant,
						'child'=>$child
					);

		if($this->db->insert('visa',$data))
		{
			$this->session->set_flashdata('success','Visa Added Sucessfully');
			redirect('visa/view_visa','refresh');
		}
		else
		{
			$this->session->set_flashdata('error','Something Went Wrong');
			redirect('visa/view_visa','refresh');
		}
						
	}

	public function delete_visa($id)
	{
		if($this->db->where('id',$id)->delete('visa'))
		{
		$this->session->set_flashdata('success','visa  Deleted Sucessfully');
		redirect('visa/view_visa','refresh');
	}
	else
	{
		$this->session->set_flashdata('error','Something Went Wrong');
		redirect('visa/view_visa','refresh');
	}
	}

	public function updateVisaDetails($id)
	{
		
		$visa_category =  $this->input->post('visa_category');
		$entry_type = $this->input->post('entry_type');
		$process_time = $this->input->post('process_time');
		$visa_validity =$this->input->post('visa_validity');
		$adult =  $this->input->post('adult');
		$infant = $this->input->post('infant');
	$child= $this->input->post('child');

		$data = array(
						'visa_category'=>$visa_category,
						'entry_type'=>$entry_type,
						'process_time'=>$process_time,
						'visa_validity'=>$visa_validity,
						'adult'=>$adult,
						'infant'=>$infant,
						'child'=>$child
					);


		if($this->db->where('id',$id)->update('visa',$data))
		{
			$this->session->set_flashdata('success','Visa Updated Sucessfully');
			redirect('visa/view_visa','refresh');
		}
		else
		{
			$this->session->set_flashdata('error','Something Went Wrong');
			redirect('visa/view_visa','refresh');
		}
	}


	public function get_docsByRow()
	{
		$id = $_POST['id'];
		$visa_id = $_POST['visa_id'];
		//echo $visa_id;exit;

		$data = $this->db->where('rowids',$id)->where('visa_id',$visa_id)->get('visa_documents')->result();
		//echo '<pre>';print_r($data);exit;
		echo json_encode($data);
	}

}