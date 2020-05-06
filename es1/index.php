<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>es1</title>
  </head>
  <body>

 <!-- passare come argomenti in GET nome e cognome; e salutare l'interlocutore -->

    <?php

    $name = $_GET["name"];
    $cognome = $_GET["cognome"];

    echo "Ciao" . " ". $name . " " . $cognome;

    ?>

  </body>
</html>
