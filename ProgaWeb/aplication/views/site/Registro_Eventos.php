<?php
  include("../../models/Modelo.php");
  include("../../models/Eventos.php");
  include("../../libs/adodb5/adodb-pager.inc.php");
  include("../../libs/adodb5/adodb.inc.php");
  include("../../controllers/siteController/registroEventos.php");
  
  $evento = new registroEventos();
  if(isset($_POST['evento'])){
        if(   $evento->registraEventos($_POST['evento'])  ){
              header("Location: registroCorrecto.php");
              exit();
        }
  }
?>
<?php
  include("../layouts/encabezado.php");
?>
  <form class="form-signin" method="post">
                 <h3>Eventos</h3>
		 <input type="text" id="evento[nombre_evento]" name="evento[nombre_evento]" class="login-field" value placeholder="Nombre">
		  <br>
		  <input type="text" id="evento[contacto]" name="evento[contacto]" class="login-field" value placeholder="Contacto">
		  <br>
                   
		  <input type="text" id="evento[cuando]" name="evento[cuando]" class="login-field" value placeholder="Cuando">
          <br>
		  <input type="text" id="evento[donde]" name="evento[donde]" class="login-field" value placeholder="Donde">
		  <br>
		  <label class="">Informacion</label>
		  <textarea id="evento[informacion]" name="evento[informacion]" class="login-field"  >
		  </textarea>
		  
		  <br>
		  <input type="date" id="evento[fecha_inicio]" name="evento[fecha_inicio]" value placeholder="Fecha de Inicio">
		  <br>
		  <input type="date" id="eventp[fecha_fin]" name="evento[fecha_fin]" class="login-field" value placeholder="Fecha fin">
		  <br>
		  <input type="submit" value="Enviar" class="btn btn-primary">
		</form>

<?php
  include("../layouts/footer.php");
?>
