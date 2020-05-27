<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <title>Document</title>
</head>
<body background="image/fondoblanco.png">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<img src="image/logo.jpg" width="55" height="55" alt="">
  <a class="navbar-brand" href="#">MasoApp</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio</a>
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
				<h4 class="modal-title" id="myModalLabel">Cerrar</h4>
			</div>
			<div class="modal-body">
				Texto de Quienes Somos
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
				<h4 class="modal-title" id="myModalLabel">Cerrar</h4>
			</div>
			<div class="modal-body">
				Texto de Contacto
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
<br>
    <div class="login">

        <form id="login" method ="POST">
        <div class="form-group ">
            Email
            <input  class="form-control" name="email" type="text">
            <!-- SIEMPRE DEBE TENER UN CAMPO NAME -->
            Contraseña
            <input class="form-control" name="password"  type="password">
            <button id="ingresar">Ingresar</button>
        </div>
    </form>
    </div>
<br>
<br>
    <div class="container">
	<div class="row">
	<div class="col-md-13">

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="image/image4.jpg" class="d-block w-100" alt="no se encuentra">
    </div>
    <div class="carousel-item">
      <img src="image/image2.jpg" class="d-block w-100" alt="no se encuentra">
    </div>
    <div class="carousel-item">
      <img src="image/image3.jpg" class="d-block w-100" alt="no se encuentra">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="./bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="js/script.js"></script>
</html>