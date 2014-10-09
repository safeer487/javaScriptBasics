<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
</head>
<body>
	<h1>Introduzca su fecha de nacimiento</h1>
	<form action="#">
		<input type="text" id="dia" placeholder="dia">
		<input type="text" id="mess" placeholder="mess">
		<input type="text" id="año" placeholder="año">
		<input type="button" value="Entrar" onclick="validarForm()">
	</form>
	
	<script>
	function validarForm(){
		var elemDia = document.getElementById('dia');
		var elemMess = document.getElementById('mess');
		var elemAnyo = document.getElementById('año');

		var fecha = new Date();
		//getFullYear is to verify the current year
		var iAnyoActual = fecha.getFullYear();


		//variables
		var iEdadlegal = 18;
		var bError = false;
		var iLongDia = 2;
		var iLongMess = 2;
		var iLongAnyo = 4;
		var iLongLimAnyo = iAnyoActual - iEdadlegal;

		/**
		 * Comprobaciones
		 */
		//que no sea menor que 18
		if(iAnyoActual - elemAnyo.value < iEdadlegal){
			window.location = 'http://google.es';
		} else{
			window.location = 'http://yahoo.es';
		}


		//isNaN comprueba si es el texto o no
		
		//que dia sea numero
		if(isNaN(elemDia.value)){
			elemDia.focus();
			alert('El dia debe ser numero no alphabatico');
			bError = true;
		}
		//que mess sea numero
		if(isNaN(elemMess.value)){
			elemMess.focus();
			alert('El mess debe ser numero no alphabatico');
			bError = true;
		}
		//que año sea numero
		if(isNaN(elemAnyo.value)){
			elemAnyo.focus();
			alert('El anyo debe ser numero no alphabatico');
			bError = true;
		}



		//el dia no puede estar mas de 2 digitos
		if(elemDia.value.length != iLongDia){
			elemDia.focus();
			alert('El dia no puede tener mas de 2 caracters');
			bError = true;
		}

		//el mess no puede estar mas de 2 digitos
		if(elemMess.value.length != iLongMess){
			elemMess.focus();
			alert('El mess no puede tener mas de 2 caracters');
		}

		//el anyo no puede estar mas de 4 digitos
		if(elemAnyo.value.length != iLongAnyo){
			elemAnyo.focus();
			alert('El anyo no puede tener mas de 4 caracters');
			bError = true;

		}

		//que sea el dia mas que 0 y menos que 31
		if(elemDia.value <= 0 || elemDia.value > 31){
			elemDia.focus();
			alert('Tiene que poner un dia valida');
			bError = true;
		}

		//que sea el mess mas que 0 y menos que 12
		if(elemMess.value <= 0 || elemMess.value > 12){
			elemMess.focus();
			alert('Tiene que poner un mess valido');
			bError = true;
		}
		

	}

	</script>

</body>
</html>