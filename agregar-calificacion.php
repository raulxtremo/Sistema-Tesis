<div>
    <form action="./calificaciones.php" method="POST">
        <div class="form-group">
            <label for="materia">Materia</label>
            <select name="materia" id="materia" class="custom-select">
                <?php
                require('./connection.php');
                $id_profesor = $_COOKIE['id'];
                $buscarMaterias = "SELECT * FROM materia WHERE id_docente='$id_profesor'";

                $resultadoMaterias = $conn->query($buscarMaterias);

                while ($row = $resultadoMaterias->fetch_assoc()) {
                    echo '<option value="' . $row['id'] . '">' . $row['nombre'] . '</option>';
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="ci">Cédula</label>
            <input type="text" name="ci" id="ci" class="form-control" placeholder="V-1234567">
        </div>
        <div class="form-group">
            <label for="calificacion">Calificación</label>
            <input type="number" name="calificacion" id="calificacion" class="form-control" placeholder="[1-20]">
        </div>
        <div class="form-group">
            <label for="Observacion">Observación</label>
            <input type="text" name="comment" id="comment" class="form-control" placeholder="Observacion">
        </div>
        <button class="btn btn-success">Agregar</button>
        <a class="btn btn-secondary" href="./home.php">Cancelar</a>
    </form>
</div>