<?php
    # 
    session_start(); # Start session
    
    if( !isset( $_SESSION['username']) ) # if username is not found in database
    {
        #echo "You are not authorized to view this page. Go back <a href= '/'>home</a>";
        echo "This user is not found. Try again <a href= '/front_end/login.html'>Login</a>";
        
        exit();
    }
    # Calling other pages
    #require 'header.php' # call the bootstrap styling
    header('location: mainpage_logged.html'); // Head to logged in main page
    #require 'mainpage.html'
    
?>