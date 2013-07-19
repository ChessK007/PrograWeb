<?php
include('../../layouts/header.php');
include('../../layouts/navegador.php');
?>
<div class="container">
    <center><h1>Ingreso de Datos del Evento</h1></center>
    <div class="row">
        <form name="form1" action="#" method="get">
            <div class="span3">            
                <label for="nombre">Nombre</label>
                <input id="nombre" type="text" class="input-medium" size="20" maxlength="50" required="required"/>
                <label for="lugar">Lugar</label>
                <input id="lugar" type="text" class="input-medium" size="20" maxlength="50" required="required"/>        
            </div>

            <div class="span3">        
                <label for="f_inicio">Fecha de Inicio</label>
                <input id="f_inicio" type="date" class="input-medium" size="20" maxlength="50" required="required"/>
                <label for="f_fin">Fecha de Fin</label>
                <input id="f_fin" type="date" class="input-medium" size="20" maxlength="50" required="required"/> 
            </div>  


            <div class="span5">
                <label for="descipcion">Descripci&oacute;n</label>
                <textarea id="descripcion" type="text" class="input-xxlarge" size="20" maxlength="50" required="required"></textarea>
                <label for="contacto">Contacto</label>
                <input id="contacto" type="text" class="input-medium" size="20" maxlength="50" required="required"/>
                <input type="submit" class="btn btn-primary" name="Capturar">        
            </div>
        </form>
    </div><!--row-->
</div><!--container-->
<?php
include('../../layouts/footer.php');
?>