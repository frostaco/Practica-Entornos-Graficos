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
        $resultado = mysqli_query($link, "Select * from ciudades order by id");
        mysqli_close($link);
    ?>
    <table>
        <tr>
            <th>id</th>
            <th>ciudad</th>
            <th>pais</th>
            <th>habitantes</th>
            <th>superficie</th>
            <th>tiene metro</th>
        </tr>
        <?php
            while($fila = mysqli_fetch_array($resultado))
            {
        ?>
            <tr>
                <td><?php echo $fila['id'] ?></td>
                <td><?php echo $fila['ciudad'] ?></td>
                <td><?php echo $fila['pais'] ?></td>
                <td><?php echo $fila['habitantes'] ?></td>
                <td><?php echo $fila['superficie'] ?></td>
                <td><?php echo $fila['tieneMetro'] ?></td>
                <td><a href="modificar_ciudad.php?id=<?php echo $fila['id']?>">modificar</a></td>
                <td><a href="eliminar.php?id=<?php echo $fila['id']?>">eliminar</a></td>
            </tr>
        <?php
            }
        ?>
    </table>
    <a href="agregar_ciudad.html">Agregar ciudad</a>
</body>
</html>