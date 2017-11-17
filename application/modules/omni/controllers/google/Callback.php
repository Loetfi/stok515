<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Callback extends CI_Controller {

	public function index()
	{
		$this->load->library('googleplus');
		/*
		* ini adalah callback dari oauth facebook. 
		* jika digunakan di front end harus ada treathment khusus.
		*/ 
		if (isset($_GET['code'])) { 
			$this->googleplus->getAuthenticate();  
			// print_r($this->googleplus->getUserInfo());
			$data = $this->googleplus->getUserInfo(); 


			$array = array(
				'emailgoogle' 	=> @$data['email'],
				'namegoogle' 	=> @$data['name'],
			);
			
			$this->session->set_userdata( $array );

			$emailgooglenya = @$data['email'];

			############################################################
			$res = $this->proses(json_encode( ['email' => @$emailgooglenya ] ));
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

				redirect('auth/login','refresh');
			} 
			##############################################################


		} else {
			//mengembalikan ke auth register
			redirect('auth/register','refresh');
			// redirect('afterlogin','refresh');
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
/* Location: ./application/controllers/omni/google/Callback.php */
