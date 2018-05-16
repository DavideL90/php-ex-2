<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/EsPhp/php-ex-2/passStyle.css">
    <title></title>
  </head>
  <body>

    <?php
      $password = $_GET['password'];

      if($password == 'Boolean'){
    ?>

      <span id="greenColor">Password corretta</span>

    <?php
      }
      else{
    ?>

      <span id="redColor">Password incorretta</span>

    <?php } ?>

  </body>
</html>
