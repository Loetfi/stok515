<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tim extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Atur Tim';
		$template = 'setting/tim';

		template($template , $data);		
	}

	public function add()
	{
		$data['title'] = 'Tambah Tim';
		$template = 'setting/tambahtim';

		template($template , $data);		
	}

	public function edit()
	{
		$data['title'] = 'Tambah Tim';
		$template = 'setting/edittim';

		template($template , $data);		
	}

	public function editsummary()
	{
		$data['title'] = 'Edit Tim Summary';
		$template = 'setting/edittimsummary';

		template($template , $data);		
	} 

	public function addassign()
	{
		$data['title'] 	= 'Tambah Tim Assign';
		$template 		= 'setting/tambahtimassign';

		template($template , $data);		
	}

	public function addsummary()
	{
		$data['title'] 	= 'Tambah Tim Summary';
		$template 		= 'setting/tambahtimsummary';

		template($template , $data);		
	}
 
}

/* End of file Tim.php */
/* Location: ./application/modules/setting/controllers/Tim.php */
