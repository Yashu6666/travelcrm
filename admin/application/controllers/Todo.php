<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todo extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('Image_Slug');
	}

	public function searchCustomerName()
	{
		$query = $this->input->get('query');
		$this->db->like('b2bcompanyName', $query);
		$data = $this->db->get("b2bcustomerquery")->result();
		$names = [];
		foreach ($data as $key => $val) {
		  $names[] = $val->b2bcompanyName;
		}
		echo json_encode($names);
	}

	public function view()
	{
		$data['ListTodo'] = $this->db->order_by('id', 'desc')->get('todo')->result();
		$data_assign_to = $this->db->get('users')->result();
		$names = [];
		foreach ($data_assign_to as $key => $val) {
		  $names[] = $val->UserName;
		}
		$data['assign_to'] = $names;
		$this->load->view('todo/view',$data);
	}

	public function addTodoDetails()
	{
		//echo '<pre>';print_r($_POST);exit;
		$cus_name = $this->input->post('TodoCustomer');
		$query = $this->db->where('b2bcompanyName',$cus_name)->get('b2bcustomerquery');

		$user = $this->db->where('b2bcompanyName',$cus_name)->get('b2bcustomerquery')->result();
		if(count($user) > 0){
		$today = $this->input->post('Tododay');
		$Date = date('Y-m-d');
		$dt = '';
		if($today == 'today')
		{
			$dt = date('Y-m-d', strtotime($Date));
			
		}
		if($today == 'tomorrow')
		{
			$dt = date('Y-m-d', strtotime($Date. ' + 1 days'));
			
		}
		if($today == '2days')
		{
			$dt = date('Y-m-d', strtotime($Date. ' + 2 days'));
		}
		if($today == '3days')
		{
			$dt = date('Y-m-d', strtotime($Date. ' + 3 days'));
		}
		$data = array('Todotype'=>$this->input->post('Todotype'),
						'Tododay'=>$dt,
						'TodoTime'=>$this->input->post('TodoTime'),
						'TodoCustomer'=>$this->input->post('TodoCustomer'),
						'TodoAssigned'=>$this->input->post('TodoAssigned'),
						'TodoDetails'=>$this->input->post('TodoDetails'),
						'status'=>$this->input->post('status'),
						'created_by'=>$this->input->post('created_by'),
						'query_id'=> $query->row()->query_id
					);

		if($this->db->insert('todo',$data))
		{
			$this->session->set_flashdata('success','Todo Added Sucessfully');
			redirect('todo/view','refresh');
		}
	else
		{
			$this->session->set_flashdata('error','Something Went Wrong');
			redirect('todo/view','refresh');
		}
	} else {
		$this->session->set_flashdata('error','Customer not found');
		redirect('todo/view','refresh');
	}
	}

	public function searchTodoList()
	{
		//echo '<pre>';print_r($_POST);exit;
		$from_date = $this->input->post('s_fromdate');
		$to_date = $this->input->post('s_todate');
		$task_status = $this->input->post('task_status');

		$data['listAll'] = $this->db->where('Tododay >=',$from_date)->where('Tododay <=',$to_date)->where('status',$task_status)->get('todo')->result();

		$this->load->view('todo/viewall',$data);
	}
}