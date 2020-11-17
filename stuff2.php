<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<?php

echo("<li><h2> Imie:".$_POST["Fname"]."</li></h2>");
echo("<li> Nazwisko:".$_POST["Lname"]."</li>");
echo("<li> Nr.Tel:".$_POST["Phone"]."</li>");
echo("<li> Miasto:".$_POST["City"]."</li>");

?>
    
</body>
</html>