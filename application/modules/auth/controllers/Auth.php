<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
	 	parent::__construct();
	 	$this->load->helper('template');
	 	$this->load->library('googleplus');
	}

	

	public function forgot()
	{
		// echo "login";
		$data['title'] 	= 'Forgot Password';
		$template 		= 'auth/forgot';
		template_auth($template , $data);
		
	}

	public function newpassword()
	{
		$data['title'] 	= 'New Password';
		$template 		= 'auth/newpassword';
		template_auth($template , $data);
		
	}

	

}

/* End of file Auth.php */
/* Location: ./application/modules/auth/controllers/Auth.php */
