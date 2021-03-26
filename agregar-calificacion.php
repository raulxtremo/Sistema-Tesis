<div class="mb-4 bg-light p-3 rounded">
    <form action="./calificaciones.php" method="POST">
        <div class="form-group w-25">
            <label for="periodo">Periodo</label>
            <input type="text" name="periodo" id="periodo" class="form-control" placeholder="####">
        </div>
        <div class="form-group w-50">
            <label for="materia">Materia</label>
            <select name="materia" id="materia" class="custom-select">
                <option value="castellano">Castellano</option>
                <option value="ingles">Inglés</option>
                <option value="matematica">Matemática</option>
                <option value="fisica">Física</option>
                <option value="ghc">GHC</option>
                <option value="ciencias_biologicas">Ciencias Biológicas</option>
                <option value="edu_fisica">Educación Física</option>
                <option value="arte_patrimonio">Arte y Patrimonio</option>
                <option value="quimica">Química</option>
                <option value="soberania">Soberanía</option>
                <option value="ciencias_tierra">Ciencias de la Tierra</option>
            </select>
        </div>

        <div class="form-group w-50">
            <label for="ci">Cédula</label>
            <input type="text" name="ci" id="ci" class="form-control" placeholder="V-1234567">
        </div>
        <div class="form-group w-50">
            <label for="calificacion">Calificación</label>
            <input type="number" name="calificacion" id="calificacion" class="form-control" placeholder="[1-20]">
        </div>
        <div class="form-group">
            <label for="observacion">Observación</label>
            <input type="text" name="observacion" id="observacion" class="form-control" placeholder="Comentarios sobre el estudiante">
        </div>
        <button class="btn btn-success">Agregar</button>
        <a class="btn btn-secondary" href="./home.php">Cancelar</a>
    </form>
</div>