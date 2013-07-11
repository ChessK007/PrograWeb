<?php

Class Asistente_tipo_usuario {

    private $id_asistente_tipo_usuario;
    private $id_asistente;
    private $id_tipo_usuario;

    Public function get_id_asistente_tipo_usuario() {
        return $this->id_asistente_tipo_usuario;
    }

    Public function set_id_asistente_tipo_usuario($id_asistente_tipo_usuario) {
        $this->id_asistente_tipo_usuario = $id_asistente_tipo_usuario;
    }

    Public function get_id_asistente() {
        return $this->id_asistente;
    }

    Public function set_id_asistente($id_asistente) {
        $this->id_asistente = $id_asistente;
    }

    Public function get_id_tipo_usuario() {
        return $this->id_tipo_usuario;
    }

    Public function set_id_tipo_usuario($id_tipo_usuario) {
        $this->id_tipo_usuario = $id_tipo_usuario;
    }

}

?>