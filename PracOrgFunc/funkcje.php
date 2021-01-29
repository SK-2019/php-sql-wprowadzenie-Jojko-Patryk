<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Patryk Jojko</title>
    <link rel="stylesheet" href="/ConStyle/style.css" />
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
          <a href="/PracOrgFunc/pracownicy.php">
            <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>
            Pracownicy
            <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>


          </a>
          <a href="/PracOrgFunc/organizacja.php">
            <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>
            Pracownicy i Organizacja
            <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>


          </a>
          <a href="/PracOrgFunc/funkcje.php">
            <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>
            Funkcje Agregujące
            <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>


          </a>
          <a href="/PracOrgFunc/dataczas.php">
            <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>
            Data i Czas
            <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>


          </a>
          <a href="/Inne/daneDoBazy.php">
            <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>
            Dane Do Bazy
            <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>


          </a>
          <a href="/Biblioteka/biblioteka.php">
            <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>
            Książki
            <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>


          

          </a>
      </div>
      <div class="item colorGreen">

<?php

require($_SERVER['DOCUMENT_ROOT'] . '/connect.php');
$sql = ('SELECT SUM(zarobki) as suma_zarobki FROM pracownicy');
echo("<h2>Suma zarobków wszystkich pracowników</h2>");
echo("<h3>".$sql."</h3>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Suma_Zarobków</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["suma_zarobki"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");


$sql = ('SELECT SUM(zarobki) as suma_zarobki FROM pracownicy WHERE imie like "%a"');
echo("<h2>Suma zarobków wszystkich kobiet</h2>");
echo("<h3>".$sql."</h3>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Suma_Zarobków</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["suma_zarobki"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");


$sql = ('SELECT SUM(zarobki) as suma_zarobki FROM pracownicy WHERE (dzial=2 or dzial=3) AND imie not like "%a"');
echo("<h2>Suma zarobków mężczyzn pracujących w dziale 2 i 3</h2>");
echo("<h3>".$sql."</h3>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Suma_Zarobków</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["suma_zarobki"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");


$sql = ('SELECT AVG(zarobki) as avg_zarobki FROM pracownicy where imie not like "%a"');
echo("<h2>Średnia zarobków wszystkich mężczyzn</h2>");
echo("<h3>".$sql."</h3>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>AVG_Zarobków</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["avg_zarobki"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");


$sql = ('SELECT AVG(zarobki) as avg_zarobki FROM pracownicy WHERE (dzial=4)');
echo("<h2>Średnia zarobków pracowników z działu 4</h2>");
echo("<h3>".$sql."</h3>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>AVG_Zarobków</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["avg_zarobki"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");


$sql = ('SELECT AVG(zarobki) as avg_zarobki FROM pracownicy WHERE (dzial=1 or dzial=2) AND imie not like "%a"');
echo("<h2>Średnia zarobków mężczyzn z działu 1 i 2</h2>");
echo("<h3>".$sql."</h3>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>AVG_Zarobków</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["avg_zarobki"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");


$sql = ('SELECT COUNT(imie) as liczba_pracownikow FROM pracownicy ');
echo("<h2>Ilu jest wszystkich pracowników</h2>");
echo("<h3>".$sql."</h3>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Liczba_Pracowników</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["liczba_pracownikow"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");


$sql = ('SELECT COUNT(imie) as liczba_pracownikow FROM pracownicy WHERE (dzial=1 or dzial=3) and imie like "%a"');
echo("<h2>Ile kobiet pracuje łącznie w działach 1 i 3</h2>");
echo("<h3>".$sql."</h3>");
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
</div>
</body>
</html>