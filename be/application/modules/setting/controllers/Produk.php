<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Atur Produk';
		$template = 'setting/produk';

		template($template , $data);		
	}


	public function add()
	{
		$data['title'] = 'Add Produk';
		$template = 'setting/addproduk';

		template($template , $data);		
	}

	public function edit()
	{
		$data['title'] = 'Edit Produk';
		$template = 'setting/editproduk';

		template($template , $data);		
	}

	public function assign()
	{
		$data['title'] = 'Assign Produk';
		$template = 'setting/assign';

		template($template , $data);		
	}

	public function sumary()
	{
		$data['title'] = 'Summary Produk';
		$template = 'setting/summary';

		template($template , $data);		
	}

} 
