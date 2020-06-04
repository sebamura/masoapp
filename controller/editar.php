<?php 
require "../controller/conexion.php";
session_start();

$id = $_POST['id'];
echo $sexo = $_POST['sexo'];
echo $fono = $_POST['fono'];
echo $enfermedad =$_POST['enfermedad'];
echo $alergia = $_POST['alergia'];
echo $cigarro = $_POST['cigarro'];
echo $alcohol = $_POST['alcohol'];
echo $droga = $_POST['droga'];
echo $medi = $_POST['medicamento'];
echo $cirujia = $_POST['cirujia'];
echo $implante = $_POST['implante'];
echo $epilepsia = $_POST['epilepsia'];
echo $sueno = $_POST['sueno'];


$sql = "UPDATE `anamnesis` SET `detail_id`='$id',`detail_genero`='$sexo',`detail_fono`='$fono',`detail_sick`='$enfermedad',`detail_alergia`='$alergia',`detail_cigarro`='$cigarro',`detail_alcohol`='$alcohol',`detail_droga`='$droga',`detail_medi`='$medi',`detail_cirujia`='$cirujia',`detail_implante`='$implante',`detail_epilepsia`='$epilepsia',`detail_sueno`='$sueno' WHERE `user_user_id`='$id'";

$result = mysqli_query($mysqli, $sql);
if(!$result){
echo "hubo un error en la query";
  }else{
echo "SE guardó anamnesis con éxito";
  }

?>