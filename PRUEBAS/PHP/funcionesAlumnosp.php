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
		$sql = "SELECT nombre, IDAlumno FROM alumnos";
		
	    $totalFilas = $resultado->num_rows; // Obtener el número total de filas en el resultado
		$fila = $resultado->fetch_array(); // Obtener la primera fila del resultado
		while ($fila) { // Iterar mientras haya filas disponibles
	        echo '<p>';
	        echo 'Nombre alumno: '.$fila["nombre"];
			echo 'Número de puesto: '.$fila["IDAlumno"];
	        echo '</p>';
			$fila = $resultado->fetch_array(); // Obtener la siguiente fila
		}
		
		
		/*$resultado=$conexion->query($sql);
	    for ($i=0; $i<3; $i++){
	        $fila=$resultado->fetch_array();
	        echo '<p>';
	        echo 'Nombre alumno: '.$fila["nombre"];
			echo 'Número de puesto: '.$fila["IDAlumno"];
	        echo '</p>';
        }
		*/
    }

	

?>  
