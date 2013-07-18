<?php

Class Eventos {

     private $id_evento;
    private $nombre;
    private $lugar;
    private $f_inicio;
    private $f_fin;
    private $descripcion;
    private $contacto;

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