<?php

    $CIAO ="ciao";
    Echo "<h2>" .$CIAO. "</h2> "; // need . when use tag

    $game=true;
    if($game){ Echo "false<br>";}

    $A=array("beddo","ciao","ciao");

    Echo $A[0].$A[1]."<br>";

    Echo str_word_count($A[0]);

    define("BABBO","SCEMO"); // primo nome costante secondo par quello che contiene
    echo BABBO;

    echo "<br> <br>";

    for($i=0;$i<count($A);$i++){
        Echo $A[$i]." ";
    }

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); //array associativo

    foreach($age as $persona => $età) {
        echo "Key=" . $persona . ", Value=" . $età;
        echo "<br>";
      }

      $cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
      );


      for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
          echo "<li>".$cars[$row][$col]."</li>";
        }
        echo "</ul>";
      }




?>