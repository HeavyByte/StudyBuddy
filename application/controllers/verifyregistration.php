<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class VerifyRegistration extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model('user_model','',TRUE);
 }
 
 function index()
 {
	$this->load->library('form_validation');
	// field name, error message, validation rules
	$this->form_validation->set_rules('firstname', 'First Name', 'trim|required|min_length[4]|xss_clean');
	$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|min_length[4]|xss_clean');
	$this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
	$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
	$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

	if($this->form_validation->run() == FALSE)
	{
		if(($this->session->userdata('user_name')!=""))
		{
			redirect('home', 'refresh');
		}
		else{
			#$data['title']= 'Home';
			#$this->load->view('header_view',$data);
			$this->load->view('register_view');
			#$this->load->view('footer_view',$data);
		}
	}
	else
	{
	$this->user_model->add_user();
	redirect('thank', 'refresh');
	}
	

 
 }
 

}
?>
