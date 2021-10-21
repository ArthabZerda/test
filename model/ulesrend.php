<?php
require "../db.inc.php";

class ulesrend{
    private $id;
    private $nev;
    private $sor;
    private $oszlop;
    private $jelszo;
    private $felhasznalo;

    public function set_user($id, $conn){
        //adatbázisban lekérdzeés

            $sql ="SELECT id, nev, sor, oszlop, jelszo, felhasznalo FROM ulesrend WHERE id = $id";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $this->id = $row['id'];
                $this->nev = $row['nev'];
                $this->sor = $row['sor'];
                $this->oszlop = $row['oszlop'];
                $this->jelszo = $row['jelszo'];
                $this->felhasznalo = $row['felhasznalo'];
                
                } 
    }

    
    public function get_nev(){
        
               return $this->nev;
                
    }
}

$tanulo = new ulesrend;

$tanulo->set_user(4, $conn);

echo $tanulo->get_nev();
?>