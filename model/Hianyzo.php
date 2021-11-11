<?php

require '../includes/db.inc.php';
require 'Kijeloltfelhasznalok.php';

class Hianyzo extends Kijeloltfelhasznalok {
    
    function __construct() {
        $this->tablaNev = 'hianyzok';
    }
}

// Teszt
public function delete_id($id){
    $sql = "DELETE FROM hianyzok WHERE id =".$_GET['nem_hianyzo'];
	$result = $conn->query($sql);	
}

?>