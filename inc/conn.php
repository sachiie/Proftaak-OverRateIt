<?php
$servername = "localhost:3306";
$username = "oriteam";
$password = "admin666";
$dbname = "overrateit";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 ?>
