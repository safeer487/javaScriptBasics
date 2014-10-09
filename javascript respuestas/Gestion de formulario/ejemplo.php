<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
</head>
<body>
<input type="text" id="rojo" value="barco">

<input type="text" name="azul" value="submarino">

<div id="contenido"></div>

<button onclick="mostrar()">Ver</button>

<script>
	var campoRojo = document.getElementById('rojo'); //para que cojo el id de input de html
	//console.log(campoRojo.value);

	var mostrar = function(){
		alert(campoRojo.value)
	}
	var mostrar = function(){
	var campoazul = document.getElementsByName('azul');
	var contenido = document.getElementById('contenido');
	contenido.html = campoazul.value;
}
</script>

	
</body>
</html>