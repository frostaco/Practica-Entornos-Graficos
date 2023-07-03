<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        if(isset($_COOKIE['titular']))
            {$titular = $_COOKIE['titular'];}
    ?>
</head>
<body>
    <?php
        if(isset($titular))
            {echo ("<h1>'$titular'<h1>");
             echo ('<form action="borrarTitular.php" method="POST">
                   <input type="submit" value="Borrar Titular">
                   </form>');}
        else
           {echo("<h1>Elegi un titular<h1>");
            echo('<form   action="generarTitular.php" method="POST">
                        <input type="radio"name="titular" value="Noticia Deportiva"> Noticia Deportiva
                         <br>
                        <input type="radio"name="titular" value="Noticia Economica"> Noticia Economica
                         <br>
                         <input type="radio"name="titular" value="Noticia Politica"> Noticia Politica
                            <br>
                        <input type="submit" value="Establecer Titular">
                </form>');}
    ?>
</body>
</html>