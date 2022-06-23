<?php

    $connect = new mysqli('localhost', 'root', '', 'php1_day10');

    if(!$connect->connect_error){
        echo "TRA ERROR!";
    } else {
        echo "ADA ERROR!";
    }

?>