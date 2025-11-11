<?php
require __DIR__.'/validate.php';
if($_SERVER['REQUEST_METHOD'] !== 'POST'){ http_response_code(405); exit('Método no permitido'); }


$nombre = sanitize($_POST['nombre'] ?? '');
$correo = sanitize($_POST['correo'] ?? '');
$asunto = sanitize($_POST['asunto'] ?? '');
$mensaje = sanitize($_POST['mensaje'] ?? '');


if(!$nombre || !$asunto || !$mensaje || !valid_email($correo)){
http_response_code(422); exit('Datos inválidos');
}


$to = ['soporte@talk-hub.com','admin@talk-hub.com','gerencia@talk-hub.com'];
$subject = "[Web] $asunto";
$body = "Nombre: $nombre\nCorreo: $correo\n\nMensaje:\n$mensaje\n";
$headers = [];
$headers[] = 'From: Notificador <no-reply@talk-hub.com>';
$headers[] = 'Reply-To: '.$correo;
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-Type: text/plain; charset=UTF-8';


$ok = mail(implode(',', $to), $subject, $body, implode("\r\n", $headers));
if($ok){
header('Location: /contact.php?ok=1');
exit;
}
http_response_code(500); echo 'No se pudo enviar.';
?>