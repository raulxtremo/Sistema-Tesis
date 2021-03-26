<?php
require('./connection.php');

$ci = $_POST['ci'];
$calificacion = $_POST['calificacion'];
$id = $_COOKIE['id'];
$materia = $_POST['materia'];
$buscarEstudiantesql = "SELECT id FROM usuarios WHERE cedula='$ci' LIMIT 1";
$periodo = $_POST['periodo'];
$observacion = $_POST['observacion'];
$resultadoEstudiante = $conn->query($buscarEstudiantesql);

if ($resultadoEstudiante && $resultadoEstudiante->num_rows > 0) {
    $row = $resultadoEstudiante->fetch_assoc();
    $idEstudiante = $row['id'];

    $fecha = date('Y-m-d');

    $sql = "INSERT INTO actividades (materia,id_docente,id_estudiante,nota,periodo,observacion,fecha_agregado) 
        VALUES ('$materia','$id','$idEstudiante','$calificacion','$periodo','$observacion','$fecha')";

    $resultNota = $conn->query($sql);

    if ($resultNota) {
        header('Location:./home.php');
    } else {
        echo '<a hredf"./home.php?cali=true">Volver</a><br>';
        die('Error al ingresar datos' . $conn->error);
    }
}else{
    echo '<a href="./home.php?cali=true">Volver</a><br>';
    die('Error al buscar estudiante '.$conn->error);
}
?>
