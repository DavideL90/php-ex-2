<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/EsPhp/php-ex-2/todostyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title></title>
  </head>
  <body>
    <?php
      $arrayList = [
        ['message' => 'comprare il latte', 'completed' => true],
        ['message' => 'andare dal dottore', 'completed' => false],
        ['message' => 'dare da mangiare al gatto', 'completed' => false],
        ['message' => 'chiamare pinco panco', 'completed' => true],
        ['message' => 'guardare the good place', 'completed' => false],
        ['message' => 'rapinare una banca', 'completed' => false]
      ];
    ?>
    <ul>
      <?php
        foreach ($arrayList as $arrayElement) {
        if($arrayElement['completed'] == false){
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
    <script src="/EsPhp/php-ex-2/main.js" charset="utf-8"></script>
  </body>
</html>
