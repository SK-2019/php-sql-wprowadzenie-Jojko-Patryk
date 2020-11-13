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
$sql = ('SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org');
echo("<h2>".$sql."</h2>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Nazwa_Działu</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }
    echo("</table>");
require("connect.php");
$sql = ('SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND (dzial=1 or dzial=4)');
echo("<h2>".$sql."</h2>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Nazwa_Działu</th>");
        while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }
    echo("</table>");

require("connect.php");
$sql = ('SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND imie like "%a"');
echo("<h2>".$sql."</h2>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Nazwa_Działu</th>");
        while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }
    echo("</table>");
    
require("connect.php");
$sql = ('SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND imie not like "%a"');
echo("<h2>".$sql."</h2>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Nazwa_Działu</th>");
        while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }
    echo("</table>");

require("connect.php");
$sql = ('SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org order by imie desc');
echo("<h2>".$sql."</h2>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Nazwa_Działu</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         } 
    echo("</table>");

require("connect.php");
$sql = ('SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND dzial=3 order by imie asc');
echo("<h2>".$sql."</h2>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Nazwa_Działu</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");      
require("connect.php");
$sql = ('SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND imie like "%a" order by imie asc');
echo("<h2>".$sql."</h2>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Nazwa_Działu</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }
        
    echo("</table>");
require("connect.php");
$sql = ('SELECT imie, zarobki, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND (dzial=1 or dzial=3) AND imie like "%a" order by zarobki asc');
echo("<h2>".$sql."</h2>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Zarobki</th>");
    echo("<th>Nazwa_Działu</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }

    echo("</table>");
require("connect.php");
$sql = ('SELECT imie, zarobki, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and imie not like "%a" order by dzial asc, zarobki asc ');
echo("<h2>".$sql."</h2>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Imie</th>");
    echo("<th>Nazwa_Działu</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }
         echo("</table>");




    
    

?>
    
</body>
</html>