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
    <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Jojko-Patryk">Github</a>
    |
    <a href="pracownicy.php">Pracownicy</a>
    <a href="organizacja.php">Pracownicy i Organizacja</a>
    <a href="funkcje.php">Funkcje Agregujące</a>
    <a href="dataczas.php">Data i Czas</a>
    <a href="formularz.html">Zakładka testowa</a>
    <a href="daneDoBazy.php">Dane Do Bazy</a>
    <a href="biblioteka.php">Książki</a>
    


</div>



<?php

echo("<h2> Imie:".$_POST["imie"]."</h2>");
echo("<h2> Nazwisko:".$_POST["nazwisko"]."</h2>");
echo("<h2> Nr.Tel:".$_POST["tel"]."</h2>");
echo("<h2> Kod Pocztowy:".$_POST["post"]."</h2>");
echo("<h2> Miasto:".$_POST["city"]."</h2>");



?>
    
</body>
</html>