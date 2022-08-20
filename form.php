<?php

$Nombre = $_POST["Nombre-usuario"];
$Apellido = $_POST["Apellido-usuario"];
$Email = $_POST["Mail-usuario"];
$Telefono = $_POST["Telefono-usuario"];
$Comentario = $_POST["Comentario-usuario"];
$Valoracionweb = $_POST["Valoración-usuario"];
$Newsletter = $_POST["news-usuario"];


$mensaje = "Este mensaje fue enviado por " . $Nombre $Apellido . ",\r\n";
$mensaje .= "Su e-mail es: " . $Email . " \r\n";
$mensaje .= "Su teléfono es: " . $Telefono . " \r\n";
$mensaje .= "Mensaje: " . $_POST["Comentario-usuario"] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());
$mensaje .= "Valoración web: " . $Valoracionweb . " \r\n";
$mensaje .= "Quiere recibir newsletter: " . $Newsletter . " \r\n";

$destinatario = 'amorconcienciaa@gmail.com';
$asunto = "Mensaje desde web"

mail($destinatario, $asunto, utf8_decode($mensaje), $header);

header("Location:exito-forms.html")


?>