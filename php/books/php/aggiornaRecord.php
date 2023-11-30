<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
//isset serve per vedere se una variabile è nulla

    session_start();
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
        ?>
        <form action='salvaModifiche.php' method='post'>
            <input type='hidden' name='id' value='<?php echo $id; ?>'>

            <label for='isbn'>ISBN:</label>
            <input type='text' id='isbn' name='isbn' value='<?php echo $isbn; ?>' required>

            <label for='titolo'>Titolo:</label>
            <input type='text' id='titolo' name='titolo' value='<?php echo $titolo; ?>' required>

            <label for='autore'>Autore:</label>
            <input type='text' id='autore' name='autore' value='<?php echo $autore; ?>' required>

            <label for='prezzo'>Prezzo:</label>
            <input type='text' id='prezzo' name='prezzo' value='<?php echo $prezzo; ?>' required>

            <button type='submit'>Salva Modifiche</button>
        </form>
        <?php
    } else {
        echo "Libro non trovato.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Parametri non validi.";
}
?>
