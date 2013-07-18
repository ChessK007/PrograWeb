<?php
  class RegistroUsuarios extends Usuarios {
      
      function RegistroUsuarios(){
          
      }
      
      public function registraUsuario($valores){
          parent::Usuarios();
          $this->set_apellido_paterno($valores['apellido_paterno']);
          $this->set_apellido_materno($valores['apellido_materno']);
          $this->set_nombre($valores['nombre']);
          $this->set_sexo($valores['sexo']);
          $this->set_edad($valores['edad']);
          $this->set_email($valores['email']);
          $this->set_control($valores['nctr_rfc']);
          return $this->inserta($this->get_atributos());
          
      }
  }
?>
