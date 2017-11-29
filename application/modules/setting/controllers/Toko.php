<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		checkLogin();
	}

	public function view()
	{
		$data['title'] = 'Atur Toko';
		$template = 'setting/toko';
		template($template , $data);	
	}


	public function index()
	{

		// $path = 'http://localhost:8888/Projekan/stok/assets/img/user.jpg';
		// $type = pathinfo($path, PATHINFO_EXTENSION);
		// $data = file_get_contents($path);
		// $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

		// echo $base64 =  base64_encode($base64);
		// echo '<img src="https://stoksisdev.blob.core.windows.net/store/ce174692-fb12-4ff2-a16a-42f0caa93f71">'; 
		// exit(); 
		$sesi = $this->session->userdata('userdata');
		// print_r( $this->session->all_userdata() );
		// exit();
		@$parameter;
		$url = linkservice('store').'api/storebyuser?userId='.@$sesi['id'];//linkservice('stoksis') ."api/accounts/login/";
		$method = 'GET';
		$responseApi = ngeCurl($url, '', $method);
		$res = json_decode($responseApi,true);

		// 	"######################################################################";

		$data['res'] 		= $res;

		$data['title'] 		= 'Atur Toko';
		$template = 'setting/toko';

		template($template , $data);		 


	}

	public function delete()
	{
		if (isset($_GET['id'])) {

			$userdata  = $this->session->userdata('userdata');
			$jwt = $userdata['token']; 
			$parameter = array(
				'StoreId' => @$this->input->get('id'),
				'ModBy' => @$userdata['id'],
				'ModDate' => date('Y-m-d H:i:s')
			);

			$url = linkservice('store') ."api/store";
			$method = 'DELETE';
			$responseApi = ngeCurl($url, json_encode($parameter), $method , $jwt);
			$res = json_decode($responseApi,true);

			if ($res['status']==200) {
				
				$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Yeay !', '" . $res['message'] . "', 'success'); </script>");

				redirect('setting/toko','refresh');

			} else {
				$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Uuuh !', '" . $res['message'] . "', 'error'); </script>");

				redirect('setting/toko','refresh');
			} 
		} else {
			// echo "gagal delete";
			$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Uuuh !', 'Terjadi kesalahan, silahkan coba lagi.', 'error'); </script>");
				// echo $res['message'];
			redirect('setting/toko','refresh');
		}
	}

	public function add()
	{
		// if (isset($_POST)) {

		// print_r(expression)




		// $data = array('upload_data' => $this->upload->data());

		// 	$path = base_url('uploads/shop-icon_343684.png');
		// 	// $path = 'http://localhost:8888/Projekan/stok/assets/img/user.jpg';
		// 	$type = pathinfo($path, PATHINFO_EXTENSION);
		// 	$data = file_get_contents($path);
		// 	echo $encode =  base64_encode($data);
		// 	echo "<br><br><br><br>";
		// 	// exit();
		// 	// $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

		// 	// echo $base64 =  base64_encode($base64); 

		// 	// exit();







		// $decode = base64_decode($encode);






		// echo "<img src'".$decode."'>";
		// exit();



		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload()){

			echo "&nbsp;";
			$error = array('error' => $this->upload->display_errors());

		}
		else {
			$data = array('upload_data' => $this->upload->data());

			$path = base_url('uploads/'.$data['upload_data']['file_name']);
			$type = pathinfo($path, PATHINFO_EXTENSION);
			$data = file_get_contents($path);
			// $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

			$base64 =  base64_encode($data); 

			$namatoko = @$_POST['namatoko'];
			$alamat = @$_POST['alamat'];
			$lat = @$_POST['lat'];
			$long = @$_POST['long'];
			###########
			$userdata  = $this->session->userdata('userdata');
			$jwt = $userdata['token']; 
			$parameter = array(
				'StoreName' => "$namatoko",
				'StoreAddress' => "$alamat",
				'Latitude' => "$lat",
				'Longitude' => "$long",
				'Photo' => "$base64",
				'AddBy' => "$userdata[id]",
				'AddDate' => date('Y-m-d H:i:s'),
				'StoreInfoAdd' => [array(
					"StoreInfoType" => "string",
					"StoreInfoSocialId" => "string",
					"Email" => "$userdata[email]",
					"AddBy" => "$userdata[id]",
					'AddDate' => date('Y-m-d H:i:s'),
				)]
			);

			$url = linkservice('store') ."api/store/";
			$method = 'POST';
			$responseApi = ngeCurl($url, json_encode($parameter), $method , $jwt);
			$res = json_decode($responseApi,true);

			print_r($responseApi);
			exit();
			// print_r($res);
			// echo json_encode($parameter);
			// exit();
			if ($res['status']==200 or $res == '') {
				
				$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Yeay !', '" . $res['message'] . "', 'success'); </script>");

				redirect('setting/toko','refresh');

			} else {
				$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Uuuh !', '" . $res['message'] . "', 'error'); </script>");

				redirect('setting/toko','refresh');
			}  
		}
				// exit();
		// } else {

		$data['title'] = 'Atur Toko';
		$template = 'setting/tambahtoko';

		template($template , $data);		
		// }


	}


	public function edit($storeId = '')
	{
		// echo "<pre>";	
		$userdata  = $this->session->userdata('userdata');
		$jwt = $userdata['token']; 
		$url = linkservice('store') ."api/storebyid?storeId=".$storeId;
		$method = 'GET';
		$responseApi = ngeCurl($url, '', $method , $jwt);
		$res = json_decode($responseApi,true);

		/*
		(
            [0] => Array
                (
                    [StoreAccess] => Array
                        (
                        )

                    [StoreInfo] => Array
                        (
                            [0] => Array
                                (
                                    [StoreInfoId] => ae2dfe11-3508-4dd1-9752-3eadeedd53c9
                                    [StoreId] => 19c96550-2455-4736-8f5c-dc30e3bc0e69
                                    [StoreInfoType] => string
                                    [StoreInfoSocialId] => string
                                    [Email] => pevita@gmail.com
                                    [AddBy] => 70
                                    [AddDate] => 2017-11-26T05:29:33
                                    [ModBy] => 
                                    [ModDate] => 
                                    [Deleted] => 
                                )

                        )

                    [StoreId] => 19c96550-2455-4736-8f5c-dc30e3bc0e69
                    [StoreName] => Pevocake
                    [StoreAddress] => Bandung
                    [Latitude] => -6.208991631564475
                    [Longitude] => 106.9661979668308
                    [Photo] => https://stoksisdev.blob.core.windows.net/store/5263f98c-c24e-4403-8501-8b768ff242d1
                    [AddBy] => 70
                    [AddDate] => 2017-11-26T05:29:33
                    [ModBy] => 
                    [ModDate] => 
                    [Deleted] => 
                )

        )
        */


		// print_r($res);
		// exit();
		// http://stoksis-store-services.azurewebsites.net/api/storebyid?storeId=2222
		$data['title'] = 'Atur Toko';
		$template = 'setting/edittoko';

		template($template , $data);		
	}



}

/* End of file Toko.php */
/* Location: ./application/modules/setting/controllers/Toko.php */
