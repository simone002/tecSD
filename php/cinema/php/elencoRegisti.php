
<?php
if($_SERVER["REQUEST_METHOD"]== "POST"){

    session_start();

    $nomeRegista= $_POST["regista"];

    $servername="localhost";
    $username="root";
    $password="Giovanni98+";
    $name_db="Cinema";

    $conn=new mysqli($servername,$username,$password,$name_db);

    if($conn->connect_error){
        die("connection failed: ".$conn->connect_error);
    }

    $query= "select DISTINCT regista from Films where regista=?";

    $stmt=$conn->prepare($query);

    if (!$stmt) {
        die("Errore nella preparazione della query: " . $conn->error);
    }

    $stmt->bind_param("s",$nomeRegista);

    $stmt->execute();
    $stmt->bind_result($result);

    // Elabora i risultati
    while ($stmt->fetch()) {
        echo "Regista: " . $result . "<br>";
    }

    $stmt->close();
    $conn->close();


}



?>