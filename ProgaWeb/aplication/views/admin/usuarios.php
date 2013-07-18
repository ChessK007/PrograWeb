<?php
 
  //extra totalmente
  
  include("../../libs/adodb5/adodb-pager.inc.php");
  include("../../libs/adodb5/adodb.inc.php");
  include("../../models/Modelo.php");
  include("../../models/Usuarios.php");
  include("../../controllers/adminControllers/adminController.php");
  include("../layouts/encabezado.php");
?>

<div class="row">
    <?php
      $admin = new AdminController();
      $admin ->lista_usuarios();
    ?>
</div>

<?php
  include("../layouts/footer.php");
?>
