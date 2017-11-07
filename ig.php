<?php 
require 'vendor/autoload.php';
$code  = $_GET["code"] ? $_GET["code"] : null;
$client = new \GuzzleHttp\Client(['verify' => false]);
 
try {
    $res = $client->request("POST", "https://api.instagram.com/oauth/access_token", [
        'form_params' => [
            'client_id' => '850e5e114a0b4f6a8e409a57af9e1f6c',
            'client_secret' => 'fc16fa9194544a038cd2f74ec1c62e91',
            'grant_type' => 'authorization_code',
            'redirect_uri' => 'http://localhost:8888/Projekan/stok/ig.php', //isi dengan url project anda
            'code' => $code
        ]
    ]);
} catch (ClientException $e) {
    customException([
        "status" => $this::ERROR_LOGIN_INSTAGRAM,
        "messages" => $e->getMessage(),
    ]);
}

/** @var ResponseInterface $res */
$resultArray = json_decode($res->getBody()->getContents());

$userInstagram = $resultArray;
var_dump($userInstagram);
