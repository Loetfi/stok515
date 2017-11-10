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
		echo "<pre>";
		print_r($this->session->all_userdata());
 		// echo "welcome";

	}

	public function test()
	{
		// $dataInsert =  array('test' => 'ahai');
		// php
		$json = file_get_contents('php://input');
  		$dataInsert = json_decode($json, TRUE);

  		// print_r($params);
  		// exit();

		$url = linkservice('stoksis') ."api/accounts/login/";
		$method = 'POST';
		$responseApi = ngeCurl($url, $json, $method);

		print_r($responseApi);
	}
}
















