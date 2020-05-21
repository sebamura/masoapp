<?php
require "../controller/conexion.php";
session_start();
$email = $_SESSION['email'];
//verificar anamnesis

$sql = "SELECT * FROM user WHERE email = '$email';";
$campo = $mysqli->query($sql);

$filaUsuario = $campo->fetch_assoc();

echo $id =  $filaUsuario['rut'];

$sql2 = "SELECT * FROM  `status` WHERE id_usuario ='$id';";
 $campo2 = $mysqli->query($sql);
 $data = $campo->fetch_assoc();
 echo $id2 =  $data['user_id'];
?>
