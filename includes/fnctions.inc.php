<?php
session_start();

$title = "Főoldal";
include 'htmlheader.inc.php';
function tanulokListaja($conn){
    $sql = "SELECT id, nev, sor, oszlop FROM ulesrend";
    $result = $conn->query($sql);
    return $result; //visszatérési érték
  }

  
?>

