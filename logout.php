<?php

session_start(); // inicia la sesion para poder manipularla

session_unset(); // Elimina tas las variables de la sesión actual

session_destroy(); // Finaliza la sesion, eliminando todo los datos de sesion del servidor

header("location:login.php"); // redirigimos al usuario de vuelta a la pagina de inicio de sesion
exit();
?>