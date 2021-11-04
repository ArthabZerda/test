<?php
$servername = "localhost";
$username = "phpteszt";
$password = "Kx-07L)HQRP7vb-7";
$dbname = "teszt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>

