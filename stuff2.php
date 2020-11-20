<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Życie To Żenada</title>
</head>
<body>

<div>

</div>

<?php

echo("<h2> Imie:".$_POST["imie"]."</h2>");
echo("<h2> Dział:".$_POST["dzial"]."</h2>");
echo("<h2> Zarobki:".$_POST["zarobki"]."</h2>");
echo("<h2> Data Urodzenia:".$_POST["data_urodzenia"]."</h2>");

require("connect.php");
$sql = sprintf("INSERT INTO pracownicy('imie', 'dzial', 'zarobki', 'data_urodzenia') VALUES(%s,%s,%s,%s)", $_POST['imie'], $_POST['dzial'], $_POST['zarobki'], $_POST['data_urodzenia']);

$box = ('SELECT imie, zarobki, data_urodzenia, dzial FROM pracownicy');
    echo("<h2>Pracownicy</h2>");
    echo("<h3>".$box."</h3>");
        $result = $conn->query($box);
            echo("<table border=1>");
            echo("<th>Imie</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_Urodzenia</th>");
            echo("<th>Dział</th>");
        while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["dzial"]."</td>");

            echo("</tr>");


?>
    
</body>
</html>