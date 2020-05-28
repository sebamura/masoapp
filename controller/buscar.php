<?php
require "../controller/conexion.php";
session_start();
$tabla = "";
$paciente = $mysqli -> real_escape_string($_POST['pacientes']);
$sql = "SELECT * FROM user  WHERE fullname LIKE '%".$paciente."%' OR rut LIKE '%".$paciente."%'";
$result = $mysqli->query($sql);

if($result -> num_rows > 0 ){
    $tabla .= "<table>
                <tr>
                    <th>Nombre</th>
                    <th>Rut</th>
                </tr>";
    while($row = $result-> fetch_assoc()){
        $tabla .="<tr>
                    <td>".$row['fullname']."</td>
                    <td>".$row['rut']."</td>
                </tr>";
    }
    $tabla .=" </table>";
}else{
    $tabla = "No se encontraron pacientes";
}

echo $tabla;

?>