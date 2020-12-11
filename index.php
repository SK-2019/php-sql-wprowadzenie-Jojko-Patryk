<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CzyToDziała.jpg</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="item colorRed">
        
        <h1 class="title">Patryk Jojko</h1>
      </div>
      <div class="item colorBlue">
          <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Jojko-Patryk">Github</a>
          <a href="pracownicy.php">Pracownicy</a>
          <a href="organizacja.php">Pracownicy i Organizacja</a>
          <a href="funkcje.php">Funkcje Agregujące</a>
          <a href="dataczas.php">Data i Czas</a>
          <a href="formularz.html">Zakładka testowa</a>
          <a href="daneDoBazy.php">Dane Do Bazy</a>
          <a href="biblioteka.php">Książki</a>
      </div>
      <div class="item colorGreen">

<?php

require("connect.php");
    $sql = ('SELECT * FROM pracownicy');
    echo("<h2>Pracownicy");
    echo("<h3>".$sql."</h3>");
        $result = $conn->query($sql);
            echo("<table border=1>");
            echo("<th>Imie</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_Urodzenia</th>");
            echo("<th>Dział</th>");
        while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["dzial"]."</td>");

            echo("</tr>");
        }

        echo("</table>");



?>
    </div>
  </body>
</html>