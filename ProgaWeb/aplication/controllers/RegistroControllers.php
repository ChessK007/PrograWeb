<?php
  include("../models/Modelo.php");
  include('../models/Usuarios.php');
  include('../libs/adodb5/adodb-pager.inc.php');
  include('../libs/adodb5/adodb.inc.php');
  
  $usuario = new Usuarios();
  echo "<pre>";
  print_r($_POST);
  $usuario->set_apellido_paterno($_POST['apellido_paterno']);
  $usuario->set_apellido_materno($_POST['apellido_materno']);
  $usuario->set_nombre($_POST['nombre']);
  $usuario->set_sexo($_POST['sexo']);
  $usuario->set_edad($_POST['edad']);
  $usuario->set_email($_POST['email']);
  $usuario->set_control($_POST['nctr_rfc']);
  
  print_r($usuario->get_atributos());
  //
  //
  $usuario -> inserta($usuario->get_atributos());
  $usuario ->show_grid(20);
  //$usuario->actualiza(1);
  //$usuario->elimina();
  //$usuario->inserta();
  //$usuario->inserta();
  
  
  //$rs=$usuario->consulta_datos();
  //print_r($rs->GetRows());
?>