<?php

require '../includes/db.inc.php';
require 'Kijeloltfelhasznalok.php';

class Hianyzo extends Kijeloltfelhasznalok {
    
    function __construct() {
        $this->tablaNev = 'hianyzok';
    }
}

// Teszt
$hianyzo = new Hianyzo();

$hianyzo->set_id(1, $conn);
echo $hianyzo->get_id();

?>