<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Tekst</title>
</head>
<body>

<div class=nav>
    <a href="pracownicy.php">Pracownicy</a>
    <a href="organizacja.php">Pracownicy i Organizacja</a>
    <a href="funkcje.php">Funkcje Agrygujące</a>
    <a href="dataczas.php">Data i Czas</a>
    <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Jojko-Patryk">Github</a>
    <a href="formularz.html">Zakładka testowa</a>


</div>



<?php

echo("<h2> Imie:".$_POST["imie"]."</h2>");
echo("<h2> Dział:".$_POST["dzial"]."</h2>");
echo("<h2> Zarobki:".$_POST["zarobki"]."</h2>");
echo("<h2> Data Urodzenia:".$_POST["data_urodzenia"]."</h2>");

require("connect.php");
$sql = sprintf("INSERT INTO pracownicy('imie', 'dzial', 'zarobki', 'data_urodzenia') VALUES(%s,%s,%s,%s)", $_POST['imie'], $_POST['dzial'], $_POST['zarobki'], $_POST['data_urodzenia']);



?>
    
</body>
</html>