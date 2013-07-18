<?php

<<<<<<< HEAD
class Eventos extends Modelo{

    public  $nombre_tabla='eventos';
    public  $pk='id';
    public $atributos= array(
                       'nombre_evento'=>array(''),
                       'contacto'=>array(''),
                       'cuando'=>array(''),
                       'donde'=>array(''),
                       'informacion'=>array(''),
                       'fecha_inicio'=>array(''),
                       'fecha_fin'=>array(''),
        
    );
    private $id_evento;
    private $nombre_evento;
    private $contacto;
    private $cuando;
    private $donde;
    private $informacion;
    private $fecha_inicio;
    private $fecha_fin;
    
    function Eventos()
    {
        parent::Modelo();
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
=======
Class Eventos {

     private $id_evento;
    private $nombre;
    private $lugar;
    private $f_inicio;
    private $f_fin;
    private $descripcion;
    private $contacto;
>>>>>>> upstream/master

    public function get_id_evento() {
        return $this->id_evento;
    }

    public function set_id_evento($id_evento) {
        $this->id_evento = $id_evento;
    }

    public function get_nombre() {
        return $this->nombre;
    }

    public function set_nombre($nombre) {
        $this->nombre = $nombre;
    }

    public function get_lugar() {
        return $this->lugar;
    }

    public function set_lugar($lugar) {
        $this->lugar = $lugar;
    }

    public function get_f_inicio() {
        return $this->f_inicio;
    }

    public function set_f_inicio($f_inicio) {
        $this->f_inicio = $f_inicio;
    }

    public function get_f_fin() {
        return $this->f_fin;
    }

    public function set_f_fin($f_fin) {
        $this->f_fin = $f_fin;
    }

    public function get_descripcion() {
        return $this->descripcion;
    }

    public function set_descripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function get_contacto() {
        return $this->contacto;
    }

    public function set_contacto($contacto) {
        $this->contacto = $contacto;
    }

}

?>