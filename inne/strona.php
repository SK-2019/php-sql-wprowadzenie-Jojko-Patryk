<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <link rel="stylesheet" href="/constyle/style2.css">
    <title>Patryk Jojko</title>
</head>
<body>

<div class="container">
      <div class="item colorRed">
        
      <?php include("../assets/menured.php") ?>
      </div>
      <div class="item colorBlue">
      <?php include("../assets/menu.php") ?>
      </div>
      <div class="item colorGreen">


<?php

echo("<h2> Imie:".$_POST["imie"]."</h2>");
echo("<h2> Nazwisko:".$_POST["nazwisko"]."</h2>");
echo("<h2> Nr.Tel:".$_POST["tel"]."</h2>");
echo("<h2> Kod Pocztowy:".$_POST["post"]."</h2>");
echo("<h2> Miasto:".$_POST["city"]."</h2>");



?>
    
</body>
</html>