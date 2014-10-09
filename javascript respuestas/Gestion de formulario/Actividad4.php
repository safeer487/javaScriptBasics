<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
</head>
<body>
    


        <h4>Formulario de contacto</h4>
            <form action="Actividad4proceso.php" method="post" id="formContacto">
                                        
                Nombre<br>
                <input type="text"  name="contactName" id="contactName" value="" maxlength="50" /><br>
                    
                 E-mail<br>
                <input type="text"  name="email" id="email" value="" /><br>

                Telefono<br>
                <input type="text" name="telefono" id="telefono" value="" pattern="[0-9]{9}"><br>
                    
                 Asunto<br>
                <input type="text"  name="subject" id="subject" value="" /><br>
                    
                 Mensaje<br>
                 <textarea name="message" id="mensaje" rows="5" cols="60"></textarea><br>
                 
                 ¿Ordenador como se llama en ingles?<br>
                 <input type="text" id="pregunta" name="pregunta" required><br>
                
                <input type="button" onclick="validarForm()" value="validar">
             </form>

            
            <script>
            function validarForm(){
                //recoger variable
                var elemNom = document.getElementById('contactName');
                var elemEmail = document.getElementById('email');
                var elemTelefono = document.getElementById('telefono');
                var elemMensaje = document.getElementById('mensaje');
                var elemPregunta = document.getElementById('pregunta');
                var formContacto = document.getElementById('formContacto');
                var maxNomLen = 50;
                var maxMailLen = 100;
                var maxMensajeLen = 500;
                var maxTelLen = 9;
                var respuesta = "computer";
                var bError = false;


                /**
                 * Comprobaciones
                 */
                //no sea vacio
                if(elemNom.value == 0){
                    elemNom.focus();
                    bError = true;
                    alert('Tiene que rellanar el campo del nombre');
                }
                //no puede tener numeros
                if(!isNaN(elemNom.value)){
                    elemNom.focus();
                    bError = true;
                    alert('El nombre no puede tener numeros');
                }
                //maximo 50 caracters
                if(elemNom.value.length > maxNomLen){
                    elemNom.focus();
                    bError = true;
                    alert('El nombre no puede tener mas de 50 caracters')
                }
                
                //el nombre no puede tener espacio blanco
                if(elemNom.value.search(' ') != -1){
                    elemNom.focus();
                    bError = true;
                    alert('el nombre no puede tener espacios');

                }

                //el email no puede tener espacio blanco
                if(elemEmail.value.search(' ') != -1){
                    elemEmail.focus();
                    bError = true;
                    alert('el email no puede tener espacio blanco');
                }
                
                //el email no puede tener mas de 100 characters
                if(elemEmail.value.length > maxMailLen){
                    elemEmail.focus();
                    bError = true;
                    alert('El email no puede tener mas de 100 caracters')
                }
                //validar email
                if(elemEmail.value.search('@') == -1 || elemEmail.value.search('.') == -1){
                    elemEmail.focus();
                    bError = true;
                    alert('Email incorecto.');
                }

                //telefono obligatorio
                if(elemTelefono.value == ''){
                    elemTelefono.focus();
                    bError = true;
                    alert('El campo de telefono es obligatorio');
                }

                //telefono que sea numeros
                if(elemTelefono.value.length == 0 || elemTelefono.value.length > maxTelLen){
                    elemTelefono.focus();
                    bError = true;
                    alert('Tiene que estar 9 numeros');
                }

                //mensaje obligatorio
                if(elemMensaje.value == ''){
                    elemMensaje.focus();
                    bError = true;
                    alert('El campo de mensaje es obligatorio');
                }

                //mensaje length
                if(elemMensaje.value > maxMensajeLen ){
                    elemMensaje.focus();
                    bError = true;
                    alert('El mensaje no puede tener mas de 500 characters');
                }

                //comprobar pregunta
                if(elemPregunta.value != respuesta){
                    elemPregunta.focus();
                    bError = true;
                    alert('Respuesta incorrecta');
                }

                
                if(!bError) {
                    formContacto.submit();
                }

                

        }


                






            </script>
                                        
</body>
</html>