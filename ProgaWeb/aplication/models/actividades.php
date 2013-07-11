<?php

Class Actividades {

    private $id_actividad;
    private $id_evento;
    private $nombre_actividad;
    private $lugares;
    private $precio;
    private $descripcion;
    private $id_usuario;

    public function getId_actividad() {
        return $this->id_actividad;
    }

    public function setId_actividad($id_actividad) {
        $this->id_actividad = $id_actividad;
    }

    public function getId_evento() {
        return $this->id_evento;
    }

    public function setId_evento($id_evento) {
        $this->id_evento = $id_evento;
    }

    public function getNombre_actividad() {
        return $this->nombre_actividad;
    }

    public function setNombre_actividad($nombre_actividad) {
        $this->nombre_actividad = $nombre_actividad;
    }

    public function getLugares() {
        return $this->lugares;
    }

    public function setLugares($lugares) {
        $this->lugares = $lugares;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getId_usuario() {
        return $this->id_usuario;
    }

    public function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

}

?>
