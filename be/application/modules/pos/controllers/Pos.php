<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pos extends CI_Controller {

	public function index()
	{
		$template = 'pos/mypos';
		$data['title'] = 'My POS';
		template($template, $data);		
	}

	public function detail()
	{
		$template = 'pos/detailtransaksipos';
		$data['title'] = 'My POS';
		template($template, $data);		
	}

}

/* End of file Pos.php */
/* Location: ./application/modules/pos/controllers/Pos.php */
