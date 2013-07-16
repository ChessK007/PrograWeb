
<?php
   class Modelo{
           private $db;
           function Modelo(){
                      $this->db = ADONewConnection('mysql');
                      $this->db->debug = true;
                      $this->db->Connect('localhost', 'root', '', 'proyecto');
           }

           public function consulta_datos()  {

                      $rs = $this->db->Execute(' SELECT * from '.$this-> nombre_tabla);
                      $this->get_error($rs,'Error en la consulta de datos');
                      return $rs;
           }
           
           public function inserta($rs){
               //$rs = array();
               //$rs['nombre']='Juan';
               //$rs['email']='juan@gghh.mmn';
               //$rs['password']='*****';
               $sql_insert = $this->db->GetInsertSql($this->nombre_tabla,$rs);
               $this->get_error($this->db->Execute($sql_insert),'Error en Modelo.inserta');
           }
           
           public function get_error($result,$tipo_error){
               if($result === false){
                   die('Redireccionar a la pagina de error '.$tipo_error);
               }
           }
           
           public function show_grid($num ='10'){
               $sql = "SELECT id_usuario_detalle as ID,
                       apellido_paterno as Apellido_Paterno,
                       apellido_materno as Apellido_Materno,
                       nombre as Nombre,
                       sexo as Sexo,
                       edad as Edad,
                       email as Email,
                       nctr_rfc as Control FROM ".$this->nombre_tabla;
               $grid = new ADODB_Pager($this->db,$sql);
               $grid->Render($rows_per_page=$num);
           }
           
           public function actualiza($id){
               if(is_integer($id)){
               $sql = "SELECT * FROM".$this->nombre_tabla."
                   WHERE id=".$id;
               
               $record = $this->db->Execute($sql);
               $rs =array();
               $rs['nombre']='Pedro';
               $rs['email']='Pedro@nnnn.mmm';
               $rs['password']='000000';
               
               $sql_update=$this ->db->GetUpdateSQL($record,$rs);
               $this ->get_error($this->db -> Execute($sql_update),"Error al actualizar") ;
               }else{
                   die('OJO');
               }
           }
           
           public function elimina(){
               $sql = "DELETE FROM".$this->nombre_tabla;
               $this -> db-> Execute($sql);
               $this->get_error($this->db->Execute($sql),"Error al eliminar");
           }
   }
?>


