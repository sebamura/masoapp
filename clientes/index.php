<?php
 session_start();

echo $_SESSION['email'] ;

if($_SESSION['status'] != 'pacientes'){
    header('Location: ../doctores/index.php');
}
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

<input type="text" value="">
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
        <a class="nav-link" href="registro.php">Registro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../index.php">Cerrar sesion</a>
      </li>
    </ul>
  </div>
</nav>
<div class="card" style="width: 18rem;">
  <img src="../image/logo.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Nombre paciente</h5>
    <p class="card-text">lo que quiera poner el paciente</p>
  </div>
</div>
    vista de usuario normal
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="../bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="../js/script.js"></script>
<script>
  $.ajax({
        url:"../controller/verificar.php",
        success:function(e){
            console.log(e)
        }
    })
//de bootstrap ?
</script>
