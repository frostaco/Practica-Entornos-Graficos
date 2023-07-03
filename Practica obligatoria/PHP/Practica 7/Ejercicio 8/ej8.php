<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        if(isset($_COOKIE['canciones']))
        {
            $buscar = $_COOKIE['canciones'];
        }
        else{
            $buscar = null;
        }
    ?>
</head>
<body>
    <form action="buscar.php" method="POST">
        <input type="text" name="cancion" placeholder="Nombre cancion">
        <input type="submit" value="Buscar">
    </form>
    <?php
        if(isset($buscar))
        {
            echo ($buscar);
        }else{
            echo "No se encontró la busqueda";
        }
    ?>
</body>
</html>