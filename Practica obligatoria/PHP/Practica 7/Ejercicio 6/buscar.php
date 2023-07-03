<?php
    session_start();
      $hostname = "localhost";
      $nombreUsuario = "root";
      $password ="admin";
      $db = "base";
      $link = mysqli_connect($hostname,$nombreUsuario,$password) or die("Error al Conectar");
      mysqli_select_db($link,$db);
        $email = $_POST['email'];
        $query= "Select * from alumnos where mail= '$email'";
        $resultado= mysqli_query($link,$query);
        $fila = mysqli_fetch_array($resultado);
        $_SESSION['nombre']= $fila['nombre'];;
?>