<?php

  class Usuarios extends Modelo{
 
           
			public $nombre_tabla= 'usuarios_detalles';
                        public $pk = 'id';
                        public $atributos = array(
                                            'apellido_paterno'=>array(''),
                                            'apellido_materno'=>array(''),
                                            'nombre'=>array(''),
                                            'sexo'=>array(''),
                                            'edad'=>array(''),
                                            'email'=>array(''),
                                            
                                            'nctr_rfc'=>array('')
                            
                        );
                        private $id_usuario_detalle;
                        private $apellido_paterno;
                        private $apellido_materno;
                        private $nombre;
                        private $sexo;
                        private $edad;
                        private $email;
                        private $nctr_rfc;
                        
                        function Usuarios(){
                            parent::Modelo();//Constructor de la clase Modelo la cual tiene la conexion
                        }
                        
                        function _construct(){
			     $this->Modelo();
			}
                        
                       
                        
                        public function get_atributos(){
                            $rs = array();
                            foreach($this->atributos as $key => $value){
                                $rs[$key]= $this->$key;
                                
                            }
                            return $rs;
                        }
                        
                        
                        public function get_id_usuario_detalle() {
                            return $this->id_usuario_detalle;
                       }

                        public function set_id_usuario_detalle($id_usuario_detalle) {
                            $this->id_usuario_detalle = $id_usuario_detalle;
                        }

                       

                        public function get_apellido_paterno() {
                            return $this->apellido_paterno;
                        }

                        public function set_apellido_paterno($apellido_paterno) {
                            $this->apellido_paterno = $apellido_paterno;
                        }

                        public function get_apellido_materno() {
                            return $this->apellido_materno;
                        }

                        public function set_apellido_materno($apellido_materno) {
                           $this->apellido_materno = $apellido_materno;
                        }

                        public function get_nombre() {
                          return $this->nombre;
                        }

                        public function set_nombre($nombre) {
                             $this->nombre = $nombre;
                        }

                        public function get_sexo() {
                          return $this->sexo;
                        }

                        public function set_sexo($sexo) {
                          $this->sexo = $sexo;
                        }

                        public function get_edad() {
                          return $this->edad;
                        }

                        public function set_edad($edad) {
                          $this->edad = $edad;
                        }

                        public function get_email() {
                           return $this->email;
                        }

                        public function set_email($email) {
                            $this->email = $email;
                        }

                        public function set_control($control){
                           $this->nctr_rfc=$control;
                       }
                       
                       public function get_control(){
                           return $this->nctr_rfc;
                       }
 }
?>
