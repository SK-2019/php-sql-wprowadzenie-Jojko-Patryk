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
require('../connect/connect3.php');
$sql = "SELECT * FROM Producent";
echo("<h3>Producent</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>ID_Prod</th>");
echo("<th>Producent</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID_Prod']."</td><td>".$row['Producent']."</td>");
    echo("</tr>");
}
echo("</table>");

$sql = "SELECT * FROM Przedmiot";
echo("<h3>Item</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>ID_Item</th>");
echo("<th>Przedmiot</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID_Item']."</td><td>".$row['Przedmiot']."</td>");
    echo("</tr>");
}
echo("</table>");

$sql = 'SELECT * FROM Producent, Przedmiot, CBoth where ID.P = ID_Prod and ID.I = ID_Item Order by id asc';
echo("<h3>Both</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>id</th>");
echo("<th>ID.P</th>");
echo("<th>Producent</th>");
echo("<th>ID.I</th>");
echo("<th>Przedmiot</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['id']."</td><td>".$row['ID.P']."</td><td>".$row['Producent']."</td><td>".$row['ID.I']."</td><td>".$row['Przedmiot']."</td>");
    echo("</tr>");
}
echo("</table>");

?>

</body>
</html>