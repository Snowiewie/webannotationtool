<?php

$_SESSION["host"] = "us-cdbr-east-06.cleardb.net"; //provide hostname
$_SESSION["user"] = "ba1fc85c5d5566"; //user name for your remote server
$_SESSION["password"] = "2b011857"; //password
$_SESSION["auth_type"] = "config"; // keep it as
$sname = "localhost";
$uname = "root";
$password = "";



$mysqli -> select_db ("heroku_dae2d78a90708c9");


        $conn = mysqli_connect($sname, $uname, $password, $db_name);
        // $conn = new mysqli($_SESSION["host"], $_SESSION["user"], $_SESSION["password"], $_SESSION["auth_type"]);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);

        // Test if connection succeeded
        if(mysqli_connect_errno()) {
            die("Database connection failed: " . 
                 mysqli_connect_error() . 
                 " (" . mysqli_connect_errno() . ")"
            );
        }
    }
?>
