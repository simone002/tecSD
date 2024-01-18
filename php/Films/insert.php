<?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        require "dbConn.php";
        $titolo=$_POST["titolo"];
        $anno=$_POST["anno"];
        $paese=$_POST["paese"];
        $regista=$_POST["regista"];

        $query="INSERT INTO film(titolo,anno,paese,regista) values(?,?,?,?)";

        $stmt=$conn->prepare($query);
        $stmt->bind_param("ssss", $titolo, $anno, $paese, $regista);

        $stmt->execute();

        echo "inserimento effettuato";

        $stmt->close();
        $conn->close();

    }
?>

<a href="index.php">torna indietro</a>