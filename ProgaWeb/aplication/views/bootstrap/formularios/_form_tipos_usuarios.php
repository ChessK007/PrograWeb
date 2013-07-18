<?php

 include ('../../layouts/header.php');

?>

<div class="container">
   <link rel="stylesheet" type="text/css" href="../css/estilo.css">
            <form action="" method="post" class="well">
                <h3 class="form-signin-heading" >Tipo de Usuario</h3>
                <br>
<!--                <label for="tipo">Tipo Usuario</label>
                <input id="tipo" type="text" class="span3" placeholder="Tipo" required="required">      -->
				<label for="descrip">Descripcion</label>
<!--                <textarea class="span4" id="descrip" name="descrip" rows="3" cols="20" required="required"> </textarea><br/>-->
                                <input id="descrip" name="descrip" type="text" class="span3" placeholder="Descripcion de usuario" required="required">
				<br>
				
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="_form_index.html">  <button type="button" class="btn btn-danger">Regresar </button> </a>
            </form>
        </div> 



<?php

 include ('../../layouts/footer.php');

?>
