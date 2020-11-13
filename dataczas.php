<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patryk Jojko</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class=nav>
    <a href="pracownicy.php">Pracownicy</a>
    <a href="organizacja.php">Pracownicy i Organizacja</a>
    <a href="funkcje.php">Funkcje Agrygujące</a>
    <a href="dataczas.php">Data i Czas</a>
    <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Jojko-Patryk">Github</a>


</div>
    
<?php

require("connect.php");
$sql = ('SELECT *, YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy');
echo("<h2>Wiek poszczególnych pracowników (w latach)</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Wiek</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["wiek"]."</td>");
                echo("<tr>");
                
            }
            echo("</table>");

require("connect.php");
$sql = ('SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND dzial=1');
echo("<h2>Wiek poszczególnych pracowników (w latach) z działu serwis</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Data Urodzenia</th>");
        echo("<th>Wiek<th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["wiek"]."</td><td>".$row["nazwa_dzial"]);
                echo("<tr>");
                
            }
            echo("</table>");

require("connect.php");
$sql = ('SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as suma_lat FROM pracownicy');
echo("<h2>Suma lat wszystkich pracowników</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Suma Lat</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["suma_lat"]."</td>");
                echo("<tr>");
                
            }
            echo("</table>");
require("connect.php");
$sql = ("SELECT SUM(YEAR(curdate())-YEAR(data_urodzenia)) as sh, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND dzial=2");
echo("<h2>Suma lat pracowników z działu handel</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Suma Lat</th>");
        echo("<th>Dział</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["sh"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("<tr>");
                            
                }
                echo("</table>");


require("connect.php");
$sql = ("SELECT SUM(year(curdate())-year(data_urodzenia)) as sl FROM pracownicy WHERE imie like '%a'");
echo("<h2>Suma lat kobiet</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Suma Lat</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["sl"]."</td>");
                echo("<tr>");
                
            }
            echo("</table>");

require("connect.php");
$sql = ("SELECT SUM(year(curdate())-year(data_urodzenia)) as sm FROM pracownicy WHERE imie not like '%a'");
echo("<h2>Suma lat mężczyzn</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Suma Lat</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["sm"]."</td>");
                echo("<tr>");
                
            }
            echo("</table>");

require("connect.php");
$sql = ('SELECT AVG(YEAR(curdate())-YEAR(data_urodzenia)) as ava, nazwa_dzial FROM pracownicy, organizacja WHERE id_org=dzial group by dzial');
echo("<h2>Średnia lat pracowników w poszczególnych działach</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Średni Wiek</th>");
        echo("<th>dział</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["ava"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("<tr>");
                
            }
        echo("</table>");







?>

</body>
</html>