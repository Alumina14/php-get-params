<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>es2</title>
  </head>
  <body>

<!-- - passare come argomento in GET una mail e stampare un div che contenga OK se contiene un punto e una chiocciola; KO altrimenti -->


    <?php

    $mail = $_GET["mail"];

if (strpos($mail, ".") && strpos($mail,"@") !== false) {
    echo "Mail Valida";
} else {
    echo "Mail non valida";
}


     ?>

  </body>
</html>
