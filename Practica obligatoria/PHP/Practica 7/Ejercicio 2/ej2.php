
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php     
        if (!isset($_COOKIE['visitas']))
            {$visitas = 1;
            setcookie("visitas", $visitas , time()+ 3600*24*365);}
        else{
            $visitas = $_COOKIE['visitas'] + 1;
            setcookie("visitas", $visitas , time()+ 3600*24*365);}
    ?>
</head>
<body>
    <?php
        if ($visitas >= 1)
        {
        echo "Visita nro " .$_COOKIE['visitas'];
        }else
        {
        echo "Bienvenido";
        echo $visitas;
        }
    ?>   
</body>
</html>