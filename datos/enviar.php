<?php

//Llamando a los Campos
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

//Datos para el correo
$destinatario = "wichocanul07@gmail.com";
$asunto = "Contacto desde mi web";

$carta = "De: $nombre \n";
$carta .= "Correo: $email \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

//Enviando mensaje

mail($destinatario, $asunto, $carta);
header('Location:../Gracias.html')

?>