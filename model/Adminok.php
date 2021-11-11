<?php

class Admin{
    private $id;

    public function set_id($id, $conn){
        //adatbázisban lekérdzeés

            $sql ="SELECT id FROM f WHERE id = $id";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $this->id = $row['id'];
                }
                else{
                    $sql ="INSERT INTO f ($id)";
                    if($result = $conn->querry($sql)){
                        $this->id = $ud;
                    }
                }
            
    }

    public function get_id(){
        return $this->id;        
    }

    public function adminokListaja($conn){
        $lista = array();
        $sql = "SELECT id FROM f";
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