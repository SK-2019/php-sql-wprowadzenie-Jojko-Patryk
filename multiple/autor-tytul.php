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

function table($sql, $conn, $id_x, $nazwa, $data, $tablen ){




  $result = $conn->query($sql);
  echo("<table border=1>");
  echo("<th>$id_x</th>");
  echo("<th>$nazwa</th>");

  while($row=$result->fetch_assoc()){
      echo("<tr>");
      echo("<td>".$row[$id_x]."</td><td>".$row[$data]."</td><td>

      <form action='delete.php' method='POST'>
      <input type='number' name='wiersz' value='".$row[$id_x]."' hidden>
      <input type='text' name='tabela' value='".$tablen."' hidden>
      <input type='text' name='kolumna' value='".$id_x."' hidden>
      <input type='submit' value='Usuń'>
      </form>

      </td>");

      echo("</tr>");
  }
  echo("</table>");
  }

function table2($sql, $conn, $id_x, $nazwa, $nazwa2, $data, $data2, $tablen ){




  $result = $conn->query($sql);
  echo("<table border=1>");
  echo("<th>$id_x</th>");
  echo("<th>$nazwa</th>");
  echo("<th>$nazwa2</th>");
  
  while($row=$result->fetch_assoc()){
      echo("<tr>");
      echo("<td>".$row[$id_x]."</td><td>".$row[$data]."</td><td>".$row[$data2]."</td><td>

      <form action='delete.php' method='POST'>
      <input type='number' name='wiersz' value='".$row[$id_x]."' hidden>
      <input type='text' name='tabela' value='".$tablen."' hidden>
      <input type='text' name='kolumna' value='".$id_x."' hidden>
      <input type='submit' value='Usuń'>
      </form>

      </td>");

      echo("</tr>");
  }
  echo("</table>");
  }

$sql = "SELECT * FROM autor";
echo("<h2>Autorzy</h2>");
echo("<li>".$sql."</li>");
table($sql, $conn, "id_autor", "nazwisko", 'nazwisko', "autor");

$sql = "SELECT * FROM tytul";
echo("<h2>Tytuły</h2>");
echo("<li>".$sql."</li>");
table($sql, $conn, "id_tytul", "tytul", 'tytul', "tytul");

$sql = 'SELECT * FROM autor_tytul, autor, tytul where autor_id = id_autor and tytul_id = id_tytul Order by id asc';
echo("Autorzy i Tytuly");
echo("<li>".$sql."</li>");
table2($sql, $conn, "id", "nazwisko", "tytul", 'nazwisko', 'tytul', 'autor-tytul');

?>

</body>
</html>