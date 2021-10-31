<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

$username = $_POST['username'];
$password = $_POST['password'];
$password = password_hash($password, PASSWORD_BCRYPT);
$email = $_POST['email'];

$client = new rabbitMQClient("rabbit.ini","test");

$request = array();

$request['type'] = "register";
$request['username'] = strtolower($username);
$request['password'] = $password;
$request['email'] = $email;
$response = $client->send_request($request);

if($response == true){
    session_start();
    $_SESSION['username'] = $username;
    header("location:home.php");
}

else{
    echo("Incorrect username or password");
    header("location:login.html");
}
?>