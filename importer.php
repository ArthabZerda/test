<?php
require 'db.inc.php';
?>



<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Ülésrend</title>
</head>
<?php

$osztaly = array(
  array("Kulhanek László "),
  array("Molnár Gergő" ,"  ", "Bakcsányi Dominik" , "Füstös Lóránt" ,"  ", "Orosz Zsolt" ,"Harsányi László" ,"  ", NULL),
  array("Kereszturi Kevin" ,"  ", "Juhász Levente", "Szabó László" ,"  ", "Sütő Dániel" , "Detari Klaudia" ,"  ", NULL),
  array("Fazekas Miklós" ,"  ",  "Gombos János" ,"  ", "Tanár úr")
);  
//Kx-07L)HQRP7vb-7


foreach($osztaly as $sor => $tomb){
    foreach($tomb as $oszlop =>$tanulo){

      $sql ="INSERT INTO `ulesrend` (`nev`, `sor`, `oszlop`) VALUES ('$tanulo', $sor + 1, $oszlop + 1);";

      if ($conn->query($sql) === TRUE) {
        echo "<b>$tanulo</b> was added<br> ";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }

}



/*
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
*/
$conn->close();


$hianyzok = array(
    array(0),
    array(5),
    array(2),
    array()
 );
 $nagy = array(
   array(-1),
   array(-1),
   array(-1),
   array(2, 4)
 )

?>

<body>
<table>
  <?php 
  
      foreach($osztaly as $sor => $tomb){
          echo '<tr>';
        foreach($tomb as $oszlop => $tanulo){
          if($tanulo ===  NULL)
          {
            echo '<td id="empty"> Üres</td>';
          
          }else{
            $add=' ';
          if($tanulo == "  ") $add .= 'id="inv"';
          if(in_array($oszlop,$hianyzok[$sor]))  $add .= 'id="e"';
          if(in_array($oszlop,$nagy[$sor])) $add .= 'colspan="2"';
          echo '<td'.$add.'>' .$tanulo.'</td>';
            
          
        }
      }
        echo "</tr>";

      }
      

    ?>
    

</table>
</body>
</html>
<!--Kx-07L)HQRP7vb-7-->