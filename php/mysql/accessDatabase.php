<?php
$hostname = "localhost";
$username = "root";
$password = "Giovanni98+";
$name_db="Albergo";

// Create connection

$conn = new mysqli($hostname, $username, $password,$name_db);
    if ($conn->connect_error) 
        die("Connessione fallita: " . $conn->connect_error);
echo "connected successfully";

$conn->close();
?> 
