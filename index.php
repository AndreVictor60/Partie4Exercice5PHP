<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Partie 4 Exercice 5</title>
  </head>
  <body>
    <?php
    $string = 'Ceci est une chaine';
    $int = 17;
    function concatStringAndInt($chaine,$number){
      $result = $chaine.' '.$number;
      return $result;
    }
    echo concatStringAndInt($string,$int);
     ?>
  </body>
</html>
