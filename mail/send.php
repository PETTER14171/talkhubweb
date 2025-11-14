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


$to = ['victor.delafuente@talk-hub.com','soporte@talk-hub.com','auxiliarti@talk-hub.com'];
$subject = "[Web] $asunto";
$body = "Nombre: $nombre\nCorreo: $correo\n\nMensaje:\n$mensaje\n";
$headers = [];
$headers[] = 'From: Notificador <contacto@kryptodevstudio.com>';
$headers[] = 'Reply-To: '.$correo;
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-Type: text/plain; charset=UTF-8';


$redirectTo = sanitize($_POST['redirect_to'] ?? '/');

$ok = mail(implode(',', $to), $subject, $body, implode("\r\n", $headers));
if ($ok) {
    $sep = (strpos($redirectTo, '?') === false) ? '?' : '&';
    header('Location: '.$redirectTo.$sep.'ok=1#contact');
    exit;
}
http_response_code(500); echo 'No se pudo enviar.';
?>