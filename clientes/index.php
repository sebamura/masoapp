<?php
require "../controller/conexion.php";

session_start();

$email = $_SESSION['email'] ;

if($_SESSION['status'] != 'pacientes'){
    header('Location: ../index.php');
}

$sql = "SELECT * FROM user WHERE email = '$email';";
$campo = $mysqli->query($sql);

$filaUsuario = $campo->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Masoapp</title>

</head>

<body background="../image/fondoblanco.png">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../index.php">MasoApp</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Inicio <span class="sr-only">(current)</span></a>
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
      <li class="nav-item">
        <a class="nav-link" href="../controller/logout.php">Cerrar sesion</a>
      </li>
    </ul>
  </div>
</nav>
<div class="card" style="width: 18rem;">
  <img src="../image/logo.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $filaUsuario['fullname']; ?></h5>
    <p class="card-text"><?php echo $filaUsuario['rut']; ?></p>
    <p class="card-text"><?php echo $filaUsuario['email']; ?></p>
    <p class="card-text"><?php echo $filaUsuario['address']; ?></p>
  </div>
  <a class="btn btn-primary" href="anamnesis.php" >Crear anamnesis</a>

</div>
<!--<div class="fondo" id="modal-1" style="display:none;">
  <div class="modals">
  <h1>Anamnesis</h1>
  <form id="anamnesis_form">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Sexo</label>
      <input type="text" class="form-control" name="sexo" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Enfermedades</label>
      <input type="text" class="form-control" name="enfermedad" id="inputPassword4">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Alergias </label>
      <input type="text" class="form-control" name="alergias" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Consumo cigarro</label>
      <input type="text" class="form-control" name="cigarro" id="inputPassword4">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Consumo alcohol</label>
      <input type="text" class="form-control" name="alcohol" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Consumo drogas</label>
      <input type="text" class="form-control" name="drogas" id="inputPassword4">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Medicamentos habituales</label>
      <input type="text" class="form-control" name="medicamentos" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Cirujias</label>
      <input type="text" class="form-control" name="cirujias" id="inputPassword4">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">implantes</label>
      <input type="text" class="form-control" name="implantes" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Casos de epilepsia</label>
      <input type="text" class="form-control" name="epilepsia" id="inputPassword4">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Horas de sueño</label>
      <input type="text" class="form-control" name="sueno" id="inputEmail4">
    </div>
  </div>
  </form>
  <button  class="btn btn-primary" id="anamnesis">Crear anamnesis</button>
  </div>-->
</div>




</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="../bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="../js/script.js"></script>
<script>
$(function(){
  $.ajax({
        url:"../controller/verificar.php",
        success:function(e){
          console.log(e)
            if(e == '0' ){
              $('.fondo').show()
              //window.location="../masoapp/../clientes/anamnesis.php"
            }else{
              $('.fondo').hide()
            }
        }
    })
    $('#anamnesis').click(function(){
      var data = $('#anamnesis_form').serialize()
      console.log(data)
      $.ajax({
        url:"./controller/anamnesis.php",
        type:'POST',
        data:data,
        success:function(e){
          $('.fondo').hide()
          $("#modal-1").hide()
        }
      })
    })
})
</script>
