<?php
$hostName = "localhost:3306";
$userName = "root";
$password = "Sandesh@MySql";
$databaseName = "cybergigsdatabase";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>