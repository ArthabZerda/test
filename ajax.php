<table>
<?php

require 'includes/db.inc.php';

if(isset($_REQUEST['keres'])) {
   
    $sql = 'SELECT `id`,`nev`,`felhasznalonev` FROM ulesrend WHERE nev LIKE ?';

    $stmt = $conn->prepare($sql);

    $stmt->bind_param('s', $like); 
    
    $like = $_REQUEST['keres'].'%';
    
    $stmt->execute();

    if($result = $stmt->get_result()) {

        if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row['id']."</td><td>".$row['nev']."</td> <td>".$row['felhasznalonev']."</td>  </tr>";
            }
        }
             
    } 

}



?><table>

    