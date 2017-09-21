<?php
    require_once("soporte.php");

?>

<!DOCTYPE html>
<html>
  <?php
  include("head.php");
  ?>



<body>
  <?php include("header.php");  ?>



  <!-- aca va la imagen de arriba - hero element -->
  <div class="parallax-hero">
    <div class="hero-text">
      <img href src="img/Logo.jpg" alt="Mora" class="logo">
      <h1>maternity</h1>
      <p>Prendas exclusivas para el embarazo, postparto y lactancia </p>
    </div>
  </div>
  <div class="parallax-content">
      <section class="home-subtitle">
        <h4>Porqué Mora Maternity</h4>
        <p></p>
        <p><em>Durante nueve meses tu cuerpo se transforma para convertirse en un ambiente habitable y seguro para alguien más. Nuestros productos estan diseñados para que puedas adaptarte a los cambios, sin cambiar tu onda.</em></p>
      </section>
    </div>
  <!--// fin parallax content -->




  <!-- estos son los productos destacados -->
  <div class="main container">


    <div class="row">
    <hr class="hr--underline">

    <div class="home-subtitle">
       <h4>los imprescindibles</h4>
            <div class="col-sm-4">
              <img src="img/calzaDestacados.jpg" class="img-thumbnail" alt=" " width=300px>
        			<h3>mejorar la postura</h3>
        			<p>A demanda. A medida que crece la panza aumenta el soporte abdominal y lumbar de nuestros diseños.</p>
              <h3><a>leggings y fajas de embarazada</a></h3>
        		</div>

        		<div class="col-sm-4">
        			<img src="img/moratop-02.jpg" class="img-thumbnail" alt=" " width=300px>
        			<h3>ponerle el pecho</h3>
        			<p>La leche materna es lo mejor para el bebe. Nuestra linea incorpora el diseño para facilitar la lactancia.</p>
              <h3><a>camisones, chemissettes y corpiños</a></h3>
        		</div>

        		<div class="col-sm-4">
        			<img src="img/trusaDestacados.jpg" class="img-thumbnail" alt=" " width=300px>
        			<h3>sin costuras</h3>
        			<p>Sin marcas, extrasuave. La tecnología del tejido sin costuras garantiza la suavidad en todas las etapas del embarazo.</p>
              <h3><a>linea seamless</a></h3>
        		</div>

    </div>
  </div>

  <!-- aca terminan los productos destacados -->


  <!-- aca empiezan las promociones -->
  	<div class="row">
    <hr class="hr--underline">
      <section class="home-subtitle">
        <h4>promociones</h4>

            <div class="col-sm-6">
              <img src="img/trusa.jpg" class="img-thumbnail" alt=" " width=auto>
              <h3>TRUSA</h3>
        		</div>

        		<div class="col-sm-6">
        			<img src="img/postparto.jpg" class="img-thumbnail" alt=" " width=auto>
              <h3>BODY POSTPARTO</h3>
        		</div>
      </section>
    </div>

  <!-- aca terminan las promociones -->


  <!-- aca hay otro texto destacado, esta vez con una foto -->
  <div class="row">
  <hr class="hr--underline">

    <div class="col-sm-6">
      <h4>Corpiño, Aliado</h4>
      <p></p>
      <p>Tiene tirantes elásticos, graduables y anchos -- para evitar que se claven en los hombros. Tiene varias posiciones de enganche, para adaptarse a tus cambios. Una copa reforzada para sujetar el pecho, pero sin costuras que puedan rozar el seno o el pezón, ni elementos rígidos que dejen marcas. Y los mas importante: cierres en formato "snap" en los breteles que te dejan hacerlo desaparecer a la hora de amamantar.</p>
    </div>

    <div class="col-sm-6">
    <img src="img/promo2-01.jpg" class="img-thumbnail" alt=" " width=100%>
    </div>
  </div>
  </div>

  <!-- aca termna el otro texto destacado -->
  <?php include("footer.php"); ?>
</body>
</html>
