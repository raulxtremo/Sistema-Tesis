<div class="contenedor">
        <h3 class="titulo">¿Que deseas hacer?</h3>
        <div class="vista-docente container">
            <button id="agregarCal" class="btn btn-primary mb-1 mt-2">Agregar Calificación</button>
                <?php
                  if(isset($_GET['cali'])){
                  include './agregar-calificacion.php';
                  }
                ?>
            </div>
     <div class="vista-docente container">
         <button id="cerrarSesion" class="btn btn-primary mb-1 mt-2">Cerrar Sesion</button>
     </div>
</div> 

