<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Patryk Jojko</title>
    <link rel="stylesheet" href="/constyle/style.css" />
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

echo("<h2> ID pracownika wybranego do usunięcia:".$_POST["id"]."</h2>"); 

require('../connect/connect.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "DELETE FROM pracownicy where id_pracownicy='".$_POST['id']."'";

echo "<h2>".$sql."</h2>";

if ($conn->query($sql) === TRUE) {
    echo "Record Deleted Successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();


    $sql = ('SELECT * FROM pracownicy');
    echo("<h2>Pracownicy</h2>");
    echo("<h3>".$sql."</h3>");
        $result = $conn->query($sql);
            echo("<table border=1>");
            echo("<th>ID</th>");
            echo("<th>Imie</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_Urodzenia</th>");
            echo("<th>Dział</th>");
            while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["dzial"]."</td>");


                




            echo("</tr>");
        }

        echo("</table>");








?>
</div>
</body>
</html>