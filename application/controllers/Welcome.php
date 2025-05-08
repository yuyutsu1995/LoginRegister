<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
    }
   }

}