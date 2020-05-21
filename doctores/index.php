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
    <title>Masoapp</title>
</head>
<body>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../index.php">MasoApp</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../registro.php">Registro</a>
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
    <h5 class="card-title"><?php echo $filaUsuario['admin_fullname']; ?></h5>
    <p class="card-text"><?php echo $filaUsuario['admin_email']; ?></p>
  </div>
</div>
    vista de doctores
</body>
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<script src="../js/script.js"></script>
</html>

