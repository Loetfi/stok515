<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pos extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Setting Pos';
		$template = 'setting/pos';

		template($template , $data);		
	}

}

/* End of file Pos.php */
/* Location: ./application/modules/setting/controllers/Pos.php */
