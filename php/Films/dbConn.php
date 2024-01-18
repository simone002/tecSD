<?php

    $servername="localhost";
    $username="root";
    $password="Giovanni98+";
    $name_db="Films";

    $conn=new mysqli($servername,$username, $password, $name_db);
    if ($conn->connect_error) {
        die("error on connection". $conn->connect_error);
    }
?>