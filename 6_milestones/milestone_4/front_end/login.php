<?php
#require '../back_end/header.php';

session_start();
require('RabbitMQClient.php');

if (isset($_POST['submitButton'])) {
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
                header("location: dashboard.php");
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
        <title>Project X: Login</title>
        <link rel="stylesheet" href="../front_end/css/loginNReg.css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <form method="POST" action="../back_end/backend.php" class="box">
                            <h1>Login</h1>
                            <p class="text-muted"> Please enter your login and password!</p> 
                            <!--Input Field-->
                            <input type="text" name="username" placeholder="Username">
                            <input type="password" name="password" placeholder="Password"> 
                            <!--Login Button-->
                            <input type="submit" value="Login" name="login">

                            <a class="forgot text-muted" href="#">Forgot password?</a>
                            <br>
                            <a href="register.php">Dont have an account? Click here to register one!</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>