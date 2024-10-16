<?php
session_start(); // Inicia la sesion para permitir almacenar datas de autenticación

// comprobamos si el usuario esta autenticado y si no redirigimos a login
if (!isset($_SESSION["nombreUsuario"])){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
</head>
    <body>
    <h1>Bienvenido, <?php echo $_SESSION['nombreUsuario']; ?> </h1>
    <a href="logout.php"> Cerrar sesion </a>
    </body>

</html>


