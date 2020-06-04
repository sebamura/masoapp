<?php

require "../controller/conexion.php";
session_start();
echo $nombre = $_POST['nombre'];
echo $email = $_POST['email'];
echo $password = $_POST['contrasena'];
echo $direccion = $_POST['direccion'];
echo $rut = $_POST['rut'];

    $sql = "SELECT * FROM user WHERE email = '$email'";   
    $result = mysqli_query($mysqli, $sql);
    $fila= mysqli_num_rows($result);
    if($fila == 0){
        if(!empty($_POST)){
            $sql = "INSERT INTO `user` (`user_id`, `fullname`, `email`, `clave`, `create_at`, `address`, `rut`) VALUES ('', '$nombre', '$email', '$password', CURRENT_TIMESTAMP(), '$direccion', '$rut');";
            $result = mysqli_query($mysqli, $sql);
            if($result){
                $sql2 = "INSERT INTO `status` (`id_usuario`, `estado`,`id_anamnesis`) VALUES ('$rut','0', '$rut');";
                echo $result2 = mysqli_query($mysqli, $sql2);
            }else{
                echo "??";
            }
        }
    }else{
        echo "El ususario ya existe";
    }
?>