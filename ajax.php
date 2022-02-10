<table>
<?php
require 'includes/db.inc.php';
if(isset($_REQUEST['keres'])){

    echo $sql = "SELECT `id`,`nev` ,`felhasznalonev` FROM `ulesrend` WHERE `nev` LIKE '%".$_REQUEST['keres']."%' ";
   
    if(!$result = $conn -> query($sql)) echo $conn->error;
    if($result ->num_rows >0){
        if($row = $result ->fetch_assoc()){
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row['id']."</td><td>".$row['nev']."</td> <td>".$row['felhasznalonev']."</td>  </tr>";
            }
        }
    }

}

?><table>