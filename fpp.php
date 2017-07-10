<div class="home-subtitle well blockquote">

        <h3>Queres calcular tu probable de parto?</h3>

      <?php
        if (isset($_GET["mes"])){
          $month = $_GET['mes'];
          $day = $_GET['dia'];
          $year = $_GET['ano'];
          $go = $_GET['go'];
        }
      ?>

      <p>Por favor, ingresá el primer día de tu último ciclo:</p>
     <div class="formulario">
      <form method="GET" action="confirmacion.php">

        <div class="form-group">

         <select name="mes" class="custom-select">
           <option value="1">Enero</option>
           <option value="2">Febrero</option>
           <option value="3">Marzo</option>
           <option value="4">Abril</option>
           <option value="5">Mayo</option>
           <option value="6">Junio</option>
           <option value="7">Julio</option>
           <option value="8">Agosto</option>
           <option value="9">Septiembre</option>
           <option value="10">Octubre</option>
           <option value="11">Noviembre</option>
           <option value="12">Diciembre</option>
         </select>

       <select name="dia" class="custom-select">
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>
         <option value="9">9</option>
         <option value="10">10</option>
         <option value="11">11</option>
         <option value="12">12</option>
         <option value="13">13</option>
         <option value="14">14</option>
         <option value="15">15</option>
         <option value="16">16</option>
         <option value="17">17</option>
         <option value="18">18</option>
         <option value="19">19</option>
         <option value="20">20</option>
         <option value="21">21</option>
         <option value="22">22</option>
         <option value="23">23</option>
         <option value="24">24</option>
         <option value="25">25</option>
         <option value="26">26</option>
         <option value="27">27</option>
         <option value="28">28</option>
         <option value="29">29</option>
         <option value="30">30</option>
         <option value="31">31</option>
       </select>

       <select name="ano" class="custom-select">
         <option value="16">2016</option>
         <option value="17">2017</option>
       </select>

     </div>
     <div class="form-group">

       <input type = "hidden" name = "go" value="1" />
       <button type="submit" name = "calcular" class="btn btn-default">CALCULAR</button>
      </div>

      </form>
      </div>



      <?php
        
        if (isset($_GET["mes"])):

            if ($go =="1")
              {
              $last = mktime (0,0,0,$month, $day, $year) ;
              $gest = 24192000;
              $due = $last + $gest;
            }

      ?>
            <!-- <p>Tu último ciclo comenzó
              <?php
              setlocale(LC_TIME, 'es_ES', 'Spanish_Spain', 'Spanish');
              $dueDATE = $due = str_replace("/","-",$due);
              echo strftime('%d %B %Y',strtotime($dueDATE));
              // echo date("d M Y", $last) ; ?>
            </p> -->

            <p>Tu bebé va a nacer aproximadamente el<br>
              <?php echo date("d", $due) ; ?> de <?php echo date("M", $due) ; ?>, <?php echo date("Y", $due) ; ?>
            </p>

      <?php endif ?>

</div>