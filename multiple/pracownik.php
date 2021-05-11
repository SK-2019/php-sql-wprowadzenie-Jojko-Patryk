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


$sql = "SELECT * FROM Pracownik";
echo("<h3>Pracownicy</h3>");
echo("<li>".$sql);
table($sql, $conn, "ID_Pra", "Pracownik", 'Pracownik');

$sql = "SELECT * FROM Dzialy";
echo("<h3>Działy</h3>");
echo("<li>".$sql);
table($sql, $conn, "ID_Dza", "Dzial", 'Dzial');

$sql = 'SELECT * FROM Pracownik, Dzialy, EBoth where IDPS = ID_Pra and IDDZ = ID_Dza Order by id asc';
echo("<h3>Both</h3>");
echo("<li>".$sql);
table2($sql, $conn, "ID", "Pracownik", "Dzial", 'Pracownik', 'Dzial', "EBoth");

?>

</body>
</html>