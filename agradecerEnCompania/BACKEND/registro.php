<?php
    session_start();
    require 'conectar.php';

    $conexion = conectar();

    // Datos del formulario
    $usuario = $_POST['usuario']; // name de los input
    $pw = $_POST['password'];

    // Comprobar si el nombre y la contraseña existe
    $sql = "INSERT INTO alumnos (nombre, clave) VALUES ('$usuario', '$pw');";

    //echo $sql; -> mostrar la consulta SQL para verificar que se ha construido correctamente y probarlo en la base de datos. Si la consulta es correcta, se puede eliminar esta línea.

    // Guardar el resultado de la query en la variable resultado
    $resultado = $conexion->query($sql);

        // Te redireccion al home (o a donde le digas)
        header("Location: ../VIEWS/iniciosesion.html");
        // Tras la dirección para evitar que el php se siga ejecutando lo detenemos
        exit();

    $conexion->close();
?>
