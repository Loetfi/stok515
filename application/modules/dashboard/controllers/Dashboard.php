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
		$sesi = $this->session->userdata('userdata');
		// exit();

		#### get count store
		$userdata  = $this->session->userdata('userdata');
		$jwt = $userdata['token']; 
		@$parameter;
		$url = linkservice('store') ."api/storebyuser?userId=".@$sesi['id'];
		$method = 'GET';
		$responseApi = ngeCurl($url, '', $method, $jwt);
		$res = json_decode($responseApi,true);
		$data['storecount'] = count($res['data']);
		######### get end count store

		$template = 'dashboard/dashboard';
		$data['title'] = 'Dashboard';
		template($template, $data);		
	}

}

/* End of file Dashboard.php */
/* Location: ./application/modules/dashboard/controllers/Dashboard.php */
