<?php 
require "../controller/conexion.php";
session_start();

$id = $_POST['id'];
//ingresar los datos insert
$sql = "UPDATE `status` SET `estado` = '1' WHERE `status`.`id_usuario` = '$id';";
$result = mysqli_query($mysqli, $sql);


if($result){
    $res = 'anamnesis ok';
}

echo $res;
?>