<?php 
$inc = include('./connection.php');
if ($inc) {
	$consulta = "SELECT * FROM actividades";
	$resultado = mysql_query($conn,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()){
			$id = $row['id'];
			$idmateria = $row['id_materia'];
			$iddocente = $row['id_docente'];
			$idestudiante = $row['id_estudiante'];
			$nota = $row ['nota'];
			$fechaagg = $row ['fecha_agregada'];
			$periodo = $row ['periodo'];
			?>
			<
		}
	}
}
?>