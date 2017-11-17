<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('template');
		$this->load->library('googleplus');
	} 

	public function index()
	{
		$this->session->sess_destroy();
		redirect('auth/login','refresh');
	}

}

/* End of file Logout.php */
/* Location: ./application/modules/auth/controllers/Logout.php */
