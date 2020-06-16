<?php
require "../controller/conexion.php";
session_start();
$email = $_SESSION['email']; ;
if($_SESSION['status'] != 'doctores'){
    header('Location: ../index.php');
}
$sql = "SELECT * FROM admin WHERE admin_email = '$email';";
$campo = $mysqli->query($sql);
$filaUsuario = $campo->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="../js/script.js"></script>
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
        <a class="nav-link" href="index.php">Perfil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="../controller/logout.php">Cerrar sesion</a>
      </li> 
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" id="buscador" aria-label="Search">
    </form>
  </div>
</nav>

<h1>Anamnesis de clientes</h1>
</table>
<div class="container">
<div id="tabla">
</div>
</table>
</body>

<script>
$(function(){
  $.ajax({
    url:'../controller/anambuscar.php',
    success: function(r){
      $('#tabla').html(r);
    }
  })
})
function editar(idedit){
  
}


</script>

</html>