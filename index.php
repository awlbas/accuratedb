<?php
$servername = "localhost:3050";
$username = "CPS#1";
$password = "password";
$dbname = "gls2019.gdb";

try {
  $conn = new PDO("firebird:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>