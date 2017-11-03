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

	public function chooseproduk()
	{
		$template = 'pos/tambahorderchooseproduk';
		$data['title'] = 'Tambah Order Choose Produk';
		template($template, $data);		
	}

	public function tambahordercartpage()
	{
		$template = 'pos/tambahordercartpage';
		$data['title'] = 'Cart';
		template($template, $data);		
	}

	public function payoptiontunai()
	{
		$template = 'pos/payoptiontunai';
		$data['title'] = 'Pay';
		template($template, $data);		
	} 
}

/* End of file Order.php */
/* Location: ./application/modules/pos/controllers/Order.php */
