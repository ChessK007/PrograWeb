<?php
include('../../layouts/header.php');
include('../../layouts/navegador.php');
?>
<div class="container">
    <center><h1>Ingreso de Datos de Usuario</h1></center>

    <form>
        <fieldset>
            <legend>Legend</legend>
            <label>Label name</label>
            <input type="text" placeholder="Type something…">
            <span class="help-block">Example block-level help text here.</span>
            <label class="checkbox">
                <input type="checkbox"> Check me out
            </label>
            <button type="submit" class="btn">Submit</button>
        </fieldset>
    </form>



    <form name="form1">
        <label for="nombre">Nombre</label><br>
        <input id="nombre" type="text" size="20" maxlength="50" required="required"/><br>
        <label for="A.Paterno">Apellido Paterno</label><br>
        <input id="A.Paterno" type="text" size="20" maxlength="50" required="required"/><br>
        <label for="A.Materno">Apellido Materno</label><br>
        <input id="A.Materno" type="text" size="20" maxlength="50" required="required"/><br>
        <label for="control">N&uacute;mero de Control</label><br>
        <input id="control" type="text" maxlength="10"/><br>
        Genero<br>
        <input name="sexo" type="radio" value="Masculino" checked="checked"/>Hombre<br>
        <input name="sexo" type="radio" value="Femenino"/>Mujer<br>
        <label for="edad">Edad</label><br>
        <input id="edad" type="number" maxlength="2"/><br>
        <label for="email">Email</label><br>
        <input id="email" type="email" maxlength="50"/><br>
        <label for="rfc">RFC</label><br>
        <input id="rfc" type="text" maxlength="13"/><br>  
        <input type="button" value="Capturar"/><br>
    </form>
</div>
<?php
include('../../layouts/footer.php');
?>