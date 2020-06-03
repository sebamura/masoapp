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
<html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="../js/script.js"></script>

<body background="../image/fondoblanco.png">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">MasoApp</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Atras <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../controller/logout.php">Cerrar sesion</a>
      </li>
</nav> 

<h1>Anamnesis</h1>
<h3>
<p><?php echo $filaUsuario['rut'];?></p></h3>

  <form  id="data" method="POST">
  <input type= "hidden" name="user_id" value="<?php echo $filaUsuario['rut']?>">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Sexo">Sexo</label>
      <input type="text" class="form-control" name="sexo" id="sexo">
    </div>
    <div class="form-group col-md-6">
      <label for="Fono">Fono</label>
      <input type="text" class="form-control" name="fono" id="fono">
    </div>
    <div class="form-group col-md-6">
      <label for="Enfermedad">Enfermedades</label>
      <input type="text" class="form-control" name="enfermedad" id="enfermedad">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Alergias">Alergias </label>
      <input type="text" class="form-control" name="alergias" id="alergias">
    </div>
    <div class="form-group col-md-6">
      <label for="Cigarro">Consumo cigarro</label>
      <input type="text" class="form-control" name="cigarro" id="cigarro">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Alcohol">Consumo alcohol</label>
      <input type="text" class="form-control" name="alcohol" id="alcohol">
    </div>
    <div class="form-group col-md-6">
      <label for="Drogas">Consumo drogas</label>
      <input type="text" class="form-control" name="drogas" id="drogas">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Medicamentos">Medicamentos habituales</label>
      <input type="text" class="form-control" name="medicamentos" id="medicamentos">
    </div>
    <div class="form-group col-md-6">
      <label for="Cirujias">Cirujias</label>
      <input type="text" class="form-control" name="cirujias" id="cirujias">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Implantes">implantes</label>
      <input type="text" class="form-control" name="implantes" id="implantes">
    </div>
    <div class="form-group col-md-6">
      <label for="Epilepsia">Casos de epilepsia</label>
      <input type="text" class="form-control" name="epilepsia" id="epilepsia">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Sueño">Horas de sueño</label>
      <input type="text" class="form-control" name="sueno" id="sueno">
    </div>
  </div>
  <button  class="btn btn-primary" id="btnguardar">Crear anamnesis</button>
  </form>
  </div>

</body>

<script >

$(document).ready(function(){
  $('#btnguardar').click(function(){
    var datos=$('#data').serialize();
    console.log(datos);
    $.ajax({
      type:"POST",
      url:"../controller/anamnesis.php",
      data:datos,
      succes:function(r){
        if(r==1){
          alert("Agregado exitosamente");
        }else{
          alert("Fallo el server")
        }
      }
    });
    return false;
  });
})

</script>

</html>