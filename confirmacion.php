<?php
    require_once("soporte.php");


    if (isset($_GET["success"])) {
      $saludo = "Gracias por registrarte,";
    }

    $usuarioLogueado = $auth->usuarioLogueado($db);

    if ($usuarioLogueado == null) {
     header("registro.php");exit;
    }
?>

<!DOCTYPE html>
<html>
<?php include("head.php");  ?>
<body>
  <?php include("header.php");  ?>



<div class="main container">

  <div class="row">
  <div class="col-xs-12 col-sm-6 col-md-8 col-md-8 col-md-offset-2">
      <h2><?=$saludo?> <?=$usuarioLogueado["nombre"]?>!</h2>
    <p></p>
  </div>

  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-8 col-md-8 col-md-offset-2">
      <div class="well well-sm">
        <div class="row">

          <!-- Foto de usuario -->
          <div class="col-sm-6 col-md-4">
            <img src="img/icon-01.jpg" width="300px" alt="" class="img-rounded img-responsive" />
          </div>

          <!-- Datos de usuario -->
          <div class="col-sm-6 col-md-8">
            <h4><?=$usuarioLogueado["nombre"]?> <?=$usuarioLogueado["apellido"]?></h4>

            <p>
              <i class="glyphicon glyphicon-envelope"></i> <?=$usuarioLogueado["email"]?>
              <br />
              <i class="glyphicon glyphicon-gift"> </i><?=$usuarioLogueado["edad"]?>
            </p>
            <!-- fpp button -->


            <!-- seach button -->

            <p>Ver productos para</p>
            <div class="btn-group">
              <button type="button" class="btn btn-default">seleccionar</button>
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <span class="caret"></span><span class="sr-only">mostrar</span>
                </button>
                      <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Embarazo</a></li>
                          <li><a href="#">Lactancia +</a></li>
                          <li><a href="#">Postparto</a></li>
                          <li class="divider"></li>
                          <li><a href="#">tienda mora</a></li>
                      </ul>
            </div>
            </div>

          </div>
        </div>
      </div>

    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-8 col-md-8 col-md-offset-2">
          <?php include_once("fpp.php");?>
        <p></p>
      </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-8 col-md-8 col-md-offset-2">
          <h2>Logout: <a href="logout.php"></a> <span class="glyphicon glyphicon-log-out"></span></h2>
        <p></p>
      </div>
    </div>

</div>


<?php include("footer.php"); ?>
</body>
</html>
