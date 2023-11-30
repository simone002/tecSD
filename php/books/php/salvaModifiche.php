<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    session_start();
    
    $id = $_POST['id'];
    $isbn = $_POST['isbn'];
    $titolo = $_POST['titolo'];
    $autore = $_POST['autore'];
    $prezzo = $_POST['prezzo'];

    $servername = "localhost";
    $username_db = "root";
    $password_db = "Giovanni98+";
    $name_db = "Books";

    $conn = new mysqli($servername, $username_db, $password_db, $name_db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "UPDATE books SET isbn=?, titolo=?, autore=?, prezzo=? WHERE id=?";
    $stmt = $conn->prepare($query);

    if (!$stmt) {
        die("Errore nel preparare la query: " . $conn->error);
    }

    $stmt->bind_param("ssssi", $isbn, $titolo, $autore, $prezzo, $id);
    $stmt->execute();

    $_SESSION["message"] = "libro modificato correttamente";
            

    $stmt->close();
    $conn->close();
} else {
    $_SESSION["message"] = "libro non modificato correttamente";
}
    header("Location:  outcome.php");
        exit;
?>
