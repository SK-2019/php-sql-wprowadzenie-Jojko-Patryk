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
$sql = "SELECT * FROM Klasa";
echo("<h3>Pracownicy</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>ID_Klasa</th>");
echo("<th>Klasa</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID_Klasa']."</td><td>".$row['Klasa']."</td>");
    echo("</tr>");
}
echo("</table>");

$sql = "SELECT * FROM Nauczyciel";
echo("<h3>Tytuły</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>ID_Nau</th>");
echo("<th>Nauczyciel</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID_Nau']."</td><td>".$row['Nauczyciel']."</td>");
    echo("</tr>");
}
echo("</table>");

$sql = 'SELECT * FROM Nauczyciel, Klasa, Both where ID.N = ID_Nau and ID.K = ID_Klasa Order by id asc';
echo("<h3>Autorzy i Tytuły</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>id</th>");
echo("<th>ID.K</th>");
echo("<th>Klasa</th>");
echo("<th>ID.N</th>");
echo("<th>Nauczyciel</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['id']."</td><td>".$row['IDK']."</td><td>".$row['Klasa']."</td><td>".$row['IDN']."</td><td>".$row['Nauczyciel']."</td>");
    echo("</tr>");
}
echo("</table>");

?>

</body>
</html>