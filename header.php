<?php 

include_once("funciones.php");

$usuarioLogueado = usuarioLogueado();

  if ($usuarioLogueado == NULL) {
      $cuenta = "login.php";
      $nombre = "mi cuenta";
      $logout = " ";

    } else {
      $cuenta = "confirmacion.php";
      $nombre = "mi cuenta";
      $logout = "<a href='logout.php'><i class='glyphicon glyphicon-log-out'></i></a>";
    }
?>

<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
    <!-- button se convierte en hamburguesa en menu mobile -->
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"> </span>
      <span class="icon-bar"> </span>
      <span class="icon-bar"> </span>
    </button>
    <a class="navbar-brand" href="https://www.tiendamora.com.ar/" target="_blank">
      <img alt="Tienda Mora" src="img/logochico.jpg">
    </a>
  </div>
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php">home</a></li>
      <li><a href="<?=$cuenta?>"><?=$nombre?></a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">productos<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">embarazo</a></li>
          <li><a href="#">lactancia</a></li>
          <li><a href="#">post parto</a></li>
        </ul>
        <li><a href="faq.php">faq</a></li>
        <li><?=$logout?></li>
        </ul>
      </div>
    </div>
  </nav>
<!-- termina el navbar -->