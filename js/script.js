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
                    console.log('logOk')
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Ingreso correcto',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    setTimeout(function(){
                        window.location="../masoapp/clientes/"
                        }, 1300);
                }else if(e == 2){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Logeado correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    })
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
    $('#registrar').click(function(e){
        $('#error').html()
        e.preventDefault()
        var data = $('#registro').serialize()
        console.log(data)
        var emailA = $('#emailA').val()
        var emailB = $('#emailB').val()
        var passA = $('#passA').val()
        var passB = $('#passB').val()
        var rut = $('#rut').val()

        if(!ValidaRut(rut)){
            $('#error').html('el formato rut no es valido')
        }


        if(!verificar(emailA,emailB)){
            $('#error').html('el email no coincide')
        }
        if(!verificar(passA,passB)){
            $('#error').html('la contraseña no coincide')
        }
        if(verificar(emailA,emailB) && verificar(passA,passB) &&  ValidaRut(rut)){
           
            $('#error').html()
            console.log('ok')


            $.ajax({
                url:'controller/registrar.php',
                data:data,
                type: 'POST',
                success:function(res){
                    console.log(res)
                }
            })
        }


    })
    function verificar(a,b){
        if(a == b){
            return true
        }else{
            return false
        }
    }
    function ValidaRut(cRut) {

        cRut = cRut.replace(/[\.-]/g, "");
        cRut = cRut.toUpperCase();
        var patt = /^\d{1,8}[0-9K]$/;
        var ok = patt.test(cRut);
        var cStr = cRut.slice(0, -1);
        var cDig = cRut.slice(-1);
        var nSum = 0;
        var nVal = 0;
        var cVal = "";
        if (ok) {
            for (nMul = 2; cStr != ""; nMul = (nMul == 7) ? 2 : nMul + 1) {
                nSum += Number(cStr.slice(-1)) * nMul;
                cStr = cStr.slice(0, -1);
            }
            nVal = 11 - (nSum % 11);
            switch (nVal) {
                case 11:
                    cVal = "0";
                    break;
                case 10:
                    cVal = "K";
                    break;
                default:
                    cVal = nVal.toString();
            }
            ok = cVal == cDig;
        }
        return ok;
    }
})