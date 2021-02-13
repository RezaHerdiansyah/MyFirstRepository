<?php

class Form extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

        public function index()
        {
            
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required',
                    array('required' => 'You must provide a %s.')
            );
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');

            if ($this->form_validation->run() == FALSE)
            {
                    $this->load->view('myform');
            }
            else
            {
                    $this->load->view('formsuccess');
            }
        }
}