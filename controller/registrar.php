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

                if($result2){
                    $sql3="INSERT INTO `anamnesis` (`detail_id`, `detail_genero`, `detail_fono`, `detail_sick`, `detail_alergia`, `detail_cigarro`, `detail_alcohol`, `detail_droga`, `detail_medi`, `detail_cirujia`, `detail_implante`, `detail_epilepsia`, `detail_hsueño`, `user_user_id`) VALUES ('$rut', 'vacio', '0', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', 'vacio', '$rut');";
                    echo $result3 = mysqli_query($mysqli, $sql3);
                    if(!$result3){
                        echo 'QUE CHUCHAAAAAAAAA!!!!!!!';
                    }
                }
            }else{
                echo "??";
            }
        }
    }else{
        echo "El ususario ya existe";
    }
?>