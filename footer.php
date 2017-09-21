  <!-- comienza el navbar -->

<?php

require_once("soporte.php");

$usuarioLogueado = $auth->usuarioLogueado($db);

if ($usuarioLogueado == NULL) {
      $logout = "<a href='logout.php'>Logout <i class='glyphicon glyphicon-log-out'></i></a>";
    } else {
      $logout = "<a href='logout.php'>Logout <i class='glyphicon glyphicon-log-out'></i></a>";
    }
 ?>

 <!-- fin de banner promociones sobre el footer -->


  <!-- aca comienza banner promociones sobre el footer -->

  <div class="info-bar">
            <h5>Envio gratis con tu compra de $1500 o Mas!</h5>
          </div>

  <!-- fin de banner promociones sobre el footer -->

  <footer>
    <div class="container">
      <div class="row">

        <div class="footer-menu col-md-3">
          <h4>Menu</h4>
          <hr class="hr--underline">
          <ul class="navigation">
            <li><a href="index.php">Home</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><?=$logout?></li>
          </ul>
          <p></p>
        </div>

        <div class="footer-about col-md-6">
          <h4>Mora Maternity</h4>
          <hr class="hr--underline">
          <p>Un sitio pensado especialmente para esos momentos en que pareciera que para ser vos misma, tenés que ser otra.</p>
        </div>

        <div class="footersocial col-md-3">
          <h4>Seguinos</h4>
          <hr class="hr--underline">
          <ul class>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          </ul>
        </div>
        </div>

      </div>

    </div>
    </footer>


  <!-- adds jQuery via Google CDN before the closing </body> tag… -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="path/to/instafeed.min.js"></script>
  <!-- end of jQuery -->
