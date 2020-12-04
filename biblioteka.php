<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>
<div class=nav>
    <a href="pracownicy.php">Pracownicy</a>
    <a href="organizacja.php">Pracownicy i Organizacja</a>
    <a href="funkcje.php">Funkcje Agregujące</a>
    <a href="dataczas.php">Data i Czas</a>
    <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Jojko-Patryk">Github</a>
    <a href="formularz.html">Zakładka testowa</a>
    <a href="daneDoBazy.php">Dane Do Bazy</a>
    <a href="biblioteka.php">Książki</a>
    <a href="wypożycz.php">Wypożyczalnia</a>
    


</div>
<?php

require("connect2.php");
$sql1 = ('SELECT * FROM bibliotekaAutor');
echo("<h2>Autorzy</h2>");
echo("<h3>".$sql1."</h3>");

$sql2 = ('SELECT * FROM bibliotekaTytuł');
echo("<h2>Tytuły</h2>");
echo("<h3>".$sql2."</h3>");  
    
    $result = $conn->query($sql1);
    echo("<form action='wypozyczenia.php'>");   
    echo("<select name='Autor' id='id_autor'>"); 
    while($row=$result->fetch_assoc()){
        echo("<option value=".$row['id_autor'].">".$row["Autor"]."</option>");
    }

        echo("</select>");
  



    $result = $conn->query($sql2);
        echo("<select name='Tytuł' id='id_tytuł'>"); 
    while($row=$result->fetch_assoc()){
        echo("<option value=".$row['id_tytuł'].">".$row["Tytuł"]."</option>");
    }

        echo("</select>");
        echo("<input type='Submit' value='SEND'><br>");
echo("</form >");
require("connect2.php");
$sql = ('SELECT * FROM `bibliotekaAT`, `bibliotekaAutor`, `bibliotekaTytuł` WHERE id_autor = bibliotekaAutor_ID AND id_tytuł = bibliotekaTytul_ID');
echo("<h2>Dane w Bibliotece</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>Autor</th>");
        echo("<th>Tytuł</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
            echo("<td>".$row["id"]."</td><td>".$row["Autor"]."</td><td>".$row["Tytuł"]);
        echo("</tr>");
    

    }

    echo("</table>");


    echo("<h2>Wypożyczanie Książek</h2>");

    require("connect2.php");
$sql = ('SELECT * FROM bibliotekaAutor');
    $result = $conn->query($sql);
        echo("<select name='Autor' id='id_autor' action=`wypożycz.php` method='POST'>"); 
    while($row=$result->fetch_assoc()){
        echo("<option value=".$row['id_autor'].">".$row["Autor"]."</option>");
    }
        echo("</select>");
require("connect2.php");
$sql = ('SELECT * FROM bibliotekaTytuł');
    $result = $conn->query($sql);
        echo("<select name='Tytuł' id='id_tytuł' action=`wypożycz.php` method='POST'>"); 
    while($row=$result->fetch_assoc()){
        echo("<option value=".$row['id_tytuł'].">".$row["Tytuł"]."</option>");
    }
        echo("</select>");
        echo("<input type='Submit' value='Wypożycz'><br>");
        

    

    


?>

</body>
</html>
