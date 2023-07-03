<?php
    $hostname = "localhost";
    $nombreUsuario = "root";
    $password ="admin";
    $db = "prueba";
    $link = mysqli_connect($hostname,$nombreUsuario,$password) or die("Error al Conectar");
    mysqli_select_db($link,$db);
?>