<?php
    session_start();

    //$_SESSION = array(); limpia la variable de sesión

    session_destroy(); // Elimina la sesión actual y el archivo de sesión en el servidor, lo que hace que los datos de sesión ya no estén disponibles.

    header("Location: ../VIEWS/inicioSesion.html"); // Redirige al usuario a la página de inicio de sesión después de cerrar la sesión.
    exit();
?>