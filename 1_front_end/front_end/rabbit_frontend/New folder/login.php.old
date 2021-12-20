<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');
use PhpAmqpLib\Connection\AMQPStreamConnection;

$username = $_POST['username'];
$password = $_POST['password'];
$password = password_hash($password, PASSWORD_BCRYPT);


$client = new rabbitMQClient("rabbit.ini","test");

$request = array();

$request['type'] = "login";
$request['username'] = strtolower($username);
$request['password'] = $password;
$response = $client->send_request($request);

if($response == true){
    session_start();
    $_SESSION['username'] = $username;
    header("location:home.php");
}

else{
    echo("incorrect username or password");
    header("location:login.html");
}
?>
?>