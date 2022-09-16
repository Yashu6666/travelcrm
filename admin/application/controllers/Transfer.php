<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transfer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('Image_Slug');
	}

	public function vehicle()
	{
		$data['view'] = $this->db->get('vehicle')->result();
		$this->load->view('transfer/view',$data);
	}

	public function add_vehicle()
	{
		//add vehicle
		$this->load->view('transfer/add');
	}

	public function edit_vehicle($id)
	{
		$data['edit'] = $this->db->where('id',$id)->get('vehicle')->row();
		$this->load->view('transfer/edit',$data);
	}
	public function delete_vehicle($id)
	{
		$file = $this->db->where('id',$id)->get('vehicle')->row();
		unlink($file->files);
		if($this->db->where('id',$id)->delete('vehicle'))
		{
			$this->session->set_flashdata('success','Vehcile Deleted Sucessfully');
			redirect('transfer/vehicle','refresh');
		}
		else
		{
			$this->session->set_flashdata('error','Something Went Wrong');
			redirect('transfer/vehicle','refresh');
		}
	}

	public function addVehicledetails()
	{
		//echo '<pre>';print_r($_FILES);exit;
		if($_FILES['files']['name'])
		{
		$file_path = '';
		if($_FILES['files']['name'])
		{
			$file_path = $this->image_slug->upload_image('files','','vehicle');
			
		}

		$file_path1 = '';
		if($_FILES['files1']['name'])
		{
			$file_path1 = $this->image_slug->upload_image('files1','','vehicle');
			
		} 
		$data = array('car_type' => $this->input->post('car_type'), 
						'car_name' => $this->input->post('car_name'), 
						'seat_capacity' => $this->input->post('seat_capacity'), 
						'ac' => $this->input->post('ac'), 
						'files' => $file_path,
						'files1' => $file_path1
						);
		if($this->db->insert('vehicle',$data))
		{
			$this->session->set_flashdata('success','Vehcile Added Sucessfully');
			redirect('transfer/vehicle','refresh');
		}
		else
		{
			$this->session->set_flashdata('error','Something Went Wrong');
			redirect('transfer/vehicle','refresh');
		}
	}
	else
	{
		echo '<script>alert("You did not select a file to upload.")</script>';
		redirect('transfer/add_vehicle','refresh');
	}
	}


	public function updateVehicledetails($id)
	{
		//echo '<pre>';print_r($files);exit;
		$file_path = '';
		$old_path = $this->input->post('old_path');
		$old_path1 = $this->input->post('old_path1');
		if($_FILES['files']['name'] || isset($old_path))
		{
		if($_FILES['files']['name'] && $_FILES['files1']['name'])
		{
			$file_path = $this->image_slug->upload_image('files','','vehicle');
			$file_path1 = $this->image_slug->upload_image('files1','','vehicle');
			$data = array('car_type' => $this->input->post('car_type'), 
						'car_name' => $this->input->post('car_name'), 
						'seat_capacity' => $this->input->post('seat_capacity'), 
						'ac' => $this->input->post('ac'), 
						'files' => $file_path,
						'files1'=>$file_path1
						);
		}
		else if($_FILES['files']['name'])
		{	$file_path = $this->image_slug->upload_image('files','','vehicle');
			$data = array('car_type' => $this->input->post('car_type'), 
						'car_name' => $this->input->post('car_name'), 
						'seat_capacity' => $this->input->post('seat_capacity'), 
						'ac' => $this->input->post('ac'), 
						'files' => $file_path,
						'files1'=>$old_path1
						);
		}
		else if($_FILES['files1']['name'])
		{
			$file_path1 = $this->image_slug->upload_image('files1','','vehicle');
			$data = array('car_type' => $this->input->post('car_type'), 
						'car_name' => $this->input->post('car_name'), 
						'seat_capacity' => $this->input->post('seat_capacity'), 
						'ac' => $this->input->post('ac'), 
						'files1' => $file_path1,
						'files' => $old_path,
						);
		}else{
			{
				//$file_path1 = $this->image_slug->upload_image('files1','','vehicle');
				$data = array('car_type' => $this->input->post('car_type'), 
							'car_name' => $this->input->post('car_name'), 
							'seat_capacity' => $this->input->post('seat_capacity'), 
							'ac' => $this->input->post('ac'), 
							'files' => $old_path,
							'files1' => $old_path1,
							);
			}
		}
		
		if($this->db->where('id',$id)->update('vehicle',$data))
		{
			$this->session->set_flashdata('success','Vehcile Updated Sucessfully');
			redirect('transfer/vehicle','refresh');
		}
		else
		{
			$this->session->set_flashdata('error','Something Went Wrong');
			redirect('transfer/vehicle','refresh');
		}
		}
		else
		{
			echo '<script>alert("You did not select a file to upload.")</script>';
		redirect('transfer/add_vehicle','refresh');
		}
	}

