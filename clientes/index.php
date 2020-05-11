<?php
 session_start();

echo $_SESSION['email']  ;

if($_SESSION['status'] != 'paciente'){
    header('Location: ../doctores/index.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masoapp</title>
</head>
<body>
    vista de usuario normal
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="./bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="js/script.js"></script>
<script>
  $.ajax({
        url:"../controller/verificar.php",
        success:function(e){
            console.log(e)
        }
    })

</script>
