<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>
<?php


echo("<h2> Imie:".$_POST["imie"]."</h2>");
echo("<h2> Dział:".$_POST["dzial"]."</h2>");
echo("<h2> Zarobki:".$_POST["zarobki"]."</h2>");
echo("<h2> Data Urodzenia:".$_POST["data_urodzenia"]."</h2>");

require("connect.php");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
$sql = sprintf("INSERT INTO pracownicy('imie', 'dzial', 'zarobki', 'data_urodzenia') VALUES(%s,%s,%s,%s)", $_POST['imie'], $_POST['dzial'], $_POST['zarobki'], $_POST['data_urodzenia']);

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
  
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

?>
</body>
</html>