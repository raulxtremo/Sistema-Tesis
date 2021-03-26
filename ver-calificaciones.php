<?php
require('./connection.php');
$id_estudiante = $_COOKIE['id'];

$sql = "SELECT * FROM actividades 
        WHERE id_estudiante='$id_estudiante' ORDER BY materia";

$resultado = $conn->query($sql);
if (!$resultado) {
    die('nope ' . $conn->error);
}
?>
<div class="calificaiones">
    <table class="table table-bordered table-hover">
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
            function mostrarNotas($materia,$nombreMateria){
                if (sizeof($materia) > 0) {
                    echo '<tr>';
                        echo '<td scope="row">'.$nombreMateria.'</td>';
                        foreach ($materia as $key => $value) {
                            echo '<td>'.$value['nota'].'</td>';
                        }
                    echo '</tr>';
                }
            }
            $castellano = array();
            $ingles = array();
            $matematica = array();
            $fisica = array();
            $ghc = array();
            $ciencias_biologicas = array();
            $edu_fisica = array();
            $arte_patrimonio = array();
            $quimica = array();
            $soberania = array();
            $ciencias_tierra = array();
            while ($row = $resultado->fetch_assoc()) {
                switch ($row['materia']) {
                    case 'castellano':
                        array_push($castellano, $row);
                        break;
                    case 'ingles':
                        array_push($ingles, $row);
                        break;
                    case 'matematica':
                        array_push($matematica, $row);
                        break;
                    case 'fisica':
                        array_push($fisica, $row);
                        break;
                    case 'ghc':
                        array_push($ghc, $row);
                        break;
                    case 'ciencias_biologicas':
                        array_push($ciencias_biologicas, $row);
                        break;
                    case 'edu_fisica':
                        array_push($edu_fisica, $row);
                        break;
                    case 'arte_patrimonio':
                        array_push($arte_patrimonio, $row);
                        break;
                    case 'quimica':
                        array_push($quimica, $row);
                        break;
                    case 'soberania':
                        array_push($soberania, $row);
                        break;
                    case 'ciencias_tierra':
                        array_push($ciencias_tierra, $row);
                        break;

                    default:
                        # code...
                        break;
                }
            }
            mostrarNotas($ghc,'GHC');
            mostrarNotas($castellano,'Castellano');
            mostrarNotas($ingles,'Inglés');
            mostrarNotas($matematica,'Matemáticas');
            mostrarNotas($fisica,'Física');
            mostrarNotas($ciencias_biologicas,'Ciencias Biológicas');
            mostrarNotas($edu_fisica,'Educación Física');
            mostrarNotas($arte_patrimonio,'Arte y Patrimonio');
            mostrarNotas($quimica,'Química');
            mostrarNotas($soberania,'Soberanía');
            mostrarNotas($ciencias_tierra,'Ciencias de la Tierra');
            // if (sizeof($ghc) > 0) {
            //     echo '<tr>';
            //         echo '<td>GHC</td>';
            //         foreach ($ghc as $key => $value) {
            //             echo '<td>'.$value['nota'].'</td>';
            //         }
            //     echo '</tr>';
            // }
            ?>
        </tbody>
    </table>
</div>