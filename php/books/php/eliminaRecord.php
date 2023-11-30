<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    
    $id = $_GET['id'];

    $servername = "localhost";
    $username_db = "root";
    $password_db = "Giovanni98+";
    $name_db = "Books";

    $conn = new mysqli($servername, $username_db, $password_db, $name_db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT * FROM books WHERE id = ?";
    $stmt = $conn->prepare($query);

    if (!$stmt) {
        die("Errore nel preparare la query: " . $conn->error);
    }

    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($id, $isbn, $titolo, $autore, $prezzo);

    if ($stmt->fetch()) {
        echo "Sei sicuro di voler eliminare il seguente libro?<br>";
        echo "ID: " . $id . "<br>";
        echo "ISBN: " . $isbn . "<br>";
        echo "Titolo: " . $titolo . "<br>";
        echo "Autore: " . $autore . "<br>";
        echo "Prezzo: " . $prezzo . "<br>";

        // Form di conferma eliminazione
        echo "<form action='confermaEliminazione.php' method='post'>";
        echo "<input type='hidden' name='id' value='" . $id . "'>";
        echo "<button type='submit'>Conferma Eliminazione</button>";
        echo "</form>";
    } else {
        echo "Libro non trovato.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Parametri non validi.";
}
?>
