<?php
    include ("conexion.php");
    $cancion = $_POST['cancion'];
    $query= "Select * from buscador where canciones LIKE '%".$cancion."%'";
    $resultado= mysqli_query($link,$query);
    $fila = mysqli_fetch_array($resultado);
    $nombre = $fila['canciones'];
    setcookie("canciones", $nombre, time()+ 3600*24*365);
?>