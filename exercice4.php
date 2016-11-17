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

        $mois[7] = "août";
        echo $mois[7];



       ?>
    </p>


  </body>
</html>
