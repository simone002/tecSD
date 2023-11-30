<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        session_start();

        $isbn=$_POST["isbn"];
        $titolo=$_POST["titolo"];
        $autore=$_POST["autore"];
        $prezzo=$_POST["prezzo"];

        $servername = "localhost";
        $username_db = "root";
        $password_db = "Giovanni98+";
        $name_db = "Books";

        $conn = new mysqli($servername, $username_db, $password_db, $name_db);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $query = "INSERT INTO books(isbn,titolo,autore,prezzo) values(?,?,?,?)";

        $stmt = $conn->prepare($query);

        $stmt->bind_param("ssss",$isbn,$titolo,$autore,$prezzo);
        $stmt->execute();

        if ($stmt->affected_rows > 0) 
            $_SESSION["message"] = "libro registrato correttamente";
        else 
            $_SESSION["message"] = "errore nella registrazione del libro";


        $stmt->close();
        $conn->close();

        header("Location:  outcome.php");
        exit;
    }
?>
