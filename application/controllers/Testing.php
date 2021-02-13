<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// if($this->session->userdata('logged_in') == FALSE){
		// 	redirect("login");
		// }
	}
	
	public function data_session(){
		$username = $this->session->userdata('username');
		$email = $this->session->userdata('email');
		$logged_in = $this->session->userdata('logged_in');

		echo "Username: ".$username.'<br>';
		echo "Email: ".$email.'<br>';
		echo "Logged_in: ".$logged_in.'<br>';
	}

}
