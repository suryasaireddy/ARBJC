<?php

    $server = "localhost";
    $database = "abjc";
    $user = "root";
    $pass = "";

    $connect = new mysqli($server, $user, $pass, $database);
    if($connect->connect_error)
        die("connection with database has failed.". $connect->connect_error);


?>