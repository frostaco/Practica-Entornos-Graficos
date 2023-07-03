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
        include("conexion.php");
        $id = $_GET['id'];
        $consulta = "SELECT * FROM ciudades WHERE id = '$id'";
        $result = mysqli_query($link, $consulta);
        $capital = mysqli_fetch_array($result);
    ?>
    <form action="actualizar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="ciudad">Ciudad</label>
        <input type="text" id="ciudad" name="ciudad" value="<?php echo $capital['ciudad']; ?>"><br>

        <label for="pais">País</label>
        <input type="text" id="pais" name="pais" value="<?php echo $capital['pais']; ?>"><br>

        <label for="habitantes">Habitantes</label>
        <input type="text" id="habitantes" name="habitantes" value="<?php echo $capital['habitantes']; ?>"><br>

        <label for="superficie">Superficie</label>
        <input type="text" id="superficie" name="superficie" value="<?php echo $capital['superficie']; ?>"><br>

        <label for="tienemetro">Tiene metro?</label>
        <input type="checkbox" id="tienemetro" name="tienemetro" value="1">
        
        <br>

        <input type="submit" value="Actualizar">
    </form>
    <?php
        mysqli_free_result($result);
        mysqli_close($link)
    ?>
</body>
</html>