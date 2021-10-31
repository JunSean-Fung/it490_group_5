<?php
    session_start(); # Start session
    
    if( !isset( $_SESSION['username']) ) # if username is not found in database
    {
        #echo "You are not authorized to view this page. Go back <a href= '/'>home</a>";
        echo "This user is not found. Try again <a href= '/front_end/login.html'>Login</a>";
        
        exit();
    }
    # Calling other pages
    require 'header.php' # call the bootstrap styling
    #require 'mainpage.html'
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Project X: Login Successful</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <h1>Login Successful!</h1>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>