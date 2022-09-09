<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Image_Slug
{
	public $CI;

	public function __construct()
	{
		$this->CI =& get_instance();
	}


/* Upload Image Function */

 function upload_image($image,$old_image='',$folder='')
	{

//echo '<pre>';print_r($folder);exit;
	$config= array(
			'upload_path' => './public/uploads/'.$folder, 
			'allowed_types'=> 'gif|jpg|png|jpeg|pdf|docx'
		);
//echo '<pre>';print_r($config);exit;
		$this->CI->load->library('upload', $config);
//echo '<pre>';print_r($image);exit;
		if ($this->CI->upload->do_upload($image))
		{
			if(isset($old_image) && !empty($old_image))
			{
				//echo $old_image;exit;
			unlink($old_image);
			}
			$data =  $this->CI->upload->data();
			//echo 'success';exit;
			$image_path= './public/uploads/'.$folder.'/'.$data['file_name'];
			//echo $image_path; exit;
			return $image_path;
		
		}
		else
		{
			$image_path='';

			$error=array('error'=>$this->CI->upload->display_errors());
			echo $this->CI->upload->display_errors();exit;
			
		}
	}

public function resize_image($image_path,$image_height='',$image_width = '')
	{
		$config = array();
		$config['image_library'] = 'gd2';
		$config['source_image'] = $image_path;
		$config['create_thumb'] = FALSE;
		$config['maintain_ratio'] = FALSE;
		$config['width']         = $image_height;
		$config['height']       = $image_width;

		$this->CI->load->library('image_lib', $config);
		$this->CI->image_lib->initialize($config);
		if($this->CI->image_lib->resize())
		{
			return $image_path;
		}
		else
		{
			echo $this->CI->image_lib->display_errors();exit;
		}
	}


/*------------- Create Slug Function ---------------*/

public function create_slug($title,$table,$column,$key=NULL,$value=NULL)
	{
		$slug = strtolower(url_title($title));
		$i = 0;
		$data[$column] = $slug;

		if($key != NULL)
		{
			$data["$key !="] = $value;
		}

		while ($this->CI->db->where($data)->get($table)->num_rows())
		{
			if(!preg_match('/-{1}[0-9]+$/', $slug))
			{
				$slug .= '-'.++$i;
			}
			else
			{
				$slug = preg_replace('/[0-9]+$/', ++$i, $slug);
			}

			$data[$column] = $slug;
		}
		return $slug;
	}
}
?>