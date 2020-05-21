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
<input type="text">
<input type="text">
<input type="text">
<input type="text">
<input type="text">
<button id="ingresar">ingresar</button>


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