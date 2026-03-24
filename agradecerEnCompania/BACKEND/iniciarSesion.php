<?php
    // Se ejecuta la función session_start() 
    // Este sirve para almacenar y persistir datos de un usuario mientras se navega por diferentes paginas de una misma web
    // Crea una sesión o reanuda la existente basada en el identificador enviado por el navegador
    // En este caso crea una nueva
    session_start();
    require 'conectar.php';

    $conexion = conectar();

    // Datos del formulario
    $usuario = $_POST['usuario']; // name de los input
    $pw = $_POST['password'];

    // Comprobar si el nombre y la contraseña existe
    $sql = "SELECT idAlumno, nombre, clave FROM alumnos WHERE nombre='$usuario' AND clave='$pw';";

    //echo $sql; -> mostrar la consulta SQL para verificar que se ha construido correctamente y probarlo en la base de datos. Si la consulta es correcta, se puede eliminar esta línea.

    // Guardar el resultado de la query en la variable resultado
    $resultado = $conexion->query($sql);

    // Si existen filas..
    if($resultado->num_rows > 0){
        // Extrae una fila del resultado y lo guarda en la variable fila
        $fila = $resultado->fetch_array();
        // En la variable _SESSION se guardan el nombre y la clave
        $_SESSION['usuario'] = $fila['nombre'];
        $_SESSION['password'] = $fila['clave'];
        // Guardar el id del alumno en la sesión para usarlo posteriormente
        $_SESSION['idAlumno'] = $fila['idAlumno'];


        // Te redireccion al home (o a donde le digas)
        header("Location: ../VIEWS/home.html");
        // Tras la dirección para evitar que el php se siga ejecutando lo detenemos
        exit();
    }
    else {
        echo "ERROR, los datos de inicio no coinciden";
    }
    
    $conexion->close();
?>
