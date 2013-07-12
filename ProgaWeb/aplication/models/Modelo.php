<?php

class Modelo{
    private $db;
    
    function Modelo(){
        $this->db= ADONewConnection('mysql');
        $this->db->debug = TRUE;
        $this->db->Connect('localhost','root','len21se13','Proyecto');
        
    }
    
    public function consulta_datos(){
        $rs = $this-> db -> Execute ('Select * from'.$this->instructor);
        return $rs;
    }
    
}

?>