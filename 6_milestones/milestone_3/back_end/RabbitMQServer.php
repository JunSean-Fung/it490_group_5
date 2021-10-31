<?php

require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

const DB_SERVER = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = 'administratorpassword';
const DB_DATABASE = 'test';

$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

function login($user, $pass, $db)
{
    $response = array();
    try {
        $stmt = $db->prepare("SELECT username, password from `Users` where username = :user LIMIT 1");
        $params = array(":user" => $user);
        $stmt->execute($params);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            $userpassword = $result['password'];
            if (password_verify($pass, $userpassword)) {
                $response["cookie"] = uniqid();
                return True;
            }
        } else {
            return false;
        }

    } catch (Exception $e) {
        echo $e->getMessage();
        $client = new rabbitMQClient("rabbit.ini", "test");
        $request = array();
        $request['type'] = "Error";
        $request['message'] = strval($e->getMessage());
        //$response = $client->send_request($request);
        $response = $client->publish($request);

        echo "sent error" . PHP_EOL;
        exit("Could not login");
    }

    function register($username, $email, $password, $db)
    {

        $response = array();
        try {
            $stmt = $db->prepare("SELECT email from `Users` where email = :email ");
            $params = array(":email" => $email);
            $stmt->execute($params);
            $result = $stmt->fetchAll();

            if ($result[0]["email"] != NULL) {
                $response["success"] = FALSE;
                $response["msg"] = "Email already exists";
                exit();
            } else {
                $response["cookie"] = uniqid();
                $stmt = $db->prepare("INSERT INTO `Users` (username, email, password) VALUES (:username, :email, :password)");
                $params = array(":username" => $username, ":email" => $email, ":password" => $password);
                $stmt->execute($params);
                $response["success"] = true;
                return $response;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            $client = new rabbitMQClient("rabbit.ini", "test");
            $request = array();
            $request['type'] = "Error";
            $request['message'] = strval($e->getMessage());
            $response = $client->publish($request);
            echo "sent error" . PHP_EOL;
            exit("Could not create account");
        }

        function request_processor($request, $db)
        {
            echo "Received Request" . PHP_EOL;
            echo "<pre>" . var_dump($request) . "</pre>";
            if (!isset($request['type'])) {
                return "Error: unsupported message type";
            }
            //Handle message type
            $type = $request['type'];
            switch ($type) {
                case "login":
                    return login($request['username'], $request['password'], $db);
                case "register":
                    return register($request['session_id']);
            }
            return array("return_code" => '0',
                "message" => "Server received request and processed it");
        }

        $server = new rabbitMQServer("rabbit.ini", "test");


    }

}
$server = new rabbitMQServer("rabbit.ini", "test");

echo "Rabbit MQ Server Start" . PHP_EOL;
$server->process_requests('request_processor');
echo "Rabbit MQ Server Stop" . PHP_EOL;
exit();
?>
