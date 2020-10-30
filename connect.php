<?php

$servername = "mysql-phanteon.alwaysdata.net";
$username = "phanteon";
$password = "hasło_testowe";
$dbanme = "phanteon_test_base";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>