<?php
    $hostname = "127.0.0.1";
    $nombreUsuario = "root";
    $password ="";
    $db = "capitales";

    $link = mysqli_connect($hostname, $nombreUsuario, $password) or die("Error al Conectar");
    mysqli_select_db($link, $db);

?>