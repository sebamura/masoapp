<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masoapp</title>
</head>
<body>
    <form id="registro">
        <input type="text" placeholder="nombre" name="nombre">
        <input type="text" placeholder="rut" name="rut" id="rut">
        <input type="text" placeholder="email" name="email" id="emailA">
        <input type="text" placeholder="confirmar email" name="email2" id="emailB">
        <input type="text" placeholder="contraseña" name="contrasena" id="passA">
        <input type="text" placeholder="confirmar contraseña" name="contrasena2" id="passB">
        <input type="text" placeholder="direccion" name="direccion">
        <span id="error"></span>
        <button id="registrar">registrarse</button>
    </form>
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="./bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="js/script.js"></script>