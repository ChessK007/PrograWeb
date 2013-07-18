<?php
  class UsuariosE extends Modelo{
 
           
			public $nombre_tabla= 'usuarios';
                        public $pk = 'nombre';
                        public $atributos = array(
                                            'nombre'=>array(''),
                                            'email'=>array(''),
                                            'password'=>array('')
                            
                        );
                        
                        private $nombre;
                        private $email;
                        private $password;
                        
                        function UsuariosE(){
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
                        
                        
                       public function get_nombre() {
                          return $this->nombre;
                        }

                        public function set_nombre($nombre) {
                             $this->nombre = $nombre;
                        }


                        public function get_email() {
                           return $this->email;
                        }

                        public function set_email($email) {
                            $this->email = $email;
                        }

                        public function set_password($password){
                           $this->password=$password;
                       }
                       
                       public function get_password(){
                           return $this->password;
                       }
 }
?>
