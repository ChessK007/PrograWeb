<?php
include ('../../layouts/header.php');
include('../../layouts/navegador.php');
?>

<div class="container">
    <center><h1>Tipo de Usuario</h1></center>
    <div class="span3"></div>
    <center>
        <div class="span6">
            <form action="#" method="post" class="well" name="form3">                
                <div class="controls">
                    <label for="descripcion">Descripci&oacute;n</label>
                    <input id="descripcion" name="descrip" type="text" class="span3" placeholder="Descripci&oacute;n de usuario" required="required">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>           
            </form>
        </div>
    </center>     
    
    <div class="span3"></div>

</div>
<?php
include ('../../layouts/footer.php');
?>
