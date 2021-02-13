<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('parser');
		if($this->session->userdata('logged_in') == FALSE){
			redirect("login");
		}
	}

	public function index()
	{
		$data = array(
			'breadcrumb' => 'Dashboard',
			'dropdown_master' => 'collapse'
		);
		$data['page'] = $this->load->view('page/dash/dashboard',array(),true);

		$this->parser->parse('template/layout_admin',$data);
	}

}
