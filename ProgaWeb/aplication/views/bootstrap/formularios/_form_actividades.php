<?php
include('../../layouts/header.php');
include('../../layouts/navegador.php');
?>


<div class="container">
    <center><h1>Actividades</h1></center>
    <div class="row">
        <div class="span3"></div>

        <div class="span6">
            <form class="well" name="form2" action="" method="get">
                <center>
                    <div class="controls">          
                        <label for="descripcion">Actividad Solicitada</label> 
                        <input type="text" name="descripcion" placeholder="Actividad">
                        <input type="submit" class="btn btn-primary" name="Enviar">
                    </div>
                </center>
            </form>
        </div>
    </div><!--row-->
</div><!--container-->

<div class="span3"></div>

<?php
include('../../layouts/footer.php');
?>