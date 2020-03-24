<?php

$assistant_id = '4b46be48-5aca-411f-ab3d-a800f4f62891';
$baseURL = "https://api.eu-de.assistant.watson.cloud.ibm.com/instances/80b729fa-6067-4885-9f02-ad6fecba0e1a/v2/assistants/$assistant_id";

// API-Key gibts nur auf Anfrage!
$api_key = "";
$sessionUrl = $baseURL."/sessions?version=2020-02-05";


$curl = curl_init($auth_aal);
$config = array(
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_USERPWD => "apikey:".$api_key,
  CURLOPT_URL => $sessionUrl,
  CURLOPT_POST => true,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
);

curl_setopt_array($curl, $config);
$response = trim(curl_exec($curl));

// $responseArray = json_decode($response);
// $session_id = $responseArray["session_id"];

echo $response;
