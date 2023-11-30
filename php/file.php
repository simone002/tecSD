<html>
    <body>
      <u>  Today is<u> <?php echo date("l"); ?> <!--tag tutti i tag di html funzionano  -->
    </body>
</html>

<?php

  //$ciao="SEI";

 // echo "hello". $ciao. "babbo"; // . è la concatenazione

 $x = 5; // global scope NON È VISIBILE DALLO SCOPE DELLA FUNZIONE

 define("BABBO","CIAO");

function myTest($x) {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
  echo "<p> la costante".BABBO."è visibile";
} 
  myTest($x);




?>