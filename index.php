<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Patryk Jojko</title>
    <link rel="stylesheet" href="/constyle/style.css"/>
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
      <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Jojko-Patryk">
            <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>
            Github
            <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>
          </a>
          <a href="/pracorgfunc/pracownicy.php">
            <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>
            Pracownicy
            <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>


          </a>
          <a href="/pracorgfunc/organizacja.php">
            <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>
            Pracownicy i Organizacja
            <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>


          </a>
          <a href="/pracorgfunc/funkcje.php">
            <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>
            Funkcje Agregujące
            <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>


          </a>
          <a href="/pracorgfunc/dataczas.php">
            <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>
            Data i Czas
            <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>


          </a>
          <a href="/inne/daneDoBazy.php">
            <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>
            Dane Do Bazy
            <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>


          </a>
          <a href="/biblioteka/biblioteka.php">
            <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>
            Książki
            <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>


          

          </a>
      </div>
      <div class="item colorGreen">

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/connect.php');
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