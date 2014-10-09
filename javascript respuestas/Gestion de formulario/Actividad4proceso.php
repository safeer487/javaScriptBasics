<?php 

if(!$_POST){
	header('Location:Actividad4.php');
	exit;
}
//recogemos variable
	$sNom  = trim($_POST['contactName']);
	$sMail = trim($_POST['email']);
	$iTelefono = trim($_POST['telefono']);
	$sAsunto = trim($_POST['subject']);
	$sMensaje = trim($_POST['message']);
 	$sPregunta = trim($_POST['pregunta']);

 	$sTextoFin = 'Nombre:' . $sNom . 'E-mail: ' . $sMail . $sMensaje;


/**
 * comprobaciones
 */

/**
 * Enviar por e-mail
 */
$bMail = mail('correo@personal.es', $sAsunto, $sTextoFin);
if($bMail) {
	echo 'Mensaje enviado';
} else {
	echo 'Error al enviar';
}

 ?>