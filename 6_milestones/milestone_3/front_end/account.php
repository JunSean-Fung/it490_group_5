<?php
    session_start(); # Start session
    
    if( !isset( $_SESSION['username']) ) # if username is not found in database
    {
        #echo "You are not authorized to view this page. Go back <a href= '/'>home</a>";
        echo "This user is not found. Try again <a href= '/front_end/login.html'>Login</a>";
        
        exit();
    }
    # Calling other pages
    #require 'header.php' # call the bootstrap styling
    #require 'mainpage.html'
    
?>
<html>
    <body>
        <nav class="navbar navbar-expand-sm bg-light mb-4">
        <!-- Links -->
        <!--<ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>-->
        </nav>
        <h1>Welcome to the Projext main Page, <?php echo $_SESSION['username'] ?></h1>
    </body>
</html>