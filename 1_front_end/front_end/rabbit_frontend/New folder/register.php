<?php
require('RabbitMQClient.php');
if(isset($_POST['submitButton'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirmPassword'];
    if($password != $confirm)
    {
        echo "Passwords dont match";
        exit();
    }

    if ($username != "" && $password != ""){
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $rabbitResponse = registerMessage($username, $hash);

        if($rabbitResponse==false){
            echo "account already created";

        }else{

            echo "Account is created";
            header("Location: login.php");

        }
    }else{
        echo "Nothing entered";
    }

}