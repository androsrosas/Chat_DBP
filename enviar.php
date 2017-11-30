<?php
	$destino = "androsrosas@gmail.com";
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$telefono = $_POST["telefono"];
	$mensaje = $_POST["mensaje"];
	$contenido = "Nombre: ".$nombre."\nCorreo: ".$correo."\nTelefono: ".$telefono."\nMensaje: ".$mensaje;

	$headers ='From:'.$correo."\r\n".'Reply-To:'.$correo."\r\n".'X-Mailer: PHP/'.phpversion();

	
	mail($destino,"Nuevo Pedido", $contenido,$headers);
	header("Location: index.html");
?>