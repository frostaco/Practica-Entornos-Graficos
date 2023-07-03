<?php
    include('conexion.php');
    $id = $_GET['id'];
    $consulta = "DELETE FROM ciudades  WHERE id = '$id'";
    mysqli_query($link, $consulta) or die(mysqli_error($link));
    mysqli_close($link);
    header("Location: menu.php");
?>