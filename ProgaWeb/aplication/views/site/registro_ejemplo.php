<?php
  include("../../models/Modelo.php");
  include("../../models/UsuariosE.php");
  //extra totalmente
  include("../../libs/adodb5/adodb-pager.inc.php");
  include("../../libs/adodb5/adodb.inc.php");
  include("../../controllers/siteController/RegistroControllers.php");
  
  $usuario = new RegistroControllers();
  if(isset($_POST['usuario'])){
      
        if($usuario->registraUsuarioE( $_POST['usuario'] )){
              header("Location: registroCorrecto.php");
              exit();
        }
  }
?>
<?php
  include("../layouts/encabezado.php");
?>

<div class="row">
    <div class="span6">
      <form class="form-signing" method="POST" action="">
	    Nombre<input type="text" id="usuario[nombre]" name="usuario[nombre]"/>
            <br>
            Email<input type="email" id="usuario[email]" name="usuario[email]"/>
            <br>
            Password<input type="password" id="usuario[password]" name="usuario[password]"/>
            <br>
            <input type="submit" value="Enviar" class="btn btn-primary">
      </form>
    </div>
</div>

<?php
  include("../layouts/footer.php");
?>
