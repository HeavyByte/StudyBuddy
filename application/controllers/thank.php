<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Thank extends CI_Controller {

	function __construct()
	{
   		parent::__construct();
 	}

	public function index()
	{
		$this->load->helper(array('form'));
		$this->load->view('thank_view.php');
	}
}