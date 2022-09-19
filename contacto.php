<?php

//Importamos las variables del formulario de contacto
@$nombre = addslashes($_POST['nombre']);
@$nombre = addslashes($_POST['apellidos']);
@$email = addslashes($_POST['email']);
@$asunto = addslashes($_POST['asunto']);
@$mensaje = addslashes($_POST['mensaje']);
 
//Preparamos el mensaje de contacto
$cabeceras = "From: alumnos@centrojesusgonzalez.com\n" //Este tiene que ser el email de la academia porque es desde donde el servidor PHP lo manda
. "Reply-To: alumnos@centrojesusgonzalez.com\n";
// $asunto = "Mensaje formulario de contacto de mi Web"; asunto aparecera en la bandeja del servidor de correo
$email_to = "igorpopaweb@gmail.com"; //cambiar por tu email
$contenido = "$nombre ha enviado un mensaje desde la web \n"
. "\n"
. "Nombre: $nombre\n"
. "Apellidos: $apellidos\n"
. "Email: $email\n"
. "Asunto: $asunto\n"
. "Mensaje: $mensaje\n"
. "\n";
 
//Enviamos el mensaje y comprobamos el resultado
if (@mail($email_to, $asunto ,$contenido ,$cabeceras )) {
 
//Si el mensaje se envía muestra una confirmación

//die("Gracias, su mensaje se envio correctamente.");



//podemos cambiar el die por la dos lineas de abajo...las dos a la vez no funcionan.

header("Location: ok.html");

//header("Location: http://www.ivanbueno.es"); // ...redirección directa...

//header( "refresh:5;http://www.ivanbueno.es" );   ...redirección con retardo.......

}else{
 
//Si el mensaje no se envía muestra el mensaje de error
// die("Error: Su información no pudo ser enviada, intentar más tarde");

header("Location: notok.html");

}


?>