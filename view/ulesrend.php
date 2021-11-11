<?php
 include 'htmlheader.inc.php';
?>

<body>

<table>
  <tr><th colspan="9">Ülésrend<br>


<?php /*
if(!empty($_SESSION["id"])){
  echo "<br>Üdv ".$_SESSION['nev']."!";
  echo "<form action='logout.php' method='post'>
  <input type='submit' class='btn btn-outline-danger' value='Kilépés'>
  </form>"*/
?>
<!--
<form action="logout.php" method="post">
<input type="submit" value="Kilépés">
</form> !-->
<?php
/*}

elseif(isset($_POST['user'])){
echo $loginError;
}*/
?>
<form action="ulesrend.php" method="post">


</form>
<!--
<form action="ulesrend.php" method="post">


Felhasznalo: <input type="text" name="user">

Jelszó: <input type="password" name="pw">

<input type="submit" value="Belépés">
<br>


</form>
-->

<form action="ulesrend.php" method="post">

          <?php 
          
          if(!empty($_SESSION['id']) and in_array($_SESSION['id'], $f)){
           echo "Hiányzó <select  name='hianyzo_id'>";
              $result = tanulokListaja($conn);
              
              if ($result->num_rows > 0) { 
                while($row = mysqli_fetch_assoc($result)) {
                  $tanulo->set_user($row['id'], $conn);

                 if($tanulo->get_nev()!= '  ' && $tanulo->get_nev() != '' and !in_array($row["id"], $hianyzok) ) echo '<option value="'.$row["id"].'">'.$tanulo->get_nev().'</option> ';

                }
              }
              echo " <input type='submit' class='btn btn-outline-warning' value='Hozzádás'>";
            }
            if(!empty($_SESSION['id']) and $_SESSION['id'] != 24){
            
              
            }

          ?>

            
 </select>
<br>

</form>

  </th>
 </tr>
  <?php 

if ($tanuloIdk) {
  $sor = 0;
  foreach($tanuloIdk as $row) {
    $tanulo->set_user($row, $conn);
    if($tanulo->get_sor() != $sor) {
      if($sor != 0) echo '</tr>';
      echo '<tr>';
      $sor = $tanulo->get_sor();
    }
    if(!$tanulo->get_nev()) echo '<td class="empty"></td>';
    else {
      $plusz = '';
      if(in_array($row, $hianyzok)) $plusz .=  ' class="missing"';
      if($row == $en) $plusz .=  ' id="me"';
      if($row == $tanar) $plusz .=  ' colspan="2"';
      echo "<td".$plusz.">" . $tanulo->get_nev();
      if(!empty($_SESSION["id"])) {
        if(in_array($_SESSION["id"], $adminok)) {
          if(in_array($row, $hianyzok)) echo '<br><a href="index.php?page=ulesrend&nem_hianyzo='.$row.'">Nem hiányzó</a>';
        }
      }
      echo "</td>";
    }
  }
} 
else {
  echo "0 results";
}
$conn->close();
?>
    

</table>



</body>
</html>
<!--Kx-07L)HQRP7vb-7-->