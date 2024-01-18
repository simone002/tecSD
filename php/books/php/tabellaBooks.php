<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        session_start();

        $servername = "localhost";
        $username_db = "root";
        $password_db = "Giovanni98+";
        $name_db = "Books";

        $conn = new mysqli($servername, $username_db, $password_db, $name_db);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $query = "SELECT * FROM books";

        $stmt = $conn->prepare($query);

        if (!$stmt) {
            die("Errore nel preparare la query: " . $conn->error);
        }

        $stmt->execute();

        $stmt->bind_result($id, $isbn, $titolo, $autore, $prezzo);

        //stampo le varie colonne con un ciclo
        while ($stmt->fetch()) {
            echo "ID: " . $id . "<br>";
            echo "ISBN: <a href='aggiornaRecord.php?id=" . $id . "'>" . $isbn . "</a><br>"; // rendo isbn un link con il tag <a>
            echo "Titolo: " . $titolo . "<br>";
            echo "Autore: " . $autore . "<br>";
            echo "Prezzo: " . $prezzo . "<br>";
        
            // Aggiungo il link per l'eliminazione
            echo "<a href='eliminaRecord.php?id=" . $id . "'>Elimina</a><br>";
        
            echo "-------------------------<br>";
        }
        

        $stmt->close();
        $conn->close();
    }
?>
