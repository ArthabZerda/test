<?php
 include 'htmlheader.php'
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

  $result = tanulokListaja($conn);
  
  if ($result->num_rows > 0) {
    // output data of each row
    $sor = 0;
    while($row = mysqli_fetch_assoc($result)) {

      $tanulo->set_user($row['id'], $conn);
      
      if($tanulo->get_sor()!=$sor){
        if($sor != 0) echo '</tr>';
        echo '<tr>';
        $sor = $row["sor"];
      }
      //echo "<td>" . $row["nev"]. "</td>";

      if(!$row["nev"]) echo '<td id="empty"><h3>Üres</h3></td>';
      
      else{ 
        $plusz = ' ';
      // if(in_array(($row["oszlop"]-1),$hianyzok[$sor-1])) $plusz .= 'id="e"';
       if(in_array($row["id"],$hianyzok)) $plusz .= 'id="e"';
       if($row['id'] == $en) $plusz .= 'id="beans"';
       if($_SESSION and $row['id'] == $_SESSION['id']) $plusz .= 'id="beans"';
       if($row['id'] == $tanarur) $plusz .= 'id="t"';
       if(in_array(($tanulo->get_oszlop()-1),$lh[$sor-1])) $plusz .= 'id="inv"';
       if(in_array(($tanulo->get_oszlop()-1),$nagy[$sor-1])) $plusz .= 'colspan="2"';
        echo "<td".$plusz.">" . $tanulo->get_nev();
        //if(!empty($_SESSION['id']) and $_SESSION['id'] == 24 or !empty($_SESSION['id']) and $_SESSION['id'] == 4){
        if(!empty($_SESSION['id']) and in_array($_SESSION['id'], $f)){
        if(in_array($row["id"],$hianyzok)) echo '<br><a href="ulesrend.php?nem_hianyzo='.$row['id'].'">Nem hiányzó<a>';
        echo "</td>";
      }
      }
      }
    
  } else {
    echo "0 results";
  }
  
  mysqli_close($conn);
      

    ?>
    

</table>



</body>
</html>
<!--Kx-07L)HQRP7vb-7-->