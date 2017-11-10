<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('template');
		$this->load->library('googleplus');
	} 

	public function index()
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
		$this->session->unset_userdata('FBRLH_state');
 		// end 

 		// menghapus session userdata
 		$this->session->unset_userdata('userdata');

		if ($this->input->post('email')) { 

			$res = $this->proses(json_encode($this->input->post()));
			$data = json_decode($res, TRUE);

			if ($data['status'] === 200) { 

			$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Good job!', '" . $data['message'] . "', 'success'); </script>");
				// menambahkan untuk session
				$array = array(
					'userdata' => array_merge(@$data['data']['0'] , @$data['data']['1'])
				);
				$this->session->set_userdata( $array );

				// print_r($this->session->all_userdata());
				
				redirect('dashboard','refresh');
				exit();
			}  else {
				$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Uuuh !', '" . $data['message'] . "', 'error'); </script>");
			} 
		}
		
		
		// echo "login";
		$data['title'] = 'Sign In Page';
		$template = 'auth/login';
		template_auth($template , $data);
		
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

		$url = linkservice('stoksis') ."api/accounts/login/";
		$method = 'POST';
		$responseApi = ngeCurl($url, $parameter, $method);

		return $responseApi;

	}

}

/* End of file Login.php */
/* Location: ./application/modules/auth/controllers/Login.php */
