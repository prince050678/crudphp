<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Database connection error!". $conn->connect_error);
        }
    else{
        echo "Conntected successfully!";
    }
    ?>