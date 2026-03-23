<?php
    // DATOS FORMULARIO
    $receptor = $_POST['IDAlumno'];
    $mensaje = $_POST['']

    require("configdb.php");
    function conectar(){
	    $conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
	    $conexion->set_charset("utf8"); 
        return $conexion;
    }


?>  