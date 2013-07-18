<?php
  include("../../models/Modelo.php");
  include("../../models/Usuarios.php");
  //extra totalmente
  include("../../libs/adodb5/adodb-pager.inc.php");
  include("../../libs/adodb5/adodb.inc.php");
  include("../../controllers/siteController/registroUsuarios.php");
  
  $usuario = new RegistroUsuarios();
  if(isset($_POST['usuario'])){
        if($usuario->registraUsuario( $_POST['usuario'] )){
              header("Location: registroCorrecto.php");
              exit();
        }
  }
?>
<?php
  include("../layouts/encabezado.php");
?>




  <form class="form-signin"  method="post" >
		    <h3>Usuarios</h3>
                <input type="text" class="login-field " value placeholder="Apellido Paterno" id="usuario[apellido_paterno]" name="usuario[apellido_paterno]">
	        <br>
	        <input type="text" class="login-field " value placeholder="Apellido Materno" id="usuario[apellido_materno]" name="usuario[apellido_materno]">
	        <br>
	        <input type="text" class="login-field " value placeholder="Nombre" id="usuario[nombre]" name="usuario[nombre]">
	        <br>
			<label> Sexo:</label>
			<input type="radio" name="usuario[sexo]" value="M" id="usuario[sexo]">Masculino
			<br>
			<input type="radio" name="sexo" value="F" id="usuario[sexo]">Femenino
			<br>
			<input type="number" maxlength="2" class="login-field " value placeholder="Edad" id="usuario[edad]" name="usuario[edad]">
	        <br>
	        <input type="email" id="usuario[email]" class="login-field " value placeholder="E-mail" name="usuario[email]">	
	        <br>
	        
	        <input type="text" id="usuario[nctr_rfc]" maxlength="8" class="login-field" value placeholder="No. de Control" name="usuario[nctr_rfc]">
			<br>
			<input type="submit" value="Enviar" class="btn btn-primary">
			
			<button class="btn btn-large btn-danger fondo_botoncancelar" type="submit">Cancelar</button>
</form>
		
<?php
  include("../layouts/footer.php");
?>
