<?php

  class registroEventos  extends Eventos{
      
      function registroEventos()
      {
          
      }
      
      public function registraEventos($valores){
          
          parent::Eventos();
          $this->set_nombre_evento($valores['nombre_evento']);
          $this->set_contacto($valores['contacto']);
          $this->set_cuando($valores['cuando']);
          $this->set_donde($valores['donde']);
          $this->set_informacion($valores['informacion']);
          $this->set_fecha_inicio($valores['fecha_inicio']);
          $this->set_fecha_fin($valores['fecha_fin']);
          return $this->inserta($this->get_atributos());
      }
  }
?>
