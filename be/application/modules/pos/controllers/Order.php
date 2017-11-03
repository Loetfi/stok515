<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function index()
	{
		$template = 'pos/tambahorder';
		$data['title'] = 'Tambah Order';
		template($template, $data);		
	}

	public function pilih()
	{
		$template = 'pos/tambahorderchoose';
		$data['title'] = 'Pilih Order';
		template($template, $data);		
	}

}

/* End of file Order.php */
/* Location: ./application/modules/pos/controllers/Order.php */
