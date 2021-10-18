<?php

    require 'db_key.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css"/>
    <title>Project X</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <form method="post" action="login.php" class="box">
                        <h1>Login</h1>
                        <p class="text-muted"> Please enter your login and password!</p> 
                        <input type="text" name="" placeholder="Username">
                        <input type="password" name="" placeholder="Password"> 
                        <a class="forgot text-muted" href="#">Forgot password?</a>
                        <br>
                        <a href="register.html">Dont have a log in? Click here to register</a>
                        <input type="submit" name="" value="Login" href="#">
                        
                        <div class="col-md-12">
                            <ul class="social-network social-circle">
                                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" class="icoGoogle" title="Google +"><i class="fab fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>