<?php
	require "../controller/conexion.php";
    session_start();
    $email = $_POST['email'];
    $clave = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email = '$email' AND clave = '$clave';";
    $result = mysqli_query($mysqli, $sql);

    $fila= mysqli_num_rows($result);

    if($fila>0){
        $res = 1;
        $_SESSION['email'] = $email;
        $_SESSION['status'] = "pacientes";
    }else{
        $sql = "SELECT * FROM admin WHERE admin_email = '$email' AND admin_password  = '$clave';";
        $result = mysqli_query($mysqli, $sql);
        $fila= mysqli_num_rows($result);
        $res = 2;
        $sql2 = "SELECT * FROM admin WHERE admin_email = '$email' AND admin_password  = '$clave';";
        $result2 = mysqli_query($mysqli, $sql2);
        $fila2= mysqli_num_rows($result2);
        $_SESSION['email'] = $email;
        $_SESSION['status'] = "doctores";

        if($fila2>0){
            $res = 2;
        }else{
            $res = 3;
        }
        
    }
        // EINCRIPTAR PASSWORD
        // $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
    echo $res;
?>








