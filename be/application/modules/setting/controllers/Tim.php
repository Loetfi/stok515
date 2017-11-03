<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tim extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Atur Tim';
		$template = 'setting/tim';

		template($template , $data);		
	}

}

/* End of file Tim.php */
/* Location: ./application/modules/setting/controllers/Tim.php */
