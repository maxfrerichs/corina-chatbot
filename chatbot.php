<?php

$input = $_POST["message"];
$session_id = $_POST["session_id"];
$assistant_id = '4b46be48-5aca-411f-ab3d-a800f4f62891';

$baseURL = "https://api.eu-de.assistant.watson.cloud.ibm.com/instances/80b729fa-6067-4885-9f02-ad6fecba0e1a/v2/assistants/$assistant_id";
$api_key = "d-Pd1HsNUFruREq-PhyDgNeYlERExUbR69KukVkMz1lZ";
$requestURL = $baseURL."/sessions/$session_id/message?version=2020-02-05";

$payload = json_encode(array(
  "input" => [
    "message_type" => "text",
    "text" => $input,
    "options" => [
      "alternate_intents" => false,
      "debug" => true
    ]
  ],
));

$config = array(
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_USERPWD => "apikey:".$api_key,
  CURLOPT_POST => true,
  CURLOPT_URL => $requestURL,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
  CURLOPT_POSTFIELDS => $payload
);

$curl = curl_init();
curl_setopt_array($curl, $config);
$response = trim(curl_exec($curl));

echo $response;