<?php

require 'db.inc.php';
require "model/Ulesrend.php";
$tanulo = new ulesrend;
include 'htmlheader.inc.php';

function tanulokListaja($conn){
  $sql = "SELECT id, nev, sor, oszlop FROM ulesrend";
  $result = $conn->query($sql);
  return $result; //visszatérési érték
}


// form feldolgozása
//$loginError = '';
if(!empty($_POST["hianyzo_id"])){
  $sql = "INSERT INTO hianyzok VALUES(".$_POST["hianyzo_id"].")";
  $result = $conn->query($sql);

}elseif(!empty($_GET['nem_hianyzo'])){
  $sql = "DELETE FROM hianyzok WHERE id =".$_GET['nem_hianyzo'];
  $result = $conn->query($sql);
  
  
}elseif(isset($_POST['user'])and isset($_POST['pw'])){
  $loginError = '';
    if(strlen($_POST['user']) == 0 ){
      $loginError .= "Nem írtál be felhasználónevet<br>";
    }
    if(strlen($_POST['pw']) == 0 ){
      $loginError .= "Nem írtál be jelszót";
    }
    if($loginError == ''){
      $sql ="SELECT id, nev, jelszo FROM ulesrend WHERE felhasznalo='".$_POST['user']."'";
      $result = $conn->query($sql);
  
      if ($result->num_rows > 0) {
        if($row = $result->fetch_assoc()) {
          if(md5($_POST['pw']) == $row['jelszo']){
            //érvényes belépés
            
            $_SESSION["id"] = $row['id'];
            $_SESSION["nev"] =$row['nev'];
          }else  $loginError .= 'Érvénytelen jelszó';

      }
    }else $loginError .= 'Érvénytelen felhasználónév';
  }
  
}

//admin'or'1'='1
?>



<!DOCTYPE html>
<html lang="hu">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<?php
$title = "Ülésrend";
include 'htmlheader.inc.php';

$hianyzok = array();//ebben lesznel a hiányzók id-i felsorolva


$sql = "SELECT id FROM hianyzok";
  $result = mysqli_query($conn, $sql);
  
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $hianyzok[]=$row['id'];

    }
  }
  $f = array();

  $sql = "SELECT id FROM f";
  $result = mysqli_query($conn, $sql);
  
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $f[]=$row['id'];

    }
  }

  $en = -1;
  if(!empty($_SESSION["id"])) $en = $_SESSION['id'];
  $tanarur = 24;
  /*

 $nagy = array(
   array(-1),
   array(-1),
   array(-1),
   array(2, 4),
   
 );
 $lh = array(
  array(),
  array(1,4,7),
  array(1,4,7),
  array(1,3,7),

 )
*/
?>
