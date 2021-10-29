<?php
    $sql_host="192.168.1.205";
    $sql_username="test";
    $sql_password='123';
    $sql_database="simplycoding";
    
    function connect_db() {
        global $sql_host, $sql_username, $sql_password, $sql_database;
        
        $conn=new mysqli($sql_host,$sql_username,$sql_password);
        #$conn=new mysqli_connect($sql_host,$sql_username,$sql_password); # Seems to be faster 
        #$conn=new mysqli_connect($sql_host,$sql_username,$sql_password, $sql_database);
        #header('location: milestone_2_frontEnd.html'); //debug
        if(mysqli_connect_error() != null) {
            
            return false;
        }
        $conn -> select_db($sql_database);
        return $conn;
    }
    
    function connect_db_2() {
        
        global $sql_host, $sql_username, $sql_password, $sql_database;
        $conn=new mysqli_connect($sql_host,$sql_username,$sql_password, $sql_database);
        
        if(!$conn) {
            $msg = "could not conenct to database.<br/>";
            $msg .="Error Number: " . Mysqli_connect_errno();
            $msg .="Error: " . Mysqli_connect_error();
            return false;
        }
        return $conn;
    }
?>
