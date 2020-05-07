<?php
	require "../controller/conexion.php";
    session_start();
    $res = false;
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email = '$email' AND clave  = '$password';";
    $result = mysqli_query($mysqli, $sql);
    $fila= mysqli_num_rows($result);

    if($fila>0){
       // $_session['usuario'] = $fila['fullname'];
        $res = true;
    }else{
        $res = false;
    }
        // EINCRIPTAR PASSWORD
        // $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
    echo $res;
?>