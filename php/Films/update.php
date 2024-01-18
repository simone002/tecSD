<?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        require "dbConn.php";
        $id=$_POST["id"];
        $titolo=$_POST["titolo"];
        $anno=$_POST["anno"];
        $paese=$_POST["paese"];
        $regista=$_POST["regista"];

        $query="UPDATE film SET titolo=?, anno=?, paese=?, regista=? where id=?";

        $stmt=$conn->prepare($query);
        $stmt->bind_param("ssssi", $titolo, $anno, $paese, $regista,$id);

        $stmt->execute();

        echo "aggiornamento effettuato";

        $stmt->close();
        $conn->close();

    }
?>

<a href="describe.php?id=<?php echo $id ?>">torna indietro</a>