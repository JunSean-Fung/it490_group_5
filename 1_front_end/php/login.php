<?php
    /* Purpose: 
        (1) Allow user to login an account
        (2) Allow user to sign up an account

        Note:
        1) [Path]: Since this is in the php folder, path is this: ../folderName/fileName.fileType

        Task:
        1) Refine the responsiveness with bootstrap
        2) Additional interactions such as: go back to the main page, reset password? , 
    */
    # Get header file
    require '../php/head.php'; # Needs to be "../php/head.php"
    session_start();
    #require '../php/RabbitMQClient.php';

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
                    header("location: ../html/mainpage_logged.html"); 
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
        <link rel="stylesheet" href="../css/loginNReg.css"/>
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
                            <a href="../php/register.php">Dont have an account? Click here to register one!</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>