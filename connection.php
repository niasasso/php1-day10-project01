<?php

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'php1_day10';

    // CREATE CONNECTION
    $connect = new mysqli($servername, $username, $password, $database);

    // CHECK CONNENTION
    if($connect->connect_error){
        // echo "ERROR!";
        die("connection filed:" . $connect->connect_error);
    } else {
        echo "TRA ERROR!";
    }
?>