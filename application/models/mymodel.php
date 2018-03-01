<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mymodel extends CI_Model {

	public function cekLogin($user,$pass){
		$username=$this->db->escape_like_str($user);
		$password=$this->db->escape_like_str($pass);
		$this->db->select('username,password');
		$this->db->from('login');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$this->db->limit(1);

		$query=$this->db->get();

		if($query->num_rows()==1){
			return $query->result();
		}else {
			return $username;
		}
	}

}
