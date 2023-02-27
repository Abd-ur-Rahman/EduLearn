<?php

// Connecting to the Database
$host = "localhost";
$username = "AbdulRahman";
$password = "admin123";
$dbname = "edulearn";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>
