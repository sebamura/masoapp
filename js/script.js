$(function(){

  

    $('#ingresar').click(function(e){
        e.preventDefault()
        var data = $('#login').serialize() //captura todos los datos dentro del un formulario que tenga la ID #LOGIN
        console.log(data)
        $.ajax({ // <-- asi se llama la funcion 
            url:'controller/login.php',  // url de donde esta el archivo
            data:data,   // la data de serialize 
            type: 'POST',  // si vas a enviar datos a otro archivo  usas el type, si solo lo traes desde un archivo, no es necesario
            success:function(e){
                if(e == 1){
                    console.log('loggeado')
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Logeado correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    setTimeout(function(){
                        window.location="../masoapp/clientes/"
                        }, 1300);
                }else if(e == 2){
                    window.location="../masoapp/doctores/"
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