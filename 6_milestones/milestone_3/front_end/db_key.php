<?php
    $sql_host="25.79.46.137";
    $sql_username="root";
    $sql_password='fall2021';
    $sql_database="simplycoding";
    
    function connect_db() {
        global $sql_host, $sql_username, $sql_password, $sql_database;
        $conn=new mysqli($sql_host,$sql_username,$sql_password);
        if(mysqli_connect_error() !== null) {
            return false;
        }
        $conn -> select_db($sql_database);
        return $conn;
    }
?>
