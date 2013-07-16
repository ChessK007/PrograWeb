<?php
  include("../layouts/encabezado.php");
?>


  <form class="form-signin" action="../../controllers/RegistroControllers.php" method="post">
		    <h3>Usuarios</h3>
			<input type="text" class="login-field " value placeholder="paterno" id="apellido_paterno" name="apellido_paterno">
	        <br>
	        <input type="text" class="login-field " value placeholder="materno" id="apellido_materno" name="apellido_materno">
	        <br>
	        <input type="text" class="login-field " value placeholder="Nombre" id="nombre" name="nombre">
	        <br>
			<label> Sexo:</label>
			<input type="radio" name="sexo" value="M">Masculino
			<br>
			<input type="radio" name="sexo" value="F">Femenino
			<br>
			<input type="number" maxlength="2" class="login-field " value placeholder="Edad" id="edad" name="edad">
	        <br>
	        <input type="email" id="email" class="login-field " value placeholder="E-mail" name="email">	
	        <br>
	        
	        <input type="text" id="nctr_rfc" maxlength="8" class="login-field" value placeholder="No. de Control" name="nctr_rfc">
			<br>
			<button class="btn btn-large btn-primary" type="submit" >Aceptar</button>
			
			<button class="btn btn-large btn-danger fondo_botoncancelar" type="submit">Cancelar</button>
</form>
		
<?php
  include("../layouts/footer.php");
?>
