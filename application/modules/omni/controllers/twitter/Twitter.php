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

			
			redirect('welcome','refresh');  

		} 
	}


	

}

/* End of file Twitter.php */
/* Location: ./application/controllers/omni/twitter/Twitter.php */
