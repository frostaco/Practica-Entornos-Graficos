<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $destinatario = 'webmaster@example.com';
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $consulta = $_POST['consulta'];

  $cabeceras = "MIME-Version: 1.0" . "\r\n";
  $cabeceras .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $cabeceras .= "From: $nombre <$email>" . "\r\n";

  if (mail($destinatario, $nombre, $email, $consulta, $cabeceras)) {
    echo "El correo se ha enviado correctamente.";
  } else {
    echo "Hubo un error al enviar el correo.";
  }
}
?>
