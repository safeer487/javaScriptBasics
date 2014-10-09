<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
</head>
<body>
	<form action="procesar.php" id="formMain">
		<input type="text"  id="numDNI" placeholder="Numero del DNI">
		<input type="text"  id="letraDNI" placeholder="Letra del DNI">
		<input type="password"  id="pass1" placeholder="Password">
		<input type="password" id="pass2" placeholder="Repeat password">
		<input type="button" value="validar" onclick="validarForm()">
	</form>

	<script>
		/**
		 * Método que valida el formulario y lo envia
		 */
		 function validarForm(){
		 	//variable
		 	var elemNumDNI = document.getElementById('numDNI');
		 	var elemLetraDNI = document.getElementById('letraDNI');
		 	var elemPass1 = document.getElementById('pass1');
		 	var elempass2 = document.getElementById('pass2');
		 	var bError = false;
		 	var iLogNumDNI = 8;
		 	var iLogLetraDNI = 1;
		 //////////////////////
		 ///Comprobaciones/////
		 /////////////////////
		 ///NumDNI tiene 8 cifras
		 if(elemNumDNI.value.length != iLogNumDNI){
		 	//Le damos el foco
		 	elemNumDNI.focus();
		 	//informamos
		 	alert('Los números del DNI debe tener' + iLogNumDNI + 'cifras.');
		 	//Nos guardamos si se ha producido un error
		 	bError = true;

		 }
		 //comprobamos que sean numeros
		  if(isNaN(elemNumDNI.value)){
		 	//Le damos el foco
		 	elemNumDNI.focus();
		 	//informamos
		 	alert('Los números del DNI deben ser numeros.');
		 	//Nos guardamos si se ha producido un error
		 	bError = true;
		 }

		 //comprobamos que si tiene una letra
		 if(elemLetraDNI.value.length != iLogLetraDNI){
		 	//Le damos el foco
		 	elemLetraDNI.focus();
		 	//informamos
		 	alert('Solo hay que poner la primera letra');
		 	//Nos guardamos si se ha producido un error
		 }

		  //comprobamos que no sea numero
		  if(!isNaN(elemLetraDNI.value)){
		 	//Le damos el foco
		 	elemLetraDNI.focus();
		 	//informamos
		 	alert('Las letras del dNI debe ser alphabato.');
		 	//Nos guardamos si se ha producido un error
		 	bError = true;
		 }

		 //comprobamos que si password sean igual
		 if(elemPass1.value != elempass2.value){
		 	//Le damos el foco
		 	elemPass1.focus();
		 	//informamos
		 	alert('Los password no coinciden.');
		 	//Nos guardamos si se ha producideo un error
		 	bError = true;
		 }

		 /**
		  *Envia formulario
		  */
		 if(!bError){
		 	//Resumida
		 	document.getElementById('formMain').submit();
		 	//Más explicativo
		 	var elemForm = document.getElementById('formMain');
		 	elemForm.submit();
		 }

		 }


	</script>



	
</body>
</html>