<div class="container contenedor">
    <div class="titulo">
        <h2>Bienvenido</h2>
    </div>
    <hr>
    <div class="contenedor-E-D-A">
        <?php
        if (isset($_GET['misCalificaciones'])) {
            include './ver-calificaciones.php';
        } else {
            echo '
                <div class="e-d-a">
                    <div class="thumb">
                        <a href="./home.php?misCalificaciones=true"><img src="./img/consultar.png" width="150px" height="150px" alt="estudiante"></a>
                    </div>
                    <div class="descripcion">
                        <h3 class="nombre">Consultar Calificación</h3>
                    </div>
                </div>
                ';
        }
        ?>
    </div>
</div>