<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meals extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('Image_Slug');
	}

	public function view_meals()
	{
		$data['view'] = $this->db->order_by("id", "desc")->get('meals')->result();
		$this->load->view('meals/view',$data);
	}
    public function add_meals()
	{
        $this->load->view('meals/add');
	}
    public function addMealsdetails()
	{
		
        $data = array(
			'resturant_name'=>$this->input->post('resturant_name'),
			'resturant_type'=>$this->input->post('resturant_type'),
			'meal_name'=>$this->input->post('meal_name'),
			'meal_type'=>$this->input->post('meal_type'),
			'adult_price'=>$this->input->post('adult_price'),
			'child_rate'=>$this->input->post('child_price'),
			// 'upto_pax'=>$this->input->post('upto_pax'),
			// 'transfer' => $this->input->post('transfer')[0]
    );
	// print_r($data);exit;
if($this->db->insert('meals',$data))
{
$this->session->set_flashdata('successPackage','Meals Created Sucessfully');
redirect('meals/view_meals','refresh');
}
else
{
$this->session->set_flashdata('error','Something Went Wrong');
redirect('meals/view_meals','refresh');
}
	}

	public function edit_meals($id)
	{
		$data['edit'] = $this->db->where('id',$id)->get('meals')->row();
		// print_r($data);exit;
		$this->load->view('meals/edit',$data);
	}

	public function delete_meals($id)
	{
		if($this->db->where('id',$id)->delete('meals'))
		{
			$this->session->set_flashdata('success','Meals deleted Sucessfully');
			redirect('meals/view_meals','refresh');
		}
	else
		{
			$this->session->set_flashdata('error','Something Went Wrong');
			redirect('meals/view_meals','refresh');
		}
	}

	public function update_meals(){

		$data = array('resturant_name'=>$this->input->post('resturant_name'),
		'resturant_type'=>$this->input->post('resturant_type'),
		'meal_name'=>$this->input->post('meal_name'),
		'meal_type'=>$this->input->post('meal_type'),
		'adult_price'=>$this->input->post('adult_price'),
		'child_rate'=>$this->input->post('child_price'),
		// 'upto_pax'=>$this->input->post('upto_pax'),
		// 'transfer' => $this->input->post('transfer')[0]
	);

	$id=$this->input->post('id');

		if($this->db->where('id',$id)->update('meals',$data))
		{
			$this->session->set_flashdata('success','Meals Updated Sucessfully');
			redirect('meals/view_meals','refresh');
		}
		else
		{
			$this->session->set_flashdata('error','Something Went Wrong');
			redirect('meals/view_meals','refresh');
		}
	}

}
    ?>