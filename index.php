<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_SERVER['REQUEST_URI'] == '/token') {

    error_log("code: {$_REQUEST['code']}")
    error_log("grant_type: {$_REQUEST['grant_type']}")
    error_log("client_id: {$_REQUEST['client_id']}")
    
    $response = [];
    $response["access_token"] = "accessxyz";
    $response["refresh_token"] = "refreshxyz";
    $response["expires_in"] = 900;
    $response["scope"] = "email";
    $response["token_type"] = "Bearer";
    header('Content-Type: application/json');
    echo json_encode($response);

} else if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_SERVER['REQUEST_URI'] == '/login') {

    $state = $_REQUEST['state'];
    $redirect = $_REQUEST['redirect_uri'];
    $code = 'authxyz';
    header("Location: {$redirect}?code={$code}&state={$state}");

} else if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_SERVER['REQUEST_URI'] == '/ppd') {
    include('ppd.php');
} else {
    include('login.php');
}
