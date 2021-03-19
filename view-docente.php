<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registrar Calificación</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no,
  initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Sistema en Linea</title>
  <link rel="stylesheet" type="text/css" href="estilos.css">
  <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
  <style type="text/css">
    .contenedor .cerrar_sesion {
      text-decoration: none;
      padding: 10px 20px;
      margin: 15px;
      background: #007bff;
      color: #fff;
      border-radius: 3px;
    }
  </style>
<div class="contenedor">
        <h3 class="titulo">¿Que deseas hacer?</h3>
        <div class="vista-docente container">
            <button id="agregarCal" class="btn btn-primary mb-1 mt-2">Agregar Calificación</button> <br> <br>
                <?php
                  if(isset($_GET['cali'])){
                  include './agregar-calificacion.php';
                  }
                ?>
                <script src="./funciones.js"></script>
        </div>
        <div class="vista-docente container">
            <a class="cerrar_sesion" id="cerrarSesion" href="logout.php">Cerrar Sesión</a>

        </div> 
</div> 
</body>
</html>

