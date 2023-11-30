<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();

    $email = $_POST["email"];
    $password = $_POST["password"];

    $servername= "localhost";
    $username_db= "root";
    $password_db= "Giovanni98+";
    $name_db="Persone";

    $conn= new mysqli($servername,$username_db,$password_db,$name_db);
    if($conn->connect_error){
        die("connection error: ".$conn->connect_error);
    }

    $query="SELECT *
            FROM utenti
            WHERE email = ? and password = ?";

    $stmt=$conn->prepare($query);
    $stmt->bind_param("ss",$email,$password);
    $stmt->execute();

    $result=$stmt->get_result();

    if ($result->num_rows > 0)
    {
        $row = $result->fetch_assoc();
        $_SESSION["username"] = $row["username"];
        $_SESSION["age"] = $row["age"];

        $stmt->close();
        $conn->close();

        sleep(1);
        header("Location: welcome.php");
        exit();
    }
    else{
        $_SESSION["message"]= "Login failed: Verifica le tue credenziali";

        $stmt->close();
        $conn->close();
        header("Location: outcome.php");
    }

}

?>