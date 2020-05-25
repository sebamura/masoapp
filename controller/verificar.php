<?php
require "../controller/conexion.php";
session_start();
$email = $_SESSION['email'];
//verificar anamnesis

$sql = "SELECT * FROM user WHERE email = '$email';";
$campo = $mysqli->query($sql);

$filaUsuario = $campo->fetch_assoc();

 $id =  $filaUsuario['rut'];

$sql2 = "SELECT * FROM  `status` WHERE id_usuario ='$id';";
 $campo2 = $mysqli->query($sql2);
 if(mysqli_num_rows($campo2)>0){
    $fila = $campo2->fetch_array(MYSQLI_ASSOC);
    echo $id2 = $fila['estado'];
 }

?>
