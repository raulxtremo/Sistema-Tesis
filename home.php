<?php
    if(!isset($_COOKIE['id'])){
        header('Location:./index.html');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,
	initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Sistema en Linea</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/docentes-administracion.css">

</head>
<header>
    <div class="contenedor">
        <nav class="menu">
            <a href="./index.html">Inicio</a>
            <a href="./acerca-de.html">Acerca de</a>
            <?php
                if(!isset($_COOKIE['username'])){
                    echo '<a href="./ingresar.html">Ingresar</a>';
                }else{
                    echo '<a href="./logout.php">Salir</a>';
                }
            ?>
        </nav>

        <div class="contenedor-texto">
            <div class="texto">
                <h1>U.E.N</h1>
                <h2>Laudelino Mejías</h2>
                <p>Sistema en línea para el registro y consulta de calificaciones</p>
            </div>
        </div>
    </div>
</header>

<body>
    <section class="main">
        <section class="acerca-de">
            <div class="contenedor">
                <div class="foto">
                    <img src="./img/logo.jpg" width="115px" height="115px" alt="Laudelino Mejias">
                </div>
            </div>
        </section>
        <?php
        if ($_COOKIE['tipo_usuario'] == 'docente') {
            include './view-docente.php';
        } else if ($_COOKIE['tipo_usuario'] == 'estudiante') {
            include './view-estudiante.php';
        }
        ?>
        <footer class="mb-0 pb-0">
        <div class="p-5"></div>
            <!-- <section class="contacto">
			<div class="contenedor">
				<h3 class="titulo">Contacto</h3>
				<form action="" class="formulario">
					<input type="text" name="nombre" placeholder="Nombre" required="">
					<input type="email" name="correo" placeholder="Correo" required="">
					<textarea name="mensaje" placeholder="Mensaje" required=""></textarea>
					<input class="boton" type="submit" value="Enviar">
				</form>
			</div>
		    </section> -->
            <section class="nosotros">
                <div class="contenedor">
                    <p>Raul Giron & Angel Cuesta</p>
                </div>
            </section>
        </footer>
        <script src="./funciones.js"></script>

</body>

</html>