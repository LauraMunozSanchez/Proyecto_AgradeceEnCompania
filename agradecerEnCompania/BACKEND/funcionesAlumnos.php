 <?php
    require('conectar.php');
    function mostraralumnos(){ 
	    $conexion=conectar();  
	    $sql = "SELECT nombre, IDAlumno FROM alumnos";
	    $resultado=$conexion->query($sql);
		$totalFilas = $resultado->num_rows; // Obtener el número total de filas en el resultado
		$fila = $resultado->fetch_array(); // Obtener la primera fila del resultado
		while ($fila) { // Iterar mientras haya filas disponibles
			echo '<option value="' . $fila["IDAlumno"] . '">' . $fila["nombre"] . '</option>';
			$fila = $resultado->fetch_array(); // Obtener la siguiente fila
        }
		$conexion->close(); // Cerrar la conexión después de usarla
		return $totalFilas; // Devolver el número total de filas pasadas por el resultado
    }

?>  
