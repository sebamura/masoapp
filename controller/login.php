<?php
	require "../controller/conexion.php";
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email = '$email' AND clave  = '$password';";
    $result = mysqli_query($mysqli, $sql);


    $fila= mysqli_num_rows($result);

    if($fila>0){
        $res = 1;
        $_SESSION['email'] = $email;
        $_SESSION['status'] = "paciente";
    }else{
        $sql = "SELECT * FROM admin WHERE admin_email = '$email' AND admin_password  = '$password';";
        $result = mysqli_query($mysqli, $sql);
        $fila= mysqli_num_rows($result);
        $res = 2;
        $_SESSION['status'] = "doctores";
    }
        // EINCRIPTAR PASSWORD
        // $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
    echo $res;
?>