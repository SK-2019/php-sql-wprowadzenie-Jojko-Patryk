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
$sql = "SELECT * FROM C.Producent";
echo("<h3>Pracownicy</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>id_autor</th>");
echo("<th>nazwisko</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID_Prod']."</td><td>".$row['Producent']."</td>");
    echo("</tr>");
}
echo("</table>");

$sql = "SELECT * FROM C.Przedmiot";
echo("<h3>Tytuły</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>id_tytul</th>");
echo("<th>tytul</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID_Item']."</td><td>".$row['Przedmiot']."</td>");
    echo("</tr>");
}
echo("</table>");

$sql = 'SELECT * FROM C.Producent, C.Przedmiot, C.Both where ID.P = ID_Prod and ID.I = ID_Item Order by id asc';
echo("<h3>Autorzy i Tytuły</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>id</th>");
echo("<th>autor_id</th>");
echo("<th>autor</th>");
echo("<th>tytul_id</th>");
echo("<th>tytul</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['id']."</td><td>".$row['ID.P']."</td><td>".$row['Producent']."</td><td>".$row['ID.I']."</td><td>".$row['Przedmiot']."</td>");
    echo("</tr>");
}
echo("</table>");

?>

</body>
</html>