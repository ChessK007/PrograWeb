<?php

Class Eventos {

    private $id_evento;
    private $nombre_evento;
    private $contacto;
    private $cuando;
    private $donde;
    private $informacion;
    private $fecha_inicio;
    private $fecha_fin;

    public function getId_evento() {
        return $this->id_evento;
    }

    public function setId_evento($id_evento) {
        $this->id_evento = $id_evento;
    }

    public function getNombre_evento() {
        return $this->nombre_evento;
    }

    public function setNombre_evento($nombre_evento) {
        $this->nombre_evento = $nombre_evento;
    }

    public function getContacto() {
        return $this->contacto;
    }

    public function setContacto($contacto) {
        $this->contacto = $contacto;
    }

    public function getCuando() {
        return $this->cuando;
    }

    public function setCuando($cuando) {
        $this->cuando = $cuando;
    }

    public function getDonde() {
        return $this->donde;
    }

    public function setDonde($donde) {
        $this->donde = $donde;
    }

    public function getInformacion() {
        return $this->informacion;
    }

    public function setInformacion($informacion) {
        $this->informacion = $informacion;
    }

    public function getFecha_inicio() {
        return $this->fecha_inicio;
    }

    public function setFecha_inicio($fecha_inicio) {
        $this->fecha_inicio = $fecha_inicio;
    }

    public function getFecha_fin() {
        return $this->fecha_fin;
    }

    public function setFecha_fin($fecha_fin) {
        $this->fecha_fin = $fecha_fin;
    }

}

?>