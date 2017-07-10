<?php
    include_once("funciones.php");

    if (estaLogueado()) {
    header("Location:confirmacion.php");exit;
  }


  $emailDefault = "";

  $errores = [];
  if ($_POST) {
    
    if (!isset($errores["email"])) {
          // mostrar lo que ingreso
          $emailDefault = $_POST["email"];
        }

    $errores = validarLogin($_POST);
    if (count($errores) == 0) {
      // LOGUEAR
      loguear($_POST["email"]);
      if (isset($_POST["recordame"])) {
        //Quiere que lo recuerde
        recordame($_POST["email"]);
      }
      header("Location:confirmacion.php");exit;
    }
  } 

?>

<!DOCTYPE html>
<html>
<?php include("head.php");  ?>
<body>
  <?php include("header.php");  ?>



<!-- Login -->
  <div class="main container">


    <div class="formulario col-md-8 col-md-offset-2">
      <h2>Ingresa a tu cuenta</h2>
      <br/>

      <ul class="errores">
        <?php foreach ($errores as $error) : ?>
        <li><?=$error?></li>
        <?php endforeach; ?>
      </ul>

      <form method="POST" action="login.php" enctype="multipart/form-data">
        <div class="form-group">
          <input class="form-control" type="email" name="email" id="email" placeholder="Ingresa tu email" value="<?=$emailDefault ?>">
        </div>

        <div class="form-group">
          <input class="form-control" type="password" name="password" id="password" placeholder="Ingresa tu CONTRASEÑA" value="<?=$emailDefault ?>">
        </div>

        <div class="form-group">
          <input type="Checkbox" name="recordame"> <label for="recordame">Recordame</label>
        </div>

        <div class="form-group">
          <input class="btn btn-default" type="submit" value="ENVIAR">
        </div>
        
      </form>
      <p></p>
    </div>

    <div class="formulario col-md-8 col-md-offset-2">

      <p></p>

      <h3>No estas registrada?</h3>
      <h3><a href="registro.php">Crea una cuenta nueva</a></h3> 

      <p></p>


    </div>

  </div>




<?php include("footer.php");  ?>

</body>
</html>
