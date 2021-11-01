<?php
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');


$db = new PDO('mysql:host = localhost; dbname = test', "root", "administratorpassword");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function login($username, $password){
    global $db;

    $stmt = $db->prepare('SELECT id, username, password FROM Users WHERE username = :username LIMIT 1');
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $results = $stmt->fetch(PDO::FETCH_ASSOC);

    if($results){
        $userpass = $results['password'];
        if(password_verify($password, $userpass)){ //comparing plaintext and hash
            $stmt->bindParam(':username', $username);
            $stmt->execute();
            if($results && count($results) > 0){
                $userSes = array("name"=> $results['username'], "id"=> $results['id']);
                return json_encode($userSes);
            }
            return true;
            echo "Logged in (Console)";
        }
        else{
            return false;
            echo "invalid password";
        }
    }
}

function register($username, $hash){
    global $db;

    //checking if username exists already
    $usncheck = $db->prepare('SELECT * FROM Users where username = :username');
    $usncheck->bindParam(':username', $username);
    $usncheck->execute();
    $results = $usncheck->fetch(PDO::FETCH_ASSOC);
    if($results && count($results) > 0){
        echo "Username already exists";
        return false;
    }
    //check passed, inserts user
    $quest = 'INSERT INTO Users (username, password) VALUES (:username, :password)';
    $stmt = $db->prepare($quest);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $hash);
    $stmt->execute();
}

function request_processor($req){
    echo "Received Request".PHP_EOL;
    echo "<pre>" . var_dump($req) . "</pre>";
    if(!isset($req['type'])){
        return "Error: unsupported message type";
    }
    //Handle message type
    $type = $req['type']; //takes message array and puts it into req[]
    echo "\n\n";
    echo $type;
    switch($type){
        case "login":
            return loginMessage($req['username'], $req['password']);
        case "register":
            return registerMessage($req['username'], $req['hash']);
    }

    return array("return_code" => '0',
        "message" => "Server received request and processed it");
}

$server = new rabbitMQServer("rabbit.ini", "test");

echo "Rabbit MQ Server Start" . PHP_EOL;
$server->process_requests('request_processor');
echo "Rabbit MQ Server Stop" . PHP_EOL;
exit();
?>
