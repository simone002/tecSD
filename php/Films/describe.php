<?php
    if($_SERVER["REQUEST_METHOD"]=="GET"){

        require "dbConn.php";
        $id=$_GET["id"];

        $query="select titolo, anno, paese, regista from film where id=?";

        $stmt=$conn->prepare($query);
        $stmt->bind_param("s",$id);

        $stmt->execute();
        $stmt->bind_result($titolo, $anno, $paese, $regista);
        if($stmt->fetch())
            echo "<p> titolo: ".$titolo.", anno: ".$anno.", paese: ".$paese.", regista: ".$regista;

        $stmt->close();
        $conn->close();
    }

?>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    titolo: <input type="text" name="titolo" value="<?php echo $titolo ?>">
    anno: <input type="text" name="anno" value="<?php echo $anno ?>">
    paese: <input type="text" name="paese" value="<?php echo $paese ?>">
    regista: <input type="text" name="regista" value="<?php echo $regista ?>">
    <button> aggiorna</button>
</form>
<form action="delete.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <button> ellimina</button>
</form>


<a href="index.php">torna indietro</a>