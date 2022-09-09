<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model 
{
/*================= Login ====================*/

 public function validate_credentials($email,$pass)
 {
 	//	echo $pass;exit;
 	$where  = array('UserName' =>$email ,'password'=>$pass);
 	return $this->db->where($where)->get('users')->row();
 }

 public function insert_newPass($pass)
 {
 	$data  = array('password' =>$pass);
 	return $this->db->where('reg_type','Admin')->update('registration',$data);
 }
 
 
 /*============== Register ======================*/

 public function insert_register_details($data)
 {
 	return $this->db->insert('registration',$data);
 }

 public function get_regId($email)
 {
 	return $this->db->where('email',$email)->get('registration')->row();
 }

 public function is_email_available($email,$type,$username)
 {
 	//echo $email; $type;exit;
 		$where = array('email' => $email,'reg_type' =>$type,'name'=>$username );
 		return $this->db->where($where)->get('registration')->row();
 }


 
}