/*++++++++++++++++++++TRASNFERS ++++++++++++++++++++++++++*/

		public function view_transfers()
		{
			$data['view'] = $this->db->order_by('id', 'DESC')->get('transfer_route')->result();
			// echo"<pre>";print_r($data['view']);exit;
			$this->load->view('transfer/view_transfers',$data);
		}

		public function add_transfer_route()
		{
			$this->load->view('transfer/add_transfer_route');
		}
		public function edit_route($id)
		{
			$data['edit'] = $this->db->where('id',$id)->get('transfer_route')->row();
			
			$this->load->view('transfer/edit_transfer_route',$data);
		}

		public function delete_route($id)
		{
			if($this->db->where('id',$id)->delete('transfer_route'))
			{
			$this->session->set_flashdata('success','Transfer Route Deleted Sucessfully');
			redirect('transfer/view_transfers','refresh');
		}
		else
		{
			$this->session->set_flashdata('error','Something Went Wrong');
			redirect('transfer/view_transfers','refresh');
		}
		}

	public function addTransferroute()
	{
		//echo '<pre>';print_r($_POST);exit;
		// $city_name = implode(',', $this->input->post('city_name'));
		// $no_days = implode(',', $this->input->post('no_days'));
		// $destination_covered = implode(',', $this->input->post('destination_covered'));	
		// $sightseeing_covered = implode(',', $this->input->post('sightseeing_covered'));	


		$seat_capacity = $this->input->post('seat_capacity');
		$currency = $this->input->post('currency');
		$cost = $this->input->post('cost');
		// print_r($currency); exit;
		try {
			foreach ($currency as $key => $val) {
				$data = array(
					'transport_type' => $this->input->post('transport_type'),

					'start_city' => $this->input->post('start_city'),
					'dest_city' => $this->input->post('dest_city'),
					'route_name' => $this->input->post('route_name'),
					'cost_type' => $this->input->post('intervaltype'),

					'seat_capacity' => $seat_capacity[$key],
					'currency' => $currency[$key],
					'cost' => $cost[$key],

					'seat_capacity_hour' => $this->input->post('seat_capacity_hour'),
					'currency_hour' => $this->input->post('currency_hour'),
					'per_hour_cost' => $this->input->post('per_hour_cost'),
					'created_by' => $this->session->userdata('admin_id'),

				);

				$this->db->insert('transfer_route', $data);
			}

			$this->session->set_flashdata('success', 'Transfer Route Added Sucessfully');
			redirect('transfer/view_transfers', 'refresh');

		} catch (\Exception $e) {
			$this->session->set_flashdata('error', 'Something Went Wrong');
			redirect('transfer/view_transfers', 'refresh');
		}
	}

	public function updateTransferroute($id)
	{
		

		$data = array('transport_type' => $this->input->post('transport_type'),
			
			'start_city' => $this->input->post('start_city'),
			'dest_city' => $this->input->post('dest_city'),
			'route_name' => $this->input->post('route_name'),
		
			'cost_type'=> $this->input->post('intervaltype'),
			'seat_capacity' => $this->input->post('seat_capacity'),
			'currency' => $this->input->post('currency'),
			'cost' => $this->input->post('cost'),
			
			'seat_capacity_hour' => $this->input->post('seat_capacity_hour'),
			'currency_hour' => $this->input->post('currency_hour'),
			'per_hour_cost' => $this->input->post('per_hour_cost'),
			
		);

		if($this->db->where('id',$id)->update('transfer_route',$data))
		{
			$this->session->set_flashdata('success','Transfer Route Updated Sucessfully');
			redirect('transfer/view_transfers','refresh');
		}
		else
		{
			$this->session->set_flashdata('error','Something Went Wrong');
			redirect('transfer/view_transfers','refresh');
		}
	}	



	public function get_seat_capacity()
	{
		//echo '<pre>';print_r($_POST);exit;
		$car_name = $_POST['car_name'];
			//	echo '<pre>';print_r($car_name);exit;
		$data = $this->db->where('car_name',$car_name)->get('vehicle')->row();
		$seat_capacity = $data->seat_capacity;
		//echo $seat_capacity;exit;
		echo json_decode($seat_capacity);
	}
public function get_seat_capacity_hour()
	{
		$car_name = $_POST['car_name'];
			//	echo '<pre>';print_r($car_name);exit;
		$data = $this->db->where('car_name',$car_name)->get('vehicle')->row();
		$seat_capacity = $data->seat_capacity;
		//echo $seat_capacity;exit;
		echo json_decode($seat_capacity);
	}
	
}