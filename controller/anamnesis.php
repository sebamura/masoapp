<?php 
require "../controller/conexion.php";
session_start();

$email = $_SESSION['email'];

$sql = "SELECT * FROM user WHERE email = '$email';";
$campo = $mysqli->query($sql);
$filaUsuario = $campo->fetch_assoc();
$id =  $filaUsuario['rut'];


echo $sexo = $_POST['sexo'];
echo $fono = $_POST['fono'];
echo $enfermedad =$_POST['enfermedad'];
echo $alergia = $_POST['alergias'];
echo $cigarro = $_POST['cigarro'];
echo $alcohol = $_POST['alcohol'];
echo $droga = $_POST['drogas'];
echo $medi = $_POST['medicamentos'];
echo $cirujia = $_POST['cirujias'];
echo $implante = $_POST['implantes'];
echo $epilepsia = $_POST['epilepsia'];
echo $sueno = $_POST['sueno'];

$sql2="INSERT INTO `anamnesis` VALUES ('$id', '$sexo', '$fono', '$enfermedad', '$alergia', '$cigarro', '$alcohol', '$droga', '$medi', '$cirujia', '$implante', '$epilepsia', '$sueno', '$id')";
    $resultado = mysqli_query($mysqli,$sql2);
    if(!$resultado){
      console.log("hubo un error en la query");
    }else{
      alert("SE guardó anamnesis con éxito");
    }
$result = mysqli_query($mysqli, $sql2);
$result;
if($result){
         //ingresar los datos insert
    $sql = "UPDATE `status` SET `estado` = '1' WHERE `status`.`id_usuario` = '$id';";
    $result2 = mysqli_query($mysqli, $sql);
    $res = true;

}else{
    $res = false;
}
echo $res;
?>