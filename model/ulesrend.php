<?php



class ulesrend{
    private $id;
    private $nev;
    private $sor;
    private $oszlop;
    private $jelszo;
    private $felhasznalo;
    private $tabla;

    function tanulokListaja($conn){
        $lista = array();
        $sql = "SELECT id, nev, sor, oszlop FROM ulesrend";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()){
                while($row = $result->fetch_assoc()){
                    
                }

            }
        return $lista;
        }
        
      



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

    public function get_id(){
        return $this->id;        
}
    public function get_nev(){
               return $this->nev;        
    }
    public function get_sor(){
        return $this->sor;        
    }
    public function get_oszlop(){
        return $this->oszlop;        
    }
    public function get_jelszo(){
        return $this->jelszo;        
    }
    public function get_felhasznalo(){
        return $this->felhasznalo;        
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