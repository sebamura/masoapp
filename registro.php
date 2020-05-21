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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">MasoApp</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="registro.php">Registro</a>
      </li>
      <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Quienes Somos</h4>
			</div>
			<div class="modal-body">
				Texto Quienes somos
			</div>
		</div>
	</div>
</div>
<li class="nav-item active"> 
<a class="nav-link" href="#" data-toggle="modal" data-target="#miModal"> Quienes Somos</a> 
</li>
<div class="modal fade" id="miModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Contacto</h4>
			</div>
			<div class="modal-body">
				Texto de contacto
			</div>
		</div>
	</div>
</div>
<li class="nav-item active"> 
<a class="nav-link" href="#" data-toggle="modal" data-target="#miModal2"> Contacto</a> 
</li>
    </ul>
  </div>
</nav>

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
    <input type="password"  class="form-control" name="contrasena" id="passA">
  </div>
  <div class="form-group">
    <label for="contrasena2">Confirmar contraseña</label>
    <input type="password" class="form-control" name="contrasena2" id="passB">
  </div>
  <div class="form-group">
    <label for="direccion">Direccion</label>
    <input type="text" class="form-control" name="direccion">
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