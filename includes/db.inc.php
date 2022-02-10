<?php

$servername = "localhost";
$username = "phpt";
$password = "tOYkKM_UOhR0Kvr5";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

?>
