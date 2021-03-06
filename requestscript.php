<?php
/*     error_reporting(E_ALL);
    ini_set("display_errors", 1); */

    $assistant_id = 'f9a32bd3-0cce-441c-af2a-94bdddd1f469';
    $baseUrl = "https://api.eu-de.assistant.watson.cloud.ibm.com/instances/80b729fa-6067-4885-9f02-ad6fecba0e1a/v2/assistants/$assistant_id";
    $sessionId = $_POST['session_id'] != null ? $POST['session_id'] : null;
    $requestUrl = $baseUrl."/sessions/$sessionId/message?version=2020-02-05";
    $sessionUrl = $baseUrl."/sessions?version=2020-02-05";
    header('Content-type: application/json');
    
    if($sessionId != null && !empty($sessionId)) {
        $config = array(
            CURLOPT_URL => $requestUrl,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $_POST
        );
        echo makeRequest($config);
    } else {
        $params = $_POST;
        $params['session_id'] = getsessionId()['session_id'];
        $config = array(
            CURLOPT_URL => $requestUrl,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $params
        );
        echo makeRequest($config);
    }
    
    function makeRequest($config) {
        $api_key = 'd-Pd1HsNUFruREq-PhyDgNeYlERExUbR69KukVkMz1lZ';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, "apikey:" . $api_key);
        curl_setopt_array($ch, $config);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }


    function getsessionId() {
        $assistant_id = 'f9a32bd3-0cce-441c-af2a-94bdddd1f469';
        $baseUrl = "https://api.eu-de.assistant.watson.cloud.ibm.com/instances/80b729fa-6067-4885-9f02-ad6fecba0e1a/v2/assistants/$assistant_id";
        $sessionUrl = $baseUrl."/sessions?version=2020-02-05";
        $config = array(
            CURLOPT_URL => $sessionUrl,
            CURLOPT_POST => true
        );
        return makeRequest($config);
    }
?>