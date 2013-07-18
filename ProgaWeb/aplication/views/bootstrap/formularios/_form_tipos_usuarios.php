<?php
include ('../../layouts/header.php');
include('../../layouts/navegador.php');
?>

<div class="container">
    <center><h1>Tipo de Usuario</h1></center>
    <div class="span3"></div>
    <center><div class="span6">
        <form action="" method="post" class="well">                
            <!--                <label for="tipo">Tipo Usuario</label>
                            <input id="tipo" type="text" class="span3" placeholder="Tipo" required="required">      -->
            
                <div class="controls">
                    <label for="descrip">Descripcion</label>
            <!--                <textarea class="span4" id="descrip" name="descrip" rows="3" cols="20" required="required"> </textarea><br/>-->
                    <input id="descrip" name="descrip" type="text" class="span3" placeholder="Descripcion de usuario" required="required">
                    <br>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <a href="_form_index.html">  <button type="button" class="btn btn-danger">Regresar </button> </a>
                </div>           
        </form>
            <div class="span3"></div>
     </center></div>




    <?php
    include ('../../layouts/footer.php');
    ?>
