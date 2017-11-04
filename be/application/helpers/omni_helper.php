<?php 

defined('BASEPATH') OR exit('No direct script access allowed'); 

// meload omni facebook untuk keperluan access token



function google()
{
  $CI =& get_instance();
  $CI->load->library('googleplus'); 
  return $CI->googleplus->loginURL();
}



function linkedin()
{
    return site_url('omni/linkedin/linkedin/');
}


function facebook()
{
	$ci =& get_instance();
	require_once  APPPATH.'../omni/facebook/php-sdk-v4/src/Facebook/autoload.php';
	$appid      = '179532339289827';
	$app_secret = '73d6d164a7e2f8c4bed0ca97a63c4e86'; 
	$fb = new Facebook\Facebook([
          'app_id'                => $appid, // Replace {app-id} with your app id
          'app_secret'            => $app_secret,
          'default_graph_version' => 'v2.2',
          ]);

	$helper = $fb->getRedirectLoginHelper();

    $permissions = ['email']; // Optional permissions
  
    $loginUrl = $helper->getLoginUrl('http://stok.awanesia.com/5T0k515/be/index.php/omni/facebook/callback/index', $permissions);

      // print_r(expression)
    return htmlspecialchars($loginUrl); 
  } 


  ?>
