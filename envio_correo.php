<?php
	$nombreContacto = $_POST['Nombre'];
	$empresaContacto = $_POST['Empresa'];
	$telefonoContacto = $_POST['Telefono'];
	$movilContacto = $_POST['Movil'];
	$emailContacto = $_POST['Correo'];
	$asuntoContacto = $_POST['Asunto'];
	$mensajeContacto = $_POST['Mensaje'];
	$captchaForm=$_POST['g-recaptcha-response'];
	require_once 'app/init.php';
	$response = $recaptcha ->verify($captchaForm);


	require './lib/PHPMailerAutoload.php';
	//require("./lib/PHPMailer.php");
	$mail = new PHPMailer;

	//Luego tenemos que iniciar la validación por SMTP:
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->Host = "mail.creactivmedia.com.mx"; // SMTP a utilizar. Por ej. smtp.elserver.com
	$mail->Username = "emanuel_arias@creactivmedia.com.mx"; // Correo completo a utilizar
	$mail->Password = "970623=CREA011+"; // Contraseña
	$mail->Port = 587; // Puerto a utilizar

	//Con estas pocas líneas iniciamos una conexión con el SMTP. Lo que ahora deberíamos hacer, es configurar el mensaje a enviar, el //From, etc.
	$mail->From = $emailContacto; // Desde donde enviamos (Para mostrar)
	// $mail->From = "element.earias20@gmail.com"; // Desde donde enviamos (Para mostrar)
	$mail->FromName = "mail.creactivmedia";

	//Estas dos líneas, cumplirían la función de encabezado (En mail() usado de esta forma: “From: Nombre <correo@dominio.com>”) de //correo.
	$mail->AddAddress("info@creactivmedia.com.mx"); // Esta es la dirección a 
	$mail->AddAddress("jorge_ramos@creactivmedia.com.mx");
	//$mail->AddAddress("earias@tdesystems.com.mx");
	$mail->IsHTML(true); // El correo se envía como HTML
	$mail->Subject = "Correo de contacto"; // Este es el titulo del email.
	$body = '<b>Asunto:</b> '.$asuntoContacto;
	$body = $body.'<br> <b>Correo de persona que contacta:</b> '.$emailContacto;
	$body = $body.'<br> <b>Nombre de persona que contacta:</b> '.$nombreContacto;
	$body = $body.'<br> <b>Empresa a que pertenece la persona que contacta:</b> '.$empresaContacto;
	$body = $body.'<br> <b>Telefono de persona que contacta:</b> '.$telefonoContacto;
	$body = $body.'<br> <b>movil de persona que contacta:</b> '.$movilContacto;
	$body = $body.'<br> <b>Mensaje de persona que contacta:</b> '.$mensajeContacto;
	$mail->Body = $body; // Mensaje a enviar
	$exito = $mail->Send(); // Envía el correo.
	//También podríamos agregar simples verificaciones para saber si se envió:
	if($exito && $response ->isSuccess()){
		    
	// echo 'El correo fue enviado correctamente en breve nos comunicamos con su merced.';
	header('Location: index.php');
	}else{
	echo 'Hubo un inconveniente. Contacta a un administrador.';
	}

?>