<?php
session_start(); // inicia la sesion para ve si el usuario ya esta registrado

// verificamos si el usuario ya ha iniciado sesion
if (isset($_SESSION['nombreUsuario'])) {
    // si ya está identificado redirigimos al usuario al dashboard
    header("Location: dashboard.php");
    exit();// salimos del scrip para asegurarnos de que no se ejecute nada mas
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inicio de sesion </title>
    </head>
<body>
<h2> Inicio de sesion </h2>

<form action="autent.php" method="post">

    <label for="nombreUsuario"> Usuario: </label>
    <input type="text" name="nombreUsuario" id="nombreUsuario" required>
    <br><br>

    <label for="password"> Contraseña: </label>
    <input type="password" name="password" id="password">
    <br><br>

    <input type="submit" value="LogIn">
</form>
</body>
</html>
