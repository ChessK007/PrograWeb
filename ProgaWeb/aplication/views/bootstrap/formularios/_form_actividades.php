<?php
include('../../layouts/header.php');
include('../../layouts/navegador.php');
?>


<div class="container">
    <center><h1>Actividades</h1></center>
    <div class="row">
        <div class="span3"></div>
        <div class="span6">
            <form class="well" action="" method="get"> 
                <center>
                    <div class="controls">            
                        <label>Actividad Solicitada</label>
                        <input type="text" placeholder="Actividad">
                        <input type="submit" class="btn btn-primary" name="Enviar">
                    </div><!--Lista de Id--> 
                </center>
            </form><!--Formulario-->
        </div>
        <div class="span3"></div>
    </div> 
</div><!--Contenedor-->

<?php
include('../../layouts/footer.php');
?>