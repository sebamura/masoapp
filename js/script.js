$(function(){
    $('#ingresar').click(function(e){
        e.preventDefault()
        var data = $('#login').serialize()
        //console.log(data)
        $.ajax({
            url:'controller/login.php',
            data:data,
            type: 'POST',
            success:function(e){
                if(e == true){
                    console.log('loggeado')
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Logeado correctamente',
                        showConfirmButton: false,
                        timer: 1500
                      })
                      setTimeout(function(){ 
                        window.location="../masoapp/views/usuarios/index.php"
                        }, 1300);
                      
                }else{
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Datos incorrectos',
                        showConfirmButton: false,
                        timer: 1500
                      })
                }
            },error:function(e){
                console.log(e)
            }
        })
    })
})