<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_login extends CI_Model{
	public function __construct(){
    	parent::__construct();
    	$this->load->database();
	}

	public function cek_login($where){	
		
		$res = $this->db->get_where('tb_user',$where);

		return $res;
	}	

	public function get($email){
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where('username',$email);

	    return $this->db->get()->result_array();
    }
}