<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<style>
	div#main{
		margin-left:100px;
	}
	label{
		font-weight: bold;
		font-family: Arial;
		color:orange;
		padding-top:5px;
	}
	h1{
		color:orange;
	}

	</style>

</head>
<body>
	<div id="main">
	<h1>Servicios Funerarios</h1>
	<form action="#" id="FomMain"><br>
		<label for="nombre">Nombre Artistico</label></br>
		<input type="text" id="nombre" name="nombre"><br><br>

		<label for="nariz">¿Tiene nariz propia?</label></br>
		<input type="radio" name="nariz" id="narizSi" value="1">Si </br>
		<input type="radio" name="nariz" id="narizNo" value="2">No </br><br>

		<label for=" artilugios"> Artilugios</label><br>
		<input type="checkbox" name="canon" id="canon">Cañon </br>
		<input type="checkbox" name="minibicicleta" id="minibicicleta">Minibicicleta </br>
		<input type="checkbox" name="monociclo" id="monociclo">Monociclo </br>
		<input type="checkbox" name="titeres" id="titeres">Títeres </br>
		<input type="checkbox" name="pistolaDeAgua" id="pistolaDeAgua">Pistola de agua </br><br>

		<label for="genero">Genero</label><br>
		<select name="genero" id="genero">
			<option value="0">Selecione</option>
			<option value="1">Hombre</option>
			<option value="2">Mujer</option>
			<option value="3">No me acue</option>
		</select><br><br>

		<label for="contacto">Contacto</label><br>
		<input type="tel" id="contacto" name="contacto" placeholder="Numero de Telefono" pattern="[0-9]{9}">
		<br><br>

		<input type="button" value="validar" onclick="validarForm()">


 
	</form>
	</div>


	<script>
		function validarForm(){

			//declarar variables
			var elemNom = document.getElementById('nombre');
			var elemNarizSi = document.getElementById('narizSi');
			var elemNarizNo = document.getElementById('narizNo');

			var elemCanon = document.getElementById('canon');
			var elemMiniBicicleta = document.getElementById('minibicicleta');
			var elemMonoCiclo = document.getElementById('monociclo');
			var elemTiteres = document.getElementById('titeres');
			var elemPistolaDeAgua = document.getElementById('pistolaDeAgua');

			var elemGenero = document.getElementById('genero');
			var elemContacto = document.getElementById('contacto');
			var bError = false;
			var Count = 0;
			/**
			 * Comprobaciones
			 */
			//el campo nombre ser obligados
			if(elemNom.value.length == ''){
				elemNom.focus();
				alert('El nombre artístico debe ser obligado');
			}
			//si no tiene nariz propia
			if(elemNarizNo.checked == 1){
				elemNarizNo.focus()
				alert('Tiene que comprar el nariz.')
			}

			//validar artilugios
			//contar checked  
			if(elemCanon.checked == 1){
			 Count ++ ;
			}
			if(elemMiniBicicleta.checked == 1){
			 Count ++ ; 
			}
			if(elemMonoCiclo.checked == 1){
			 Count ++ ;		
			}
			if(elemTiteres.checked == 1){
			 Count ++ ;		
			}
			if(elemPistolaDeAgua.checked == 1){
			 Count ++ ;		
			}

			//comprobar si dos son checked minimo
			if(Count < 2){
				elemCanon.focus();
				alert('Tiene que utilizar como minimo 2 artilugios.');
			}
		

			//comprobar genero
			if(elemGenero.selectedIndex == 3){
				alert('seleccione un sexo válido');
			}

			//validar numeros
			if(elemContacto.value.length == 0 || elemContacto.value.length != 9){
				elemContacto.focus();
				alert('Tiene que estar 9 numeros');
			}
			

}




		
	</script>

</body>
</html>