<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="passStyle.css">
    <title></title>
  </head>
  <body>

    <?php
      $password = $_GET['password'];

      if($password == 'Boolean'){
    ?>

      <span id="greenColor" style="color: green">Password corretta</span>

    <?php
      }
      else{
    ?>

      <span id="redColor" style="color: red">Password incorretta</span>

    <?php } ?>

  </body>
</html>
