<?php
   class Modelo{
           private $db;
           function Modelo(){
                      $this->db = ADONewConnection('mysql');
                      $this->db->debug = true;
                      $this->db->Connect('localhost', 'root', '', 'db_eventos');
           }

           public function consulta_datos()  {

                      $rs = $this->db->Execute('SELECT * from'.$this->nombre);
                      return $rs;
           }
   }
?>
