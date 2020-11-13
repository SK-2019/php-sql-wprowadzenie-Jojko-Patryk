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
$sql = ('SELECT SUM(zarobki) as suma_zarobki FROM pracownicy');
echo("<h2>".$sql."</h2>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Suma_Zarobków</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["suma_zarobki"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");

require("connect.php");
$sql = ('SELECT SUM(zarobki) as suma_zarobki FROM pracownicy WHERE imie like "%a"');
echo("<h2>".$sql."</h2>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Suma_Zarobków</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["suma_zarobki"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");

require("connect.php");
$sql = ('SELECT SUM(zarobki) as suma_zarobki FROM pracownicy WHERE (dzial=2 or dzial=3) AND imie not like "%a"');
echo("<h2>".$sql."</h2>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Suma_Zarobków</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["suma_zarobki"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");

require("connect.php");
$sql = ('SELECT AVG(zarobki) as avg_zarobki FROM pracownicy where imie not like "%a"');
echo("<h2>".$sql."</h2>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>AVG_Zarobków</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["avg_zarobki"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");

require("connect.php");
$sql = ('SELECT AVG(zarobki) as avg_zarobki FROM pracownicy WHERE (dzial=4)');
echo("<h2>".$sql."/h2>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>AVG_Zarobków</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["avg_zarobki"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");


require("connect.php");
$sql = ('SELECT AVG(zarobki) as avg_zarobki FROM pracownicy WHERE (dzial=1 or dzial=2) AND imie not like "%a"');
echo("<h2>".$sql."</h2>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>AVG_Zarobków</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["avg_zarobki"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");

require("connect.php");
$sql = ('SELECT COUNT(imie) as liczba_pracownikow FROM pracownicy ')
echo("<h2>".$sql."</h2>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Liczba_Pracowników</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["liczba_pracownikow"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");

require("connect.php");
$sql = ('SELECT COUNT(imie) as liczba_pracownikow FROM pracownicy WHERE (dzial=1 or dzial=3) and imie like "%a"');
echo("<h2>".$sql."</h2>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Liczba_Pracowników</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["liczba_pracownikow"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");











?>
</body>
</html>