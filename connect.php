<?php
$conn= new mysqli($_SERVER['address'], $_SERVER['dbname'], $_SERVER['pass'], $_SERVER['username']);
if ($conn->connect_error) {
    die("connection failed: ".mysqli_connect_error());

}
?>