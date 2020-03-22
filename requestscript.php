<?php
    $api_key = 'd-Pd1HsNUFruREq-PhyDgNeYlERExUbR69KukVkMz1lZ';
    $baseUrl = '';
    $requestUrl = $baseUrl.'';
    $sessionUrl = $baseUrl.'/v2/assistants/12345/sessions';
    $sessionId = $_POST['session_id'];
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
        $params['session_id'] = getsessionId($config);
        $config = array(
            CURLOPT_URL => $requestUrl,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $params
        );
        echo makeRequest($config);
    }
    
    function makeRequest($config) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, "apikey:" . $api_key);
        curl_setopt_array($ch, $config);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }


    function getsessionId() {
        $config = array(
            CURLOPT_URL => $sessionUrl,
            CURLOPT_POST => true
        );
        return makeRequest($config);
    }
?>