<?php 
require "../controller/conexion.php";
session_start();

$email = $_SESSION['email'];

$sql = "SELECT * FROM user WHERE email = '$email';";
$campo = $mysqli->query($sql);
$filaUsuario = $campo->fetch_assoc();
$id =  $filaUsuario['rut'];


echo $sexo = $_POST['sexo'];

echo $enfermedad =$_POST['enfermedad'];
echo "---";
echo $alergia = $_POST['alergias'];
echo "---";
echo $cigarro = $_POST['cigarro'];
echo "---";
echo $alcohol = $_POST['alcohol'];
echo "---";
echo $droga = $_POST['drogas'];
echo "---";
echo $medi = $_POST['medicamentos'];
echo "---";
echo $cirujia = $_POST['cirujias'];
echo "---";
echo $implante = $_POST['implantes'];
echo "---";
echo $epilepsia = $_POST['epilepsia'];
echo "---";
echo $sueno = $_POST['sueno'];
echo "---";

$sql2= "UPDATE `anamnesis` SET
`detail_genero` = '$sexo',
`detail_fono` = '3',
`detail_sick` = '$enfermedad',
`detail_alergia` = '$alergia',
`detail_cigarro` = '$cigarro ',
`detail_alcohol` = '$alcohol',
`detail_droga` = '$droga',
`detail_medi` = '$medi',
`detail_cirujia` = '$cirujia',
`detail_implante` = '$implante',
`detail_epilepsia` = '$epilepsia',
`detail_hsueño` = '$sueno',
`user_user_id` = 2
WHERE `detail_id` = '$id';
";
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