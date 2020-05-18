<?php
require "../controller/conexion.php";
session_start();
$email = $_SESSION['email'];
$sql = "SELECT * FROM user WHERE email = '$email';";
$result = mysqli_query($mysqli, $sql);
$fila= mysqli_num_rows($result);

$campo = $mysqli->query($sql);

$filaUsuario = $campo->fetch_assoc();
echo $filaUsuario['fullname'];

//verificar anamnesis 

$sql2 = "SELECT * FROM `user` INNER JOIN `status` ON `user.user_id` = `status.id_usuario` where email = '$email";
$result2 = mysqli_query($mysqli, $sql2);
$campo2 = $mysqli->query($sql2);
$filaUsuario2 = $campo2->fetch_assoc();
//
if($fila>0){

    $res = " ok";

}else{
    $res = "mal";
}
 echo $res;
?>
