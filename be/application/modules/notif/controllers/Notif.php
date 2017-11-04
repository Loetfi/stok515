<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notif extends CI_Controller {

	public function index()
	{
		$template = 'notif/pemberitahuan';
		$data['title'] = 'Notifications';
		template($template, $data);   
	}


}

/* End of file Notif.php */
/* Location: ./application/modules/notif/controllers/Notif.php */
