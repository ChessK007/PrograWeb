<?php

Class AsistenteTipoUsuario {

    private $id_asistente_tipo_usuario;
    private $id_usuario_detalle;
    private $id_tipo_usuario;
    private $fecha_registro;

    Public function get_id_asistente_tipo_usuario() {
        return $this->id_asistente_tipo_usuario;
    }

    Public function set_id_asistente_tipo_usuario($id_asistente_tipo_usuario) {
        $this->id_asistente_tipo_usuario = $id_asistente_tipo_usuario;
    }

    Public function get_id_usuario_detalle() {
        return $this->id_usuario_detalle;
    }

    Public function set_id_usuario_detalle($id_usuario_detalle) {
        $this->id_usuario_detalle = $id_usuario_detalle;
    }

    Public function get_id_tipo_usuario() {
        return $this->id_tipo_usuario;
    }

    Public function set_id_tipo_usuario($id_tipo_usuario) {
        $this->id_tipo_usuario = $id_tipo_usuario;
    }

    public function get_fecha_registro() {
        return $this->fecha_registro;
    }

    public function set_fecha_registro($fecha_registro) {
        $this->fecha_registro = $fecha_registro;
    }

}

?>