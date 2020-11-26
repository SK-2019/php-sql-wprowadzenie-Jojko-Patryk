<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>DDB</title>
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
    <a href="delete.html">Delete(wip)</a>


</div>

    <form action="insert.php" method="post">
        <input type="text" name="imie" placeholder="Imię"></br>
        <input type="number" name="dzial" placeholder="Dział"></br>
        <input type="number" name="zarobki" placeholder="Zarobki"></br>
        <input type="date" name="data_urodzenia" placeholder="Data Urodzenia"></br>
        <input type="submit" value="Dodaj">
    </form>

    <form action="delete.php" method="post">
        <input type="number" name="id" placeholder="ID pracownika"></br>
     

        <input type="submit" value="Usun">
    </form>  
    
<?php

require("connect.php");
    $sql = ('SELECT * FROM "pracownicy", "organizacja" WHERE dzial = id_org');
    echo("<h2>Pracownicy</h2>");
    echo("<h3>".$sql."</h3>");
        $result = $conn->query($sql);
            echo("<table border=1>");
            echo("<th>Imie</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_Urodzenia</th>");
            echo("<th>Dział</th>");
            echo("<th>Nazwa_Działu</th>");
        while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>");

            echo("</tr>");
        }

        echo("</table>");


?>


</body>
</html>