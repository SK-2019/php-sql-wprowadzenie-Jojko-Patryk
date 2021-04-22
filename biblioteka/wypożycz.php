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
        
      <?php include("../assets/header.php") ?>
      </div>
      <div class="item colorBlue">
      <?php include("../assets/menu.php") ?>
      </div>
      <div class="item colorGreen">
<?php


echo("<h2> ID Autora:".$_POST["Autor"]."</h2>");
require('../connect/connect2.php');

$sql = ("SELECT * FROM `bibliotekaAT`, `bibliotekaAutor`, `bibliotekaTytuł` where bibliotekaAutor_ID=id_autor and bibliotekaTytul_ID=id_tytuł and bibliotekaAutor_ID='".$_POST['Autor']."'");

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
?>
<a href="/biblioteka/biblioteka.php">
            <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>
            Powrót do strony z wyborem autora
            <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-Jojko-Patryk/main/notouchplz.png"/>
    </div>
  </body>
</html>