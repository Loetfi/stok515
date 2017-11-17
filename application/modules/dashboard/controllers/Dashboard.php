<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		//cek login 
		isLogin();
	}

	public function index()
	{
		$template = 'dashboard/dashboard';
		$data['title'] = 'Dashboard';
		template($template, $data);		
	}

}

/* End of file Dashboard.php */
/* Location: ./application/modules/dashboard/controllers/Dashboard.php */
