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
		$this->session->unset_userdata('OAUTH_ACCESS_TOKEN');
		$this->session->unset_userdata('namefb');
		$this->session->unset_userdata('emailfb');
		$this->session->unset_userdata('tokenfb');
		$this->session->unset_userdata('usernamefb');
		$this->session->unset_userdata('emaillinkedin');
		$this->session->unset_userdata('namelinkedin');
		$this->session->unset_userdata('emailgoogle');
		$this->session->unset_userdata('namegoogle');

		$this->session->unset_userdata('namatwitter');
		$this->session->unset_userdata('usernametwitter');
		$this->session->unset_userdata('emailtwitter');
		
		
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

	public function newpassword()
	{
		$data['title'] 	= 'New Password';
		$template 		= 'auth/newpassword';
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
