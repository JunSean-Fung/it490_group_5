<?php
#require '../projectX/php/head.php';

session_start();
#require('../projectX/php/RabbitMQClient.php');

if (isset($_POST['login'])) {
    try {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username != "" && $password != "") {
            $rabbitResponse = login($username, $password);
            if ($rabbitResponse == false) {
                echo "login has failed, please try again";
                //redirect back to login page to try again
            } else {
                echo "You are logged in!";
                $userSes            = json_decode($rabbitResponse, true);
                $_SESSION['logged'] = true;
                $_SESSION['user']   = $userSes;
                echo var_export($_SESSION['user']['name']);
                header("location: ../projectX/html/mainpage_logged.html");
            }
        } else {
            echo "username and password is empty";
        }
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="IT490 project">
        <meta name="author" content="Group 5">    
        <!-- Bootstrap 5 from getbootstrap.com -->
        <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">

        <title>Project X: Login</title>
        <link rel="stylesheet" href="../projectX/css/loginNReg.css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <form method="POST" action="#" class="box">
                            <h1>Login</h1>
                            <p class="text-muted"> Please enter your login and password!</p> 
                            <!--Input Field-->
                            <input type="text" name="username" placeholder="Username">
                            <input type="password" name="password" placeholder="Password"> 
                            <!--Login Button-->
                            <input type="submit" value="Login" name="login">

                            <a class="forgot text-muted" href="#">Forgot password?</a>
                            <br>
                            <a href="../projectX/php/register.php">Dont have an account? Click here to register one!</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>