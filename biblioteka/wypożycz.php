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
require(($_SERVER['DOCUMENT_ROOT'] . '/connect.php');
$sql = ('SELECT * FROM `bibliotekaAT`, `bibliotekaAutor`, `bibliotekaTytuł` WHERE id_autor = '".$_POST['Autor']."' AND id_tytuł = bibliotekaTytul_ID');
echo("<h3>".$sql."</h4>");
echo("<h2> ID Autora:".$_POST["Autor"]."</h2>");
  $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>Autor</th>");
        echo("<th>Tytuł</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
            echo("<td>".$row["id"]."</td><td>".$row["Autor"]."</td><td>".$row["Tytuł"]);
        echo("</tr>");




?>
    </div>
  </body>
</html>