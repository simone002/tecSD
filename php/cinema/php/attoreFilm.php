<?php
if($_SERVER["REQUEST_METHOD"]== "POST"){

    session_start();

    $nomeAttore= $_POST["attore"];

    $servername="localhost";
    $username="root";
    $password="Giovanni98+";
    $name_db="Cinema";

    $conn=new mysqli($servername,$username,$password,$name_db);

    if($conn->connect_error){
        die("connection failed: ".$conn->connect_error);
    }

    $query= "select nomeFilm from Films where attore=?";

    $stmt=$conn->prepare($query);

    if (!$stmt) {
        die("Errore nella preparazione della query: " . $conn->error);
    }

    $stmt->bind_param("s",$nomeAttore);

    $stmt->execute();
    $stmt->bind_result($result);

    // Elabora i risultati
    while ($stmt->fetch()) {
        echo "nome Film: " . $result . "<br>";
    }

    $stmt->close();
    $conn->close();


}
?>