<?php
    #require '../back_end/header.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Project X: Login</title>
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