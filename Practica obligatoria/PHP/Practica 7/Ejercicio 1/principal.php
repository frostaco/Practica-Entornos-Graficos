<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        if (isset($_COOKIE["estilo"])){
        echo '<link rel="stylesheet" href="'.$_COOKIE["estilo"].'.css">';
        }
    ?>
</head>
<body>
<h1>Cambiar Color</h1>
    <form action="cambiar_Estilo.php" method="POST">
        <select name="Estilo">
            <option value="rojo">Rojo
            <option value="verde">Verde
            <option value="azul">Azul   
        </select>
<input type="submit" value="Actualizar">
    </form>
</body>
</html>