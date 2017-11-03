<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Atur Toko';
		$template = 'setting/toko';

		template($template , $data);		
	}

}

/* End of file Toko.php */
/* Location: ./application/modules/setting/controllers/Toko.php */
