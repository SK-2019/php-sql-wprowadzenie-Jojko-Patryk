<?php
$conn= new mysqli('mysql-phanteon.alwaysdata.net','phanteon','hasło_testowe','phanteon_books');
if ($conn->connect_error) {
    die("connection failed: ".mysqli_connect_error());

}
?>