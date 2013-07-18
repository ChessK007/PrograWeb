<?php

class validaCampos extends Modelo{
    
    public $campos = array(
         'apellido_paterno'=>array(''),
         'apellido_materno'=>array(''),
         'nombre'=>array(''),
         'edad'=>array(''),
         'email'=>array(''),
         'nctr_rfc'=>array('')
    );
    
    function validaCampos(){
        parent::Modelo(); 
    }
    function _construct(){
        $this->Modelo();
    }
    
}
?>
