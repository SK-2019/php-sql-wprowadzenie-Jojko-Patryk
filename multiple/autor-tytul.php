<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/constyle/style.css" />
    <title>Document</title>
</head>
<body>
<div class="container">
      <div class="item colorRed">
        
      <?php include("../assets/header.php") ?>
        </div>
        <div class="item colorBlue">
        <?php include("../assets/menu.php") ?>
        <?php include("../assets/relations.php") ?>
      </div>
      <div class="item colorGreen">
<?

ini_set('display_errors', '1');
          ini_set('display_startup_errors', '1');
          error_reporting(E_ALL);
require('../connect/connect3.php');

function table($sql, $conn, $id_x, $nazwa, $data ){




$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>$id_x/th>");
echo("<th>$nazwa</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['id_autor']."</td><td>".$row['nazwisko']."</td>");
    echo("</tr>");
}
echo("</table>");
}

$sql = "SELECT * FROM autor";
echo("<h2>Autorzy</h2>");
echo("<li>".$sql."</li>");
table($sql, $conn, "id_autor", "nazwisko", 'nazwisko');



?>

</body>
</html>