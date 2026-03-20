<?php
    require("configdb.php");
    function conectar(){
	    $conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
	    $conexion->set_charset("utf8"); 
        return $conexion;
    }
    
    function mostraralumnos(){ 
	    $conexion=conectar();  
	    // No es lo que pedia : $sql="SELECT * FROM alumnos"; // SELECT * FROM alumnos LIMIT 3 -> te devuelve las 3 primeras filas - CORREGIR CONSULTA TRAYENDO SOLO LAS DOS COLUMNAS
		$sql = "SELECT nombre, IDAlumno FROM clientes";
		
	    $resultado=$conexion->query($sql);
    
	    for ($i=0; $i<3; $i++){
	        $fila=$resultado->fetch_array();
	        echo '<p>';
	        echo 'Nombre alumno: '.$fila["nombre"];
			echo 'Número de puesto: '.$fila["IDAlumno"];
	        echo '</p>';
        }
    }

	

?>  
