<?php
class AdminController{
    function AdminController(){
        
    }
    
    public function lista_usuarios(){
        $usuario = new  Usuarios();
        $usuario ->show_grid();
    }
}
?>
