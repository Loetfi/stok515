<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function edit()
	{
		$template = 'auth/editprofile';
		$data['title'] = 'Edit Profile';
		template($template, $data);		
	}

	public function editakun()
	{
		$template = 'auth/editprofileakun';
		$data['title'] = 'Edit Profile';
		template($template, $data);		
	}
	
}

/* End of file Profil.php */
/* Location: ./application/modules/auth/controllers/Profil.php */
