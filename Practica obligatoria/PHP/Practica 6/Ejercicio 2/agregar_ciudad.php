<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="agregar_ciudad.php" method="POST" name="agregar_ciudad">
        <label for="ciudad">Ciudad</label>
        <input type="text" id="ciudad" name="ciudad"><br>
 
        <label for="pais">Pais</label>
        <input type="text" id="pais" name="pais"><br>

        <label for="habitantes">Habitantes</label>
        <input type="text" id="habitantes" name="habitantes"><br>

        <label for="superficie">Superficie</label>
        <input type="text" id="superficie" name="superficie"><br>
        
        <label for="tienemetro">Tiene metro?</label>
        <input type="checkbox" id="tienemetro" name="tienemetro" value="1"><br>

        <input type="submit" value="Agregar">
    </form><br>
    <a href="menu.php">Volver al menu</a>
</body>
</html>