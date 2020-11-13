<?php 
class AuthLogin extends CI_Model
{
	public function login($email=''){
		$this->db->where('email',$email);
		$query=$this->db->get('users');
		$data=$query->row();
		return $data; 
	}
}
?>