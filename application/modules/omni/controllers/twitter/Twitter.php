<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Twitter extends CI_Controller {

	public function index()
	{

		require_once APPPATH.'../omni/twitter/twitter_class.php';
		require_once APPPATH.'../omni/twitter/twitteroauth.php'; 

		// if(isset($_GET['connect']) && @$_GET['connect'] == 'twitter'){
		$objTwitterApi = new TwitterLoginAPI;
		$return = $objTwitterApi->login_twitter('twitter');

			// exit();
		if($return['error']){
			$return['error'];

		} else {
			header('location:'.$return['url']);
			exit;
		}


		if(isset($_GET['connected']) && @$_GET['connected'] == 'Y' ){
			$objTwitterApi = new TwitterLoginAPI;
			$return = $objTwitterApi->view(); 
			$array = array(
				'namatwitter' 	=> @$return->name,
				'usernametwitter' 	=> @$return->screen_name,
				'emailtwitter' 	=> @$return->email,
			);
			$this->session->set_userdata( $array );


			############################################################
			$res = $this->proses(json_encode($this->input->post()));
			$data = json_decode($res, TRUE);

			if ($data['status'] === 200) { 

			$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Good job!', '" . $data['message'] . "', 'success'); </script>");
				// menambahkan untuk session
				$array = array(
					'userdata' => array_merge(@$data['data']['0'] , @$data['data']['1'])
				);
				$this->session->set_userdata( $array );
 
				redirect('dashboard','refresh');
				exit();
			}  else {
				$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Uuuh !', '" . $data['message'] . "', 'error'); </script>");
			} 
			##############################################################
			
			redirect('welcome','refresh');  

		} 
	}


	public function proses($parameter = '')
	{
		// $this->output->set_content_type('application/json');
		$parameter;
		// exit();

		// echo "berhasil";
		// print_r($parameter);
		// $json = file_get_contents('php://input');
  		// $dataInsert = json_decode($json, TRUE); 

		$url = linkservice('stoksis') ."api/accounts/loginSosmed/";
		$method = 'POST';
		$responseApi = ngeCurl($url, $parameter, $method);

		return $responseApi;

	}

}

/* End of file Twitter.php */
/* Location: ./application/controllers/omni/twitter/Twitter.php */
