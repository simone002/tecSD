
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();

    $username = $_POST["username"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $servername= "localhost";
    $username_db= "root";
    $password_db= "Giovanni98+";
    $name_db="Persone";

    $conn=new mysqli($servername,$username_db,$password_db,$name_db);

    if($conn->connect_error){
        die("connection failed: " . $conn->connect_error);
    }

    $query = "INSERT INTO utenti (nomeUtente, email, password, eta) 
              VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $username, $email, $password, $age);
    $stmt->execute();
    

    if ($stmt->affected_rows > 0) 
        $_SESSION["message"] = "Account registrato correttamente";
    else 
        $_SESSION["message"] = "Registrazione account non riuscita. Verifica le tue credenziali";

    $stmt->close();
    $conn->close();
}
?>
