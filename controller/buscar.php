<?php
require "../controller/conexion.php";
session_start();
$tabla = "";
//paciente = $mysqli -> real_escape_string($_POST['pacientes']);
$sql = "SELECT * FROM user";
$result = $mysqli->query($sql);

if($result -> num_rows > 0 ){
    $tabla .= "<table class ='table table-striped'>
                <tr>
                    <th>Nombre</th>
                    <th>Rut</th>
                    <th>email</th>
                    <th>direccion</th>
                </tr>";
    while($row = $result-> fetch_assoc()){
        $tabla .="<tr>
                    <td>".$row['fullname']."</td>
                    <td>".$row['rut']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['address']."</td>

                </tr>";
    }
    $tabla .=" </table>";
}else{
    $tabla = "No se encontraron pacientes";
}

echo $tabla;

?>