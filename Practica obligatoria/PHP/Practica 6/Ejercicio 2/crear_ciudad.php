<?php
    include('conexion.php');
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $habitantes = $_POST['habitantes'];
    $superficie = $_POST['superficie'];
    
    if (isset($_POST['tienemetro']))
    {
        $tienemetro = 1;
    }
    else
    {
        $tienemetro = 0;
    }

    $consulta = "INSERT INTO ciudades(ciudad, pais, habitantes, superficie, tieneMetro) VALUES('$ciudad', '$pais', '$habitantes', '$superficie', '$tienemetro')";
    mysqli_query($link, $consulta) or die(mysqli_error($link));
    mysqli_close($link);
    header("Location: menu.php");
?>