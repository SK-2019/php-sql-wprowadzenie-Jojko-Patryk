<?php
$conn= new mysqli('mysql-phanteon.alwaysdata.net','phanteon','hasło_testowe','phanteon_test_base');
if ($conn->connect_error) {
    die("connection failed: ".mysqli_connect_error());

}
?>