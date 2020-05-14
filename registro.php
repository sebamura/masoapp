<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <title>Masoapp</title>
</head>
<body>
    <div class="container">
	<div class="row">
	<div class="col-md-4">
</div>
</div>
</div>
<div class="container">
	<div class="row">
	<div class="col-md-4">
    <form id="registro">

<div class="form-group">
    <label for="Nombre">Nombre completo</label>
    <input type="text" class="form-control" name="nombre" id="email" >
  </div>
  <div class="form-group">
    <label for="rut">Rut</label>
    <input type="text" class="form-control" name="rut" id="rut">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control"  name="email" id="emailA">
  </div>
  <div class="form-group">
    <label for="email">Confirmar Email</label>
    <input type="email" class="form-control"  name="email" id="emailB">
  </div>
  <div class="form-group">
    <label for="contrasena">Contraseña</label>
    <input type="password"  name="contrasena" id="passA">
  </div>
  <div class="form-group">
    <label for="contraseña2">Confirmar contraseña</label>
    <input type="password" name="contrasena2" id="passB">
  </div>
  <div class="form-group">
    <label for="direccion">Direccion</label>
    <input type="text" name="direccion">
  </div>
  <span id="error"></span>
  <button id="registrar" class="btn btn-primary">registrar</button>
</form>
</div>
</div>
</div>   
    <div class="container">
	<div class="row">
	<div class="col-md-4">
    </div>
</div>
</div>
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="./bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="js/script.js"></script>