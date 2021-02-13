<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_vehicle extends CI_Model{
	public function __construct(){
    	parent::__construct();
    	$this->load->database();
	}

	public function get()
	{
		$this->db->select('*');
		$this->db->from('tb_vehicle');
		$res = $this->db->get()->result_array();		

		return $res;
	}

	public function detail($id)
	{
		$this->db->select('*')
		->from('tb_vehicle')
		->where('id',$id);
		$res = $this->db->get()->result_array();		

		return $res;
	}

	public function simpan($data)
	{
		return $this->db->insert('tb_vehicle',$data);
	}

	public function update($id,$data)
	{
		$this->db->where('id',$id);
		$res = $this->db->update('tb_vehicle',$data);
		return $res;
	}

	public function hapus($id)
	{
		$this->db->where('id',$id);
		return $this->db->delete('tb_vehicle');
	}
}