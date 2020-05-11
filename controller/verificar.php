<?php
session_start();

$sql = "SELECT anamnesis_detail_id FROM user WHERE email = $_SESSION['email'];";
$result = mysqli_query($mysqli, $sql);


if($fila>0){
    $res = "ok";
}else{
    $res = "mal";
}
 echo $result;
?>
