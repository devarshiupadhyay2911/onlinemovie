<?php
$servername = "localhost";
$username = "admin";
$password = "Admin@123";

try {
  $conn = new PDO("mysql:host=$servername;dbname=onlinemovie", $username, $password);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>