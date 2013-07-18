 <?php
include('../../layouts/header.php');
include('../../layouts/navegador.php');
?>
<div class="container">
    <center><h1>Ingreso de Datos del Evento</h1></center>

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
        <label for="Lugar">Lugar</label><br>
        <input id="lugar" type="text" size="20" maxlength="50" required="required"/><br>
        <label for="f_inicio">f_inicio</label><br>
        <input id="f_inicio" type="date" size="20" maxlength="50" required="required"/><br>
        <label for="f_fin">f_fin</label><br>
        <input id="f_fin" type="date" size="20" maxlength="50" required="required"/><br>
       
        
        
        <label for="Descipcion">Descripcion</label><br>
        <input id="descripcion" type="text" size="20" maxlength="50" required="required"/><br>
   
        <label for="Contacto">Contacto</label><br>
        <input id="contacto" type="text" size="20" maxlength="50" required="required"/><br>
   
    </form>
</div>
<?php
include('../../layouts/footer.php');
?>