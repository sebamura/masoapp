<?php
require "../controller/conexion.php";
session_start();
$tabla = "";
//paciente = $mysqli -> real_escape_string($_POST['pacientes']);
$sql = "SELECT * FROM anamnesis";
$result = $mysqli->query($sql);

if($result -> num_rows > 0 ){
    $tabla .= "<table class ='table table-striped'>
                <tr>
                    <th>Rut</th>
                    <th>Sexo</th>
                    <th>Fono</th>
                    <th>Enfermedades</th>
                    <th>Alergias</th>
                    <th>Consumo Cigarro</th>
                    <th>Consumo Alcohol</th>
                    <th>Consumo Drogas</th>
                    <th>Medicamentos frecuentes</th>
                    <th>Cirujias</th>
                    <th>Implantes</th>
                    <th>Casos de Epilepsia</th>
                    <th>Horas de Sueño</th>
                </tr>";
    while($row = $result-> fetch_assoc()){
        $id = '"'.$row['detail_id'].'"';
        $tabla .="<tr>
                    <td>".$row['detail_id']."</td>
                    <td>".$row['detail_genero']."</td>
                    <td>".$row['detail_fono']."</td>
                    <td>".$row['detail_sick']."</td>
                    <td>".$row['detail_alergia']."</td>
                    <td>".$row['detail_cigarro']."</td>
                    <td>".$row['detail_alcohol']."</td>
                    <td>".$row['detail_droga']."</td>
                    <td>".$row['detail_medi']."</td>
                    <td>".$row['detail_cirujia']."</td>
                    <td>".$row['detail_implante']."</td>
                    <td>".$row['detail_epilepsia']."</td>
                    <td>".$row['detail_sueno']."</td>
                    <td><button type='button' class='btn btn-primary' onClick='editar(".$id.")'>Editar</button></td>
                </tr>";
    }
    $tabla .="</table>";
}else{
    $tabla = "No se encontraron pacientes";
}

echo $tabla;

?>
