<?php
session_start();
echo $_SESSION['email']  ;
if($_SESSION['status'] != 'doctores'){
    header('Location: ../clientes/index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masoapp</title>
</head>
<body>
    vista de doctores
</body>
</html>

