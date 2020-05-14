<?php

require "../controller/conexion.php";
session_start();
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['contrasena'];
$direccion = $_POST['direccion'];
$rut = $_POST['rut'];

    $sql = "SELECT * FROM user WHERE email = '$email'";   
    $result = mysqli_query($mysqli, $sql);
    $fila= mysqli_num_rows($result);
    if($fila == 0){
        if(!empty($_POST)){
            $sql = "INSERT INTO `user` (`user_id`, `fullname`, `email`, `clave`, `create_at`, `address`, `rut`, `anamnesis_detail_id`) VALUES (NULL, '$nombre', '$email', '$password', CURRENT_TIMESTAMP(), '$direccion', '$rut', '1')";
            $result = mysqli_query($mysqli, $sql);
            if($result){
                echo "usuario guardado";
            }
           
        }
        
    }else{
        echo "El ususario ya existe";
    }
?>