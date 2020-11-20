<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>

<div>

</div>

<?php

include("connect.php");
echo("<h2> Imie:".$_POST["imie"]."</h2>");
echo("<h2> Dział:".$_POST["dzial"]."</h2>");
echo("<h2> Zarobki:".$_POST["zarobki"]."</h2>");
echo("<h2> Data Urodzenia:".$_POST["data_urodzenia"]."</h2>");



require("connect.php");
$sql="INSERT INTO 'pracownicy'('id', 'imie', 'dzial', 'zarobki', 'data_urodzenia') VALUES(null, $_POST['imie'], $_POST['dzial'], $_POST['zarobki'], $_POST['data_urodzenia']";
        

$conn->query($sql);
echo "<h2>".$sql;
if ($conn->query($sql) === TRUE) {
    echo "New Record Created Successfully"
    } else {
    echo "Error: ".$sql."<br>".$conn->error;    
    }

$conn->close();

?>
    
</body>
</html>