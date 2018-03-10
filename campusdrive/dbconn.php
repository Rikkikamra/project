<?php

    $servername = "localhost";
    $username = "rikeshdrive1";
    $password = "apsitdrive@2017";
    $database = "drive1";

    $conn =new mysqli($servername,$username,$password,$database);
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
?>
