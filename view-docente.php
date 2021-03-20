<div class="contenedor">
  <!-- <section class="E-D-A">

    <div class="contenedor">
      <div class="titulo">
        <h3>Opciones</h3>
      </div>
      <div class="contenedor-E-D-A">

        <div class="e-d-a">
          <div class="thumb">
            <a href="./view-docente.php"><img src="./img/ingresar1.png" width="100px" height="100px" alt="estudiante"></a>
          </div>
          <div class="descripcion">
            <h3 class="nombre">Registrar Calificación</h3>
          </div>
        </div>
        <div class="e-d-a">
          <div class="thumb">
            <a href="./logout.php"><img src="./img/cerrar-sesion.png" alt="estudiante"></a>
          </div>
          <div class="descripcion">
            <h3 class="nombre">Cerrar Sesión</h3>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <h3 class="titulo">¿Que deseas hacer?</h3>
  <div class="vista-docente container">
    <?php
    if (isset($_GET['cali'])) {
      include './agregar-calificacion.php';
    }else{
      echo '<button id="agregarCal" class="btn btn-primary mb-1 mt-2">Agregar Calificación</button> <br> <br>
      ';
    }
    ?>
  </div>
</div>