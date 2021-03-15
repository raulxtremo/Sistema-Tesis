<div class="vista vista-docente container">
    <button id="agregarCal" class="btn btn-primary mb-1 mt-2">Agregar Calificación</button>
    <?php
        if(isset($_GET['cali'])){
            include './agregar-calificacion.php';
        }
    ?>
    <table class="table">
        <thead class="bg-dark">
            <tr class="text-white">
                <td>CI</td>
                <td>Perido 1</td>
                <td>Periodo 2</td>
                <td>Periodo 3</td>
                <td>Periodo 4</td>
                <td>Total</td>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>