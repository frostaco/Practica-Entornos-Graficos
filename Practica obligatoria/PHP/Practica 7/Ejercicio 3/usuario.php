<?php 
      if(isset($_POST['user']))
      {$user = $_POST['user'];
          setcookie("usuario", $user, time() + 3600*24*365);}
      header("Location: ej3.php.php");
      exit;
?>