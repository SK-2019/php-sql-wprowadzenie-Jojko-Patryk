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
        
        <h1 class="title">
        <img class="nav_icons" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>  
        Patryk Jojko
        <img class="nav_icons" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>


        </h1>
      </div>
      <div class="item colorBlue">
        <?php include("menu.php") ?>
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