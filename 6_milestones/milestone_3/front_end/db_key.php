<?php
    $sql_host="25.79.46.137";
    $sql_username="root";
    $sql_password='fall2021';
    $sql_database="simplycoding";

    function connect_db() {
        global $sql_host, $sql_username, $sql_password, $sql_database;
        $conn=new mysqli($sql_host,$sql_username,$sql_password);
        if(mysqli_connect_error() !== null) {
            $msg = "could not conenct to database.<br/>";
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
