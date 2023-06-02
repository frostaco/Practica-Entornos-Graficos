<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $email_amigo = $_POST['e_amigo'];

  $cabeceras = "MIME-Version: 1.0" . "\r\n";
  $cabeceras .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $cabeceras .= "From: $nombre <$email>" . "\r\n";

  $correo = "$email_amigo" . "\n " . "Has sido invitado a visitar el sitio www.example.com por " . "$nombre";

  if (mail($nombre, $email, $correo, $cabeceras)) {
    echo "El correo se ha enviado correctamente.";
  } else {
    echo "Hubo un error al enviar el correo.";
  }
}
?>
