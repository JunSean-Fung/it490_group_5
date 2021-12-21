<?php
session_start();
require('RabbitMQClient.php');

if(isset($_POST['submitButton'])){
    try{
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username != "" && $password != "" ){
            $rabbitResponse = login($username, $password);
            if($rabbitResponse == false){
                echo "login has failed, please try again";
                //redirect back to login page to try again
            }else{
                echo "You are logged in!";
                $userSes = json_decode($rabbitResponse, true);
                $_SESSION['logged'] = true;
                $_SESSION['user'] = $userSes;
                echo var_export($_SESSION['user']['name']);
                header("location: dashboard.php");
            }
        }
        else{
            echo "username and password is empty";
        }
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
}