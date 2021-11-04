<?php
session_start();

require 'includes/db.inc.php';
$title = "Belépés";
include 'includes/htmlheader.inc.php';
require "model/Ulesrend.php";
$tanulo = new ulesrend;


function tanulokListaja($conn){
  $sql = "SELECT id, nev, sor, oszlop FROM ulesrend";
  $result = $conn->query($sql);
  return $result; //visszatérési érték
}

// form feldolgozása
//$loginError = '';
/*
if(!empty($_POST["hianyzo_id"])){
  $sql = "INSERT INTO hianyzok VALUES(".$_POST["hianyzo_id"].")";
  $result = $conn->query($sql);

}elseif(!empty($_GET['nem_hianyzo'])){
  $sql = "DELETE FROM hianyzok WHERE id =".$_GET['nem_hianyzo'];
  $result = $conn->query($sql);
  
}else*/if(isset($_POST['user'])and isset($_POST['pw'])){
  $loginError = '';
    if(strlen($_POST['user']) == 0 ){
      $loginError .= "Nem írtál be felhasználónevet<br>";
    }
    if(strlen($_POST['pw']) == 0 ){
      $loginError .= "Nem írtál be jelszót";
    }
    if($loginError == ''){
      $sql ="SELECT id FROM ulesrend WHERE felhasznalo='".$_POST['user']."'";
      $result = $conn->query($sql);
  
      if ($result->num_rows > 0) {
        
        if($row = $result->fetch_assoc()) {
          $tanulo->set_user($row['id'], $conn);
          if(md5($_POST['pw']) == $tanulo->get_jelszo()){
            $_SESSION["id"] = $row['id'];
            $_SESSION["nev"] =$tanulo->get_nev();
            header('Location: ulesrend.php');
            exit();
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
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<?php


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

?>

<body>
   
<table >
  <tr><th colspan="9">Ülésrend<br>


<?php 
if(!empty($_SESSION["id"])){
  echo "<br>Üdv ".$_SESSION['nev']."!";
  echo "<form action='logout.php' method='post'>
  <input type='submit' class='btn btn-outline-danger' value='Kilépés'>
  </form>"
?>
<!--
<form action="logout.php" method="post">
<input type="submit" value="Kilépés">
</form> !-->
<?php
}

elseif(isset($_POST['user'])){
echo $loginError;
//asdasdasdasdasd
}
?>
<form action="ulesrend.php" method="post">


</form>
<form action="ulesrend.php" method="post">


Felhasznalo: <input type="text" name="user">

Jelszó: <input type="password" name="pw">
<br>
<input type="submit" class="btn btn-outline-success" value="Belépés">
<br>


</form>




            
 </select>
<br>

</form>

  </th>
 </tr>
  

  

</table>



</body>
</html>
<!--Kx-07L)HQRP7vb-7-->