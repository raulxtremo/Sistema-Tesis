<!DOCTYPE html>
<html>
<head>
    <title>Registrar Calificación</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,
    initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div>
    <form action="./calificaciones.php" method="POST">
            <select name="materia" id="materia" class="custom-select">
            </select>

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
        				<?php
                    require('./connection.php');
                    $id_profesor = $_COOKIE['id'];
                    $buscarMaterias = "SELECT * FROM materia WHERE id_docente='$id_profesor'";

                    $resultadoMaterias = $conn->query($buscarMaterias);

                    while($row = $resultadoMaterias->fetch_assoc()){
                        echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
                    }
                ?>
    </form>
</div>
</body>
</html>