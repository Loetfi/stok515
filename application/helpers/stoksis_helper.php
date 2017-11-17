<?php 

function isLogin()
{
	$ci =& get_instance();
	$session = @$ci->session->userdata('userdata');
	if (isset($session['email'])) {

		// echo "oke";
		// redirect('dashboard','refresh');
		if ($ci->uri->segment(1) === strtolower('dashboard')) {
		 	// return true;
		 	// exit();
		 } else {

			$ci->session->set_flashdata('message', "<script type='text/javascript'> swal('Hai " .$session['firstname']. "', 'Kamu masih login', 'info'); </script>"); 

			redirect('dashboard','refresh');
		 	
		 }

	} else {

		if ($ci->uri->segment(2) || $ci->uri->segment(1) === strtolower('login')) {
		 	// return false;

		 	// exit();
		} else { 
			
			$ci->session->set_flashdata('message', "<script type='text/javascript'> swal('Hai Pengguna', 'Silahkan lakukan login', 'error'); </script>"); 
			
			redirect('auth/login','refresh');
			
		} 

		

		// redirect('auth/login','refresh');
		// exit(); 
	}
}


function ngeCurl($url, $dataArray = "", $method='GET' ){
	$ci =& get_instance();
	
	// $dataPost = http_build_query($dataArray);

	
	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_PORT => "",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_HTTPHEADER => array(
			"content-type: application/json"
		), 
		
		CURLOPT_URL => $url,
		CURLOPT_POSTFIELDS => $dataArray ,
		CURLOPT_CUSTOMREQUEST => $method,
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);
	
	// return array(
	// 	'response' => $response,
	// 	'err' => $err,
	// );

	return $response;
}


function linkservice($services)
{ 
	$STOKSIS = ('STOKSIS' == strtoupper($services)) ? $return = 'http://stoksis-api.azurewebsites.net/' : ''; 

	return $return;
}


function responAPI($data)
{ 
	 header('Content-Type: application/json');
	 return $data;
}

?>
