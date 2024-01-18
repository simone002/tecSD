<?php

    if($_SERVER["REQUEST_METHOD"]=="GET"){

        require "dbConn.php";

        $query="select * from film";

        $stmt=$conn->prepare($query);
        $stmt->execute();
        $stmt->bind_result($id,$title,$anno,$paese,$regista);

        echo "<h1> lista films</h1>";
        while($stmt->fetch()){

            echo "<p> title: <a href='describe.php?id=".$id."'>".$title."</a></p>";
            echo "------------------------------<br>";
        }

        $stmt->close();
        $conn->close();
    }

?>

<br>
inserisci film
<form action="insert.php" method="POST">
    titolo: <input name="titolo" type="text" required>
    anno:  <input type="text" name="anno" required>
    paese: <input type="text" name="paese" required>
    regista: <input type="text" name="regista" required>
    <button> inserisci </button>
</form>