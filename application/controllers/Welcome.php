<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('homeview');
	}

   public function registernow()
   {
     if($_SERVER['REQUEST_METHOD']=='POST')
    {
    	$this->form_validation->set_rules('username','User Name','required');
    	$this->form_validation->set_rules('email','Email','required');
    	$this->form_validation->set_rules('password','Password','required');

    	if($this->form_validation->run()==TRUE)
    	{
    		$username = $this->input->post('username');
    		$email = $this->input->post('email');
    		$password = $this->input->post('password');

    		$data= array(
                'username'=> $username,
                'email'=> $email,
                'password'=> sha1($password),
                'status'=> '1',
    		);
    		$this->load->model('user_model');
    		$this->user_model->insertuser($data);
    		$this->session->set_flashdata('success','Successfully user Created');
    		redirect(base_url('welcome/index'));
    	}
    	else
    		{
        $this->session->set_flashdata('error','Fill all the required fields');
					redirect(base_url('welcome/index'));
    		}
    }
   }
	public function login()
	{
		$this->load->view('login');
	
}
	public function loginnow()
	{
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$this->form_validation->set_rules('email','Email','required');
    	$this->form_validation->set_rules('password','Password','required');

    	if($this->form_validation->run()==TRUE)
    	{
        $email = $this->input->post('email');
    		$password = $this->input->post('password');
    		$password= sha1($password);

    		$this->load->model('user_model');
    		$status= $this-> user_model->checkpassword($password, $email);
    		if($status != false)
    		{
         $username = $status ->username;
         $email = $status ->email;

         $session_data = array(
          'username' => $username,
          'email' => $email,

         );
         	$this->session->set_userdata('UserLoginSession',$session_data);

					redirect(base_url('welcome/dashboard'));
    		}
    		else
    		{
        $this->session->set_flashdata('error','Email or Password is Wrong');
					redirect(base_url('welcome/login'));
    		}
    	}
    	else
    		{
         $this->session->set_flashdata('error','Fill all the required fields');
				redirect(base_url('welcome/login'));
    		}
		}
	}

function dashboard()
	{
		$this->load->view('dashboard');
	}

	function logout()

	{
		session_destroy();
		redirect(base_url('welcome/login'));
	}
}
