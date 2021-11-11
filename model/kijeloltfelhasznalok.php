<?php

class kijeloltfelhasznalok{
    private $id;
    protected $tablanev
    
    function __construct($tablanev){
        $this->tablanev = $tablanev;
    }

    protected function set_id($id, $conn){
        //adatbázisban lekérdzeés

            $sql ="SELECT id FROM $this->$tablanev WHERE id = $id";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $this->id = $row['id'];
                }
                else{
                    $sql ="INSERT INTO $this->$tablanev ($id)";
                    if($result = $conn->querry($sql)){
                        $this->id = $ud;
                    }
                }
            
    }

    protected function get_id(){
        return $this->id;        
    }

    protected function lista($conn){
        $lista = array();
        $sql = "SELECT id FROM $this->$tablanev";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()){
                while($row = $result->fetch_assoc()){
                    $lista[] = $row['id'];
                }

            }
        return $lista;
        }
        
      
    }


    
    
    


}/*

$tanulo = new ulesrend;

$tanulo->set_user(4, $conn);
echo "Név: ";
echo $tanulo->get_nev()."<br>Sor: ";
echo $tanulo->get_sor()."<br>Oszlop: ";
echo $tanulo->get_oszlop()."<br>Jelszo: ";
echo $tanulo->get_jelszo()."<br>Felhasználónév: ";
echo $tanulo->get_felhasznalo()."<br>";*/
?>