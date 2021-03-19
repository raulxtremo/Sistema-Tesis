<?php
require('./connection.php');

$ci = $_POST['ci'];
$calificacion = $_POST['calificacion'];
$id = $_COOKIE['id'];

$buscarEstudiantesql = "SELECT id FROM usuarios WHERE cedula='$ci' LIMIT 1";

$resultadoEstudiante = $conn->query($buscarEstudiantesql);

if ($resultadoEstudiante && $resultadoEstudiante->num_rows > 0) {
    $row = $resultadoEstudiante->fetch_assoc();
    $idEstudiante = $row['id'];

    $fecha = date('Y-m-d');

    $sql = "INSERT INTO actividades (id_materia,id_docente,id_estudiante,nota,periodo,fecha_agregada) 
        VALUES (1,'$id','$idEstudiante','$calificacion','21-II','$fecha')";

    $resultNota = $conn->query($sql);

    if ($resultNota) {
        header('Location:./home.php');
    } else {
        die('Error al ingresar datos ' . $conn->error);
    }
}else{
    die('Error al buscar estudiante '.$conn->error);
}
?>