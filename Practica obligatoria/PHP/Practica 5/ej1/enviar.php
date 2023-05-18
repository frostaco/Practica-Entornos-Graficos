<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $destinatario = 'destinatario@example.com';
  $asunto = 'Correo de contacto';
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $cuerpo = $_POST['cuerpo'];

  $cabeceras = "MIME-Version: 1.0" . "\r\n";
  $cabeceras .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $cabeceras .= "From: $nombre <$email>" . "\r\n";

  if (mail($destinatario, $asunto, $cuerpo, $cabeceras)) {
    echo "El correo se ha enviado correctamente.";
  } else {
    echo "Hubo un error al enviar el correo.";
  }
}
?>
