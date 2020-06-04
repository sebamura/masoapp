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

$rut = $filaUsuario['rut'];
$sql2 = "SELECT * FROM anamnesis WHERE detail_id = '$rut' ";
$result = $mysqli->query($sql2);

$datoAnam = $result->fetch_assoc();



?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="../js/script.js"></script>
<body>
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
<h3>Anamnesis</h3>
<form id="datos_form">
<input type="hidden" name="id" value="<?php echo $rut;?>">
<div class="form-row">
<div class="form-group col-md-3">
<label for="Sexo">Sexo</label>
<input class="form-control" type="text" name="sexo" value="<?php echo $datoAnam['detail_genero']; ?>">
<label for="Fono">Fono</label>
<input class="form-control" type="text" name="fono" value="<?php echo $datoAnam['detail_fono']; ?>">
<label for="Enfermedades">Enfermedades </label>
<input class="form-control" type="text" name="enfermedad" value="<?php echo $datoAnam['detail_sick']; ?>">
<label for="Alergias">Alergias </label>
<input class="form-control" type="text" name="alergia" value="<?php echo $datoAnam['detail_alergia']; ?>">
<label for="Cigarro">Consumo Cigarro </label>
<input class="form-control" type="text" name="cigarro" value="<?php echo $datoAnam['detail_cigarro']; ?>">
<label for="Alcohol">Consumo alcohol</label>
<input class="form-control" type="text" name="alcohol" value="<?php echo $datoAnam['detail_alcohol']; ?>">
<label for="Drogas">Consumo drogas</label>
<input class="form-control" type="text" name="droga" value="<?php echo $datoAnam['detail_droga']; ?>">
<label for="Medicamentos">Medicamentos habituales</label>
<input class="form-control" type="text" name="medicamento" value="<?php echo $datoAnam['detail_medi']; ?>">
<label for="Cirujias">Cirujias</label>
<input class="form-control" type="text" name="cirujia" value="<?php echo $datoAnam['detail_cirujia']; ?>">
<label for="Implantes">Implantes</label>
<input class="form-control" type="text" name="implante" value="<?php echo $datoAnam['detail_implante']; ?>">
<label for="Epilepsia">Casos de Epilepsia</label>
<input class="form-control" type="text" name="epilepsia" value="<?php echo $datoAnam['detail_epilepsia']; ?>">
<label for="sueno">Horas de sueño</label>
<input class="form-control" type="text" name="sueno" value="<?php echo $datoAnam['detail_sueno']; ?>">
</div>
</div>
</div>
<button class="btn btn-primary" id="btn">Actualizar</button>
</form>
</body>
</html>
<script>

$('#btn').click(function(e){
    e.preventDefault();
    var data = $('#datos_form').serialize()
    $.ajax({
        url:'../controller/editar.php',
        type:'POST',
        data:data,
        success:function(res){
        console.log(res);
        }
    })
    
})


</script>