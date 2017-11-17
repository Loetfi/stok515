<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Callback extends CI_Controller {

	public function index()
	{
		require_once APPPATH.'../omni/twitter/twitter_class.php';
		require_once APPPATH.'../omni/twitter/twitteroauth.php';
		
		if (isset($_REQUEST['oauth_token']) && @$_SESSION['oauth_token'] !== @$_REQUEST['oauth_token']) {
			@$_SESSION['oauth_status'] = 'oldtoken'; 
			// header('Location: destroy.php');
			redirect('auth/loginCustomer','refresh');
		}else{
			$objTwitterApi = new TwitterLoginAPI;
			$connection = $objTwitterApi->twitter_callback();
			if( $connection == 'connected'){

				$objTwitterApi = new TwitterLoginAPI;
				$return = $objTwitterApi->view();  

				$array = array(
					'namatwitter' 	=> @$return->name,
					'usernametwitter' 	=> @$return->screen_name,
					'emailtwitter' 	=> @$return->email,
				);
				$this->session->set_userdata( $array );



				############################################################
				$res = $this->proses(json_encode( ['email' => @$return->email] ));
				$data = json_decode($res, TRUE);

				print_r($data);
				exit();

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


				// redirect('welcome','refresh');  
				// exit;
			} else {
				// header("Location: twitter?connected=F");
				$this->session->set_flashdata('message', '<div class="alert alert-warning"> Kesalahan Terjadi, Silahkan diulangi kembali. </div>');
				redirect('auth/login','refresh');
				exit;
			}
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

/* End of file Callback.php */
/* Location: ./application/controllers/omni/twitter/Callback.php */
