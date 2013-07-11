<?php

class Asistentes {

    private $id_asistente;
    private $apellido_paterno;
    private $apellido_materno;
    private $nombre;
    private $sexo;
    private $edad;
    private $email;
    private $numero_control;
    private $contraseña;

    public function get_id_asistente() {
        return $this->id_asistente;
    }

    public function set_id_asistente($id_asistente) {
        return $this->id_asistente = $id_asistente;
    }

    public function get_apellido_paterno() {
        return $this->apellido_paterno;
    }

    public function set_apellido_paterno($apellido_paterno) {
        return $this->apellido_paterno = $apellido_paterno;
    }

    public function get_apellido_materno() {
        return $this->apellido_materno;
    }

    public function set_apellido_materno($apellido_materno) {
        return $this->apellido_materno = $apellido_materno;
    }

    public function get_nombre() {
        return $this->nombre;
    }

    public function set_nombre($nombre) {
        return $this->nombre = $nombre;
    }

    public function get_sexo() {
        return $this->sexo;
    }

    public function set_sexo($sexo) {
        return $this->sexo = $sexo;
    }

    public function get_edad() {
        return $this->edad;
    }

    public function set_edad($edad) {
        return $this->edad = $edad;
    }

    public function get_email() {
        return $this->email;
    }

    public function set_email($email) {
        return $this->email = $email;
    }

    public function get_numero_control() {
        return $this->numero_control;
    }

    public function set_numero_control($numero_control) {
        return $this->numero_control = $numero_control;
    }

    public function get_contraseña() {
        return $this->contraseña;
    }

    public function set_contraseña($numero_control) {
        return $this->numero_control = $numero_control;
    }

}

?>
