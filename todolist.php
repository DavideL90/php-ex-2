<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/EsPhp/php-ex-2/todostyle.css">
    <title></title>
  </head>
  <body>
    <?php
      $arrayList = [
        ['message' => 'comprare il latte', 'completed' => true],
        ['message' => 'andare dal dottore', 'completed' => false],
        ['message' => 'dare da mangiare al gatto', 'completed' => false],
        ['message' => 'chiamare pinco panco', 'completed' => true]
      ];
    ?>
    <ul>
      <?php
        foreach ($arrayList as $arrayElement) {
        if($arrayElement['completed'] == true){
      ?>

      <li class="active"><?php echo $arrayElement['message']; ?></li>

      <?php
        }
        else{
      ?>
      <li class="disabled"><?php echo $arrayElement['message'];?></li>
      <?php } ?>
      <?php } ?>
    </ul>
  </body>
</html>
