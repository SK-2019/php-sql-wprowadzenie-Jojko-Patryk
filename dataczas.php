<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

require("connect.php");
echo("<h2>Wiek poszczególnych pracowników</h2>");
    $result = $conn->query('SELECT *, YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy');
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Data Urodzenia>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["wiek"]."</td>");
                echo("<tr>");
                
            }
            echo("</table>");

require("connect.php");
echo("<h2>Wiek poszczególnych pracowników</h2>");
    $result = $conn->query('SELECT *, dzial, YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy WHERE dzial = id_org AND dzial=1');
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Data Urodzenia>");
        echo("<th>Nazwa Działu<th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["wiek"]."</td><td>".$row["nazwa_dzial"]);
                echo("<tr>");
                
            }
            echo("</table>");





?>

</body>
</html>