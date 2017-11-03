<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
	 	parent::__construct();
	 	$this->load->helper('template');
	}

	public function login()
	{
		// echo "login";
		$data['title'] = 'Sign In Page';
		$template = 'auth/login';
		template_auth($template , $data);
		
	}

	public function forgot()
	{
		// echo "login";
		$data['title'] 	= 'Forgot Password';
		$template 		= 'auth/forgot';
		template_auth($template , $data);
		
	}

	public function signup()
	{
		// echo "login";
		$data['title'] 	= 'Signup';
		$template 		= 'auth/signup';
		template_auth($template , $data);
		
	}

}

/* End of file Auth.php */
/* Location: ./application/modules/auth/controllers/Auth.php */
