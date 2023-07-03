<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include('conexion.php');
    $id = $_POST['id'];
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $habitantes = $_POST['habitantes'];
    $superficie = $_POST['superficie'];
    if (isset($_POST['tienemetro']))
    {
        $tienemetro = 1;}
    else
    {
        $tienemetro = 0;}
    $consulta = "UPDATE ciudades SET ciudad = '$ciudad', pais = '$pais', habitantes = '$habitantes', superficie = '$superficie', tieneMetro = '$tienemetro' WHERE id = '$id'";
    mysqli_query($link, $consulta) or die(mysqli_error($link));
    echo("Modificado <a href= 'index.php'>Volver a la pagina principal</a>");
    mysqli_close($link);
?>
</body>
</html>