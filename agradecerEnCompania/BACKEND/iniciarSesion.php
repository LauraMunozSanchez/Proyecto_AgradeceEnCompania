<?php
    require 'configdb.php';
    $usuario = $_POST['nombre'];
    $pw = $_POST['clave'];

    $sql = "SELECT * FROM alumnos WHERE nombre='$usuario' AND clave='$pw';";

    //echo $sql; -> mostrar la consulta SQL para verificar que se ha construido correctamente y probarlo en la base de datos. Si la consulta es correcta, se puede eliminar esta línea.

    

    //$resultado = $conexion->query($sql);
?>
