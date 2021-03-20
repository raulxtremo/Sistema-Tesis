<?php
require('./connection.php');
$id_estudiante = $_COOKIE['id'];

$sql = "SELECT actividades.*, materia.* FROM actividades 
    JOIN materia ON actividades.id_materia = materia.id 
    WHERE id_estudiante='$id_estudiante' ORDER BY materia.nombre";

$resultado = $conn->query($sql);
if (!$resultado) {
    die('nope ' . $conn->error);
}
?>
<div class="calificaiones">
    <table class="table">
        <thead class="bg-dark text-white">
            <tr>
                <td>Materia</td>
                <td>Actividad I</td>
                <td>Actividad II</td>
                <td>Actividad III</td>
                <td>Actividad IV</td>
                <td>Actividad V</td>
            </tr>
        </thead>
        <tbody class="bt-light">
            <?php
            $recordar = array();
            // $materiasTotales = array();
            // while ($rowMats = $resultado->fetch_assoc()) {
            //     array_push($materiasTotales, $rowMats['nombre']);

            // }
            while ($row = $resultado->fetch_assoc()) {
                echo '<tr>';
                // echo '<td>'.$row['nombre'].'</td>';
                if (!in_array($row['nombre'], $recordar)) {
                    array_push($recordar, $row['nombre']);
                    echo '<td>' . $row['nombre'] . '</td>';
                    echo '<td>' . rand(10,20) . '</td>';
                    echo '<td>' . rand(10,20) . '</td>';
                    echo '<td>' . rand(10,20) . '</td>';
                    echo '<td>' . rand(10,20) . '</td>';
                    echo '<td>' . rand(10,20) . '</td>';
                    // echo '<td>' . $row['nota'] . '</td>';
 
                    
                }
                // if (in_array($row['nombre'], $recordar)) {
                //     foreach ($materiasTotales as $key => $value) {
                //         echo $key;
                //     }
                // }
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>