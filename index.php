<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

    require("connect.php");
    echo("<h2>Zadanie 1: SELECT imie, zarobki, data_urodzenia,nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org'</h2>");
    $result = $conn->query('SELECT imie, zarobki, data_urodzenia,nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org');
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
    require("connect.php");
    echo("<h2>Zadanie 2: SELECT * FROM pracownicy where imie like %a</h2>");  
    $result = $conn->query('SELECT imie, zarobki, data_urodzenia,nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and imie like "%a"'); 
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>");  

                echo("</tr>");
            }

        echo("</table>");
    require("connect.php");
    echo("<h2>Zadanie 3: SELECT * FROM pracownicy where (dzial=1 or dzial=3)</h2>");  
    $result = $conn->query('SELECT imie, zarobki, data_urodzenia,nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and (dzial=1 or dzial=3)'); 
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
    require("connect.php");
    echo("<h2>Zadanie 4: SELECT * FROM pracownicy where dzial=2</h2>");  
    $result = $conn->query('SELECT imie, zarobki, data_urodzenia,nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and dzial = 2');
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
    require("connect.php");
    echo("<h2>Zadanie 5: SELECT * FROM pracownicy where zarobki>=40</h2>");  
    $result = $conn->query('SELECT imie, zarobki, data_urodzenia,nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and zarobki>=40'); 
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
?>
    
</body>
</html>




