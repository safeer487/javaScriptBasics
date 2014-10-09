<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<style>
	#descarga{
		text-align:center;
		margin-top:50px;
	}
	button{
		font-weight: bold;
		font-size:25px;
		color:white;
		padding:5px;
		border-radius: 10px 0px 10px 0px;
		box-shadow: 5px 5px 5px green;
		background-color:white;
		color:green;
	}
	</style>
</head>
<body>
<div id="descarga">
<button id="button" name="button" onclick = "ComienzaDescarga()">Descarga</button>
<p id="mensaje"></p>
<p id="contador"></p>
<p id="enlace"></p>
</div>

<script>
var elementBoton = document.getElementById('button');
var elementTexto = document.getElementById('texto');
var elementCont = document.getElementById('contador');
var elementEnlace = document.getElementById('enlace');
var iCon = 10;


	function ComienzaDescarga(){
		
		//mensaje que aparezca de 10 segundos
		document.getElementById("mensaje").innerHTML = "La descarga se comienza en 10 segundos";
		//si pulsamos sobre descarga no puede mas de una vez
		document.getElementById("button").setAttribute("disabled", "disabled");
		setInterval("segundos()", 1000)

	}
	/**
	 * metodo que decrece el contador
	 * @return {[type]} [description]
	 */
	function segundos(){
		if(iCon >= 0){
			elementCont.innerHTML = iCon + 's';
			iCon--;
		}else{
			elementEnlace.innerHTML = '<a href="http://andros.myftp.org/bootstrap.zip">Enlace</a>';
		}
	}


	


</script>
	
</body>
</html>