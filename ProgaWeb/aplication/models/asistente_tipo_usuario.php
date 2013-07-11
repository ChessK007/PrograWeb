<?php

Class Asistente_tipo_usuario{
            
            private $id_asistente_tipo_usuario;
            private $id_asistente;
            private $id_tipo_usuario;
            
            
            
            function get_id_asistente_tipo_usuario(){
                return $this->id_asistente_tipo_usuario;
            }
            function  set_id_asistente_tipo_usuario($id_asistente_tipo_usuario){
                $this->id_asistente_tipo_usuario=$id_asistente_tipo_usuario;
            }
            
            public function get_id_asistente(){
                return $this->id_asistente;
            }
            
            function setid_asistente($id_asistente){
                $this->id_asistente=$id_asistente;
            }
            
            function getid_tipo_usuario(){
                return $this->id_tipo_usuario;
            }
            
            function setid_tipo_usuario($id_tipo_usuario){
                $this->id_tipo_usuario=$id_tipo_usuario;
            }

              
        }

?>