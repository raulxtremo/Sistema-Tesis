<?php
require('./connection.php');

$ci = $_POST['ci'];
$calificacion = $_POST['calificacion'];
$id = $_COOKIE['id'];

$buscarEstudiantesql = "SELECT id FROM usuarios WHERE cedula='$ci' LIMIT 1";

$resultadoEstudiante = $conn->query($buscarEstudiantesql);

if ($resultadoEstudiante && $resultadoEstudiante->num_rows > 0) {
    $row = $resultadoEstudiante->fetch_assoc();
    $idEstudante = $row['id'];

    $fecha = date('Y-m-d');

    $sql = "INSERT INTO actividades (id_materia,id_docente,id_estudiante,nota,periodo,fecha_agregado) 
        VALUES (1,'$id','$idEstudante','$calificacion','0121','$fecha')";

    $resultNota = $conn->query($sql);

    if ($resultNota) {
        header('Location:./home.php');
    } else {
        die('Error al ingresar datos ' . $conn->error);
    }
}else{
    die('Error al buscar estuadiante '.$conn->error);
}