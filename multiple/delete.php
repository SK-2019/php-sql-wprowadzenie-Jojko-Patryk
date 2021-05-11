<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Patryk Jojko</title>
    <link rel="stylesheet" href="/constyle/style.css" />
  </head>
  <body>
    <div class="container">
      <div class="colorRed">
        <?php include("../assets/header.php"); ?>
      </div>
      <div class="colorBlue">
      <?php include("../assets/menu.php"); ?>
      </div>
      <div class="colorGreen">

        <?php
                  ini_set('display_errors', '1');
                  ini_set('display_startup_errors', '1');
                  error_reporting(E_ALL);
        



        require_once("../connect/connect.php");

        function delete($conn, $table, $column, $row){
        
        $sql = "DELETE  FROM $table WHERE $column = $row";
        
        echo $sql;

        if ($conn->query($sql) === TRUE) {
          echo ("<h2>Record deleted successfully</h2>");

        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        }

        delete($conn, $_POST['tabela'], $_POST['kolumna'], $_POST['wiersz']);

        ?>
      </div>
    </div>
  </body>
</html>