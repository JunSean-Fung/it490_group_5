<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

function register($username, $password){
    $client = new RabbitMQClient('rabbit.ini', 'it490Server');
    if(isset($argv[1])){
    }
    else{
        $msg = array("message"=>"Register", "type"=>"register", "username" => $username, "password" => $password ); //added hash. server listens for "register" now for registering

    }



    $response = $client->send_request($msg);

    //echo "client received response: " . PHP_EOL;
    return($response);
    //echo "\n\n";

    if(isset($argv[0]))
        echo $argv[0] . " END".PHP_EOL;
}

function login($username, $password){

    $client = new RabbitMQClient('rabbit.ini', 'it490Server');
    if(isset($argv[1])){
        $msg = $argv[1];
    }
    else{
        $msg = array("message"=>"Login", "type"=>"login", "username" => $username, "password" => $password);
        //server listens for "login" in processor function then points to login function
    }

    $response = $client->send_request($msg);

    //echo "client received response: " . PHP_EOL;
    return($response);
    //echo "\n\n";

    if(isset($argv[0]))
        echo $argv[0] . " END".PHP_EOL;
}