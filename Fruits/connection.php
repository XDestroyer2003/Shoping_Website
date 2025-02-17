<?php

// Create connection
$conn = new mysqli('localhost:3306', 'root', '', 'db_fruitmarket');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>