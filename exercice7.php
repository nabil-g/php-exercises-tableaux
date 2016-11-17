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

      $departements['51'] = "Marne";
      echo $departements['51'];

      ?>
    </p>


  </body>
</html>
