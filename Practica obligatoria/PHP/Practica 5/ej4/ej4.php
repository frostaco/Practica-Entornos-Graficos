<?php
    session_start();
    $_SESSION["cont"] = array();
    $link = $_SERVER["REQUEST_URI"];

    if (!isset($_SESSION['paginas_visitadas'][$link])) 
    {
        $_SESSION['paginas_visitadas'][$link] = 1;
    } else 
    {
        $_SESSION['paginas_visitadas'][$link]+1;
    }
    $visitas_pagina = $_SESSION['paginas_visitadas'][$link];

    echo "Cant. de visitas " . $visitas_pagina;
?>