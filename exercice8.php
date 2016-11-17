<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Untitled</title>
  </head>
  <body>

    <p>
      <?php

      $mois = array('janvier','février', 'mars', 'avril','mai', 'juin','juillet','aout','septembre','octobre','novembre','décembre');

      foreach ($mois as $moisenquestion) {
        echo $moisenquestion . "<br>";
      }

      ?>
    </p>


  </body>
</html>
