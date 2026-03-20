<?php
    require("configdb.php");
    function conectar(){
	    $conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
	    $conexion->set_charset("utf8"); 
        return $conexion;
    }
    
    function mostraralumnos(){ 
	    $conexion=conectar();  
	    $sql="SELECT * FROM alumnos"; // SELECT * FROM alumnos LIMIT 3 -> te devuelve las 3 primeras filas
	    $resultado=$conexion->query($sql);
    
	    for ($i=0; $i<3; $i++){
	        $fila=$resultado->fetch_array();
	        echo '<p>';
	        echo 'Nombre alumno: '.$fila["nombre"]; 
	        echo '</p>';
        }
    }

	

?>  
