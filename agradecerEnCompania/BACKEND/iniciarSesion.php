<?php
    // Se ejecuta la función session_start() 
    // Este sirve para almacenar y persistir datos de un usuario mientras se navega por diferentes paginas de una misma web
    // Crea una sesión o reanuda la existente basada en el identificador enviado por el navegador
    // En este caso crea una nueva
    session_start();
    require 'configdb.php';
    $usuario = $_POST['nombre'];
    $pw = $_POST['clave'];

    // Comprobar si el nombre y la contraseña existe
    $sql = "SELECT * FROM alumnos WHERE nombre='$usuario' AND clave='$pw';";

    //echo $sql; -> mostrar la consulta SQL para verificar que se ha construido correctamente y probarlo en la base de datos. Si la consulta es correcta, se puede eliminar esta línea.

    // Guardar el resultado de la query en la variable resultado
    $resultado = $conexion->query($sql);

    // Si existen filas..
    if($resultado->num_rows > 0){
        // Extrae una fila del resultado y lo guarda en la variable fila
        $fila = $resultado->fetch_array();
        $_SESSION['usuario'] = $fila['nombre'];
        $_SESSION['clave'] = $fila['clave'];
        header(Location: ../VIEWS/inicioSesion.html);
        
    }
    
?>
