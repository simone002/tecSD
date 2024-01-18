<?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        require "dbConn.php";
        $id=$_POST["id"];

        $query="Delete from film where id=?";

        $stmt=$conn->prepare($query);
        $stmt->bind_param("i",$id);

        $stmt->execute();

        echo "elliminazione effettuata";

        $stmt->close();
        $conn->close();

    }
?>

<a href="index.php">torna indietro</a>