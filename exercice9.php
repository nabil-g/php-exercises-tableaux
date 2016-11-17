<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Untitled</title>
  </head>
  <body>

    <p>
      <?php

      $departements = array('02' => "Aisne" , '59' => "Nord", '60' => "Oise", '62' => "Pas-de-Calais", '80' => "Somme" );

      foreach ($departements as $num => $dep) {
        echo $num . " ". $dep . "<br>";
      }

      ?>
    </p>


  </body>
</html>
