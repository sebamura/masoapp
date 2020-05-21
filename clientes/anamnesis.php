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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="../bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="../js/script.js"></script>
<input type="text" id="anamnesis" value="<?php echo $filaUsuario['user_id'];?>">
<body> 
<div class="container">
	<div class="row">
	<div class="col-md-4">
    <form id="anamnesis">

<div class="form-group">
    <label for="sexo">Sexo</label>
    <input type="text" class="form-control" name="sexo" id="sexo">
  </div>
  <div class="form-group">
    <label for="enfermedad">enfermedades</label>
    <input type="text" class="form-control" name="enfermedad" id="enfermedad">
  </div>
  <div class="form-group">
    <label for="Alergias">Alergias</label>
    <input type="text" class="form-control"  name="Alergias" id="Alergias">
  </div>
  <div class="form-group">
    <label for="cigarro">Consumo cigarro</label>
    <input type="text" class="form-control"  name="cigarro" id="cigarro">
  </div>
  <div class="form-group">
    <label for="alcohol">Consumo alcohol</label>
    <input type="text"  class="form-control" name="alcohol" id="alcohol">
  </div>
  <div class="form-group">
    <label for="drogas">Consumo drogas</label>
    <input type="text" class="form-control" name="drogas" id="drogas">
  </div>
  <div class="form-group">
    <label for="medi">Medicamentos habituales</label>
    <input type="text" class="form-control" name="direccimedion" id="medi">
  </div>
  <div class="form-group">
    <label for="Cirujias">Cirujias</label>
    <input type="text" class="form-control" name="Cirujias" id="Cirujias">
  </div>
  <div class="form-group">
    <label for="implantes">implantes</label>
    <input type="text" class="form-control" name="implantes" id="implantes">
  </div>
  <div class="form-group">
    <label for="epilepsia">Casos de epilepsia</label>
    <input type="text" class="form-control" name="epilepsia" id="epilepsia">
  </div>
  <div class="form-group">
    <label for="hsueño">Horas de sueño</label>
    <input type="text" class="form-control" name="hsueño" id="hsueño">
  </div>
  <span id="error"></span>
  <button id="ingresar" class="btn btn-primary">registrar</button>
</form>
</div>
</div>
</div>

</body>

<script>
$('#ingresar').click(function(){
    var id = $('#anamnesis').val()
    console.log(id)
    var data ={
        'id':id
    }
    $.ajax({
            url:'../controller/anamnesis.php',
            type: 'POST',
            data:data,
            success:function(a){
                console.log(a)
                window.location="../masoapp/../clientes/"
            }
        })
})

</script>

</html>