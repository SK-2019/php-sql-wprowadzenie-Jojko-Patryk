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
    echo("<th>$id_x</th>");
    echo("<th>$nazwa</th>");
    
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row[$id_x]."</td><td>".$row[$data]."</td>");
        echo("</tr>");
    }
    echo("</table>");
    }



$sql = "SELECT * FROM Producent";
echo("<h3>Producent</h3>");
echo("<li>".$sql);
table($sql, $conn, "ID_Prod", "Producent", 'Producent');

$sql = "SELECT * FROM Przedmiot";
echo("<h3>Item</h3>");
echo("<li>".$sql);
table($sql, $conn, "ID_Item", "Przedmiot", 'Przedmiot');


$sql = 'SELECT * FROM Producent, Przedmiot, CBoth where IDP = ID_Prod and IDI = ID_Item Order by id asc';
echo("<h3>Both</h3>");
echo("<li>".$sql);
table($sql, $conn, "Producent", "Przedmiot", 'Przedmiot');


?>

</body>
</html>