<form action="./php/Test.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br>            
            <label for="age">Età:</label>
            <input type="text" id="age" name="age" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <button type="submit" id="login">Register me</button>
        </form> 


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

    /*

    $sql="CREATE DATABASE myDB";
    */
    /*

    create table

    $sql="CREATE TABLE MyGuests (
    id Int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(30) NOT NULL,
    passw VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL)"
    età  INT;
    */

    /*
    controll connection query

    if($conn->query($sql)===True){
        echo "table created correctly";
    }else{
        echo "error creating database: ". $conn->error;
    }
    */

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