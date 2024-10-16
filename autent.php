<?php
session_start(); // iniciar sesion para almacenar los datos de autentificacion

// credenciales de usuario
$usuario_valido = 'admin';
$contrasena_valida = '12345';

// verificamos que el usuario envio los datos
if (isset($_POST['nombreUsuario']) && isset($_POST['password'])) {
    $usuario = $_POST['nombreUsuario'];// capturamos el nombre del usuario enviado desde el formulario
    $contrasena = $_POST['password']; // capturamos la contraseña


    // comprobamos si las credenciales coinciden
    if ($usuario == $usuario_valido && $contrasena == $contrasena_valida) {
        // Si son correctas, iniciamos la sesion guardando el nombre de usuario
        $_SESSION['nombreUsuario'] = $usuario;

        // Redirigimos al usuario a la pagina protegida (dashboard)

        header("Location: dashboard.php");
        exit(); // salimos del script para asegurarnos de que no se ejecute nada mas
    } else {

        //Si las credenciales son incorrectas, redirigiremos de nuevo a login.php con un error
        header("Location: login.php?error=1");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}

?>