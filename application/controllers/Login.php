<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('Mod_login','mLogin');
        $this->load->library('form_validation');
    }

	public function index()
	{		
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('template/layout_login');
            $this->load->view('app_js/page_login');
        }
        else
        {
            $newdata = array(
                    'username'  => 'bocahganteng.com',
                    'email'     => 'aku@bocahganteng.com',
                    'logged_in' => TRUE
            );

            $this->session->set_userdata($newdata);
            
            redirect('dashboard');
        }
        
	}

    public function doLogin()
    {
        $u = $this->input->post('email');
        $p = $this->input->post('password');
        $md5_p = md5($p);

        $where = array(
            'username' => $u,
            'password' => $md5_p
        );

        $cek = $this->mLogin->cek_login($where)->num_rows();

        if ($cek > 0) {

            $data = $this->mLogin->get($u);

            foreach ($data as $d) {
                $id = $d['id'];
                $name = $d['name'];
                $username = $d['username'];
            }


            $data_session = array(
                'user_id' => $id,
                'name'     => $name,
                'username'  => $username,
                'logged_in' => TRUE
            );

            $this->session->set_userdata($data_session);

            redirect('dashboard');

        }else{
            echo "Ga boleh KEPO klo ga punya akun!";
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}
