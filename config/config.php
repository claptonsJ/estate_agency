<?php


    //Host

    $host = 'localhost';

    //Database

    $dbname = 'ambassadorestateagency';

    //Username

    $user = 'root';

    //Password

    $pass = "";

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check connection
    // if ($conn) {
    //     echo "connected successfully";
    // } else {
    //     echo "connection failed";
    // }