<?php 

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
