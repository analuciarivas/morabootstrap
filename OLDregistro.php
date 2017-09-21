<?php
    include_once("funciones.php");

  $nombreDefault = "";
  $apellidoDefault = "";
  $emailDefault = "";
  $edadDefault = "";

   
    if ($_POST) {

      $errores = validarInformacion($_POST);

      if (count($errores) == 0) {
        // armar el usuario
        $usuario = armarUsuario($_POST);
        //guardar el mail
        $mail = $_POST["email"];
        // guardar el usuario
        guardarUsuario($usuario);

        loguear($_POST["email"]);

        //guardar el usuario logueado hasta que haga logout

        if(isset($_POST["recordame"])){
          recordame($_POST["email"]);
        }

        //redirigir a confirmacion

        header("Location:confirmacion.php?success");exit;
      }

      if (!isset($errores["nombre"])) {
        // mostrar lo que ingreso
        $nombreDefault = $_POST["nombre"];
      }

      if (!isset($errores["apellido"])) {
        // mostrar lo que ingreso
        $apellidoDefault = $_POST["apellido"];
      }

      if (!isset($errores["email"])) {
        // mostrar lo que ingreso
        $emailDefault = $_POST["email"];
      }

      if (!isset($errores["edad"])) {
        // mostrar lo que ingreso
        $edadDefault = $_POST["edad"];
      }

     }
?>



<!DOCTYPE html>
<html>
<?php include("head.php");  ?>
<body>

<?php include("header.php");  ?>


<!-- Registrar una cuenta nueva -->
  <div class="main container">


    <div class="formulario col-md-8 col-md-offset-2">
      <h2>Registrate</h2>
      <br/>
      
      <form method="POST" action="registro.php" enctype="multipart/form-data">
        <div class="form-group">
        <!-- LO QUE IMPORTA ES NAME. NAME ES EL SELECTOR DE $_POST -->
        <input type="text" class="form-control" id="nombre" placeholder="NOMBRE" name="nombre" value="<?=$nombreDefault ?>">
          <span class="errores">

            <?php
               if (isset($errores["nombre"])){
                  $errores["nombre"];
                }
             ?>
          </span>
      </div> 

      <div class="form-group">
        <input type="text" class="form-control" id="apellido" placeholder="APELLIDO" name="apellido" value="<?=$apellidoDefault ?>">
          <span class="errores">
            <?php
            if (isset($errores["apellido"])){
              echo $errores["apellido"];
            }
             ?>
          </span>
      </div>

      <div class="form-group">
        <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="<?=$emailDefault ?>">
          <span class="errores">
            <?php
            if (isset($errores["email"])){
              echo $errores["email"];
            }
             ?>
          </span>
      </div>

      <div class="form-group">
        <input type="text" class="form-control" id="edad" placeholder="EDAD" name="edad" value="<?=$edadDefault ?>">
          <span class="errores">
            <?php
            if (isset($errores["edad"])){
              echo $errores["edad"];
            }
             ?>
          </span>
      </div>

      <div class="form-group">
        <input type="password" class="form-control" id="pwd" placeholder="CONTRASEÑA" name="password">
          <span class="errores">
            <?php
            if (isset($errores["password"])){
              echo $errores["password"];
            }
             ?>
          </span>
      </div>

      <div class="form-group">
        <input type="password" class="form-control" id="cpwd" placeholder="CONFIRMAR CONTRASEÑA" name="cpassword">
          <span class="errores">
            <?php
            if (isset($errores["cpassword"])){
              echo $errores["cpassword"];
            }
             ?>
          </span>
      </div>

      <div class="form-group">
          <input type="Checkbox" name="recordame"> <label for="recordame">Recordame</label>
      </div>

      <input class="btn btn-default" type="submit" value="ENVIAR">
      
    </form>
  </div>
</div>





<!-- aca termna el otro texto destacado -->
<?php include("footer.php"); ?>
  </body>
  </html>

