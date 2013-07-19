<?php
include('../../layouts/header.php');
include('../../layouts/navegador.php');
?>
<div class="container">

    <center><h1>Ingreso de Datos de Usuario</h1></center>

    <div class="row">

        <div class="span4">
            <form name="form4" class="well" action="#" method="get">
                <label for="nombre">Nombre</label>
                <input id="nombre" type="text" size="20" maxlength="50" required="required"/><br>
                <label for="A.Paterno">Apellido Paterno</label>
                <input id="A.Paterno" type="text" size="20" maxlength="50" required="required"/><br>
                <label for="A.Materno">Apellido Materno</label>
                <input id="A.Materno" type="text" size="20" maxlength="50" required="required"/><br>            
                <label for="control">N&uacute;mero de Control</label>
                <input id="control" type="text" maxlength="10" required="required"/>
            </form>
        </div>

        <div class="span1"></div>

        <div class="span4">
            <form class="well" name="form4" action="#" method="get">
                Genero
                <input name="sexo" type="radio" value="Masculino" checked="checked"/>Hombre
                <input name="sexo" type="radio" value="Femenino"/>Mujer
                <label for="edad">Edad</label>
                <input id="edad" type="number" maxlength="2" required="required"/>
                <label for="email">Email</label>
                <input id="email" type="email" maxlength="50" required="required"/>
                <label for="n_control">RFC</label>
                <input id="n_control" type="text" maxlength="13" required="required"/>
                <input type="submit" class="btn btn-primary" value="Capturar"/>
            </form>
        </div>        
    </div><!--row-->
</div><!--container-->
<?php
include('../../layouts/footer.php');
?>