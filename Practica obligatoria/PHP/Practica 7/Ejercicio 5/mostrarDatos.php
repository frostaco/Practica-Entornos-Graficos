<?php
    session_start();
    $user = $_SESSION['user'];
    $pass = $_SESSION['pass'];
?>
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
            echo "Usuario: ".$usuario ."<br>";
            echo "Contraseña: ".$password. "<br>";
        ?>
</body>
</html>