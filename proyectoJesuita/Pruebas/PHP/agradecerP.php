<!-- CREAR AGRADECIMIENTOS -->
<?php
    require("configdb.php");
    function conectar(){
	    $conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
	    $conexion->set_charset("utf8"); 
        return $conexion;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Guy Consolmagno">
    <!-- PONER FAVICON -->
    <link rel="stylesheet" href="../CSS/agradecer.css">
    <title>Agradecer | Agradece en compañia</title>
</head>
<body>
    <header>
        <img src="../img/milogo.PNG" alt="Logo Agradece En Compañia">
        <h1>AGRADECE <span>EN</span> COMPAÑIA</h1>
    </header>
    <nav>
        <ul>
            <img src="../img/jesuitasBlanco.png" alt="Logo Jesuitas ">
            <li><a title="Vuelve al inicio" href="../HTML/index.html">Inicio</a></li> <!-- Inicio -->
            <li><a title="Crea y envía un agradecimiento" class="seleccionado" >Agradecer</a></li> <!-- Agradecer -->
            <li><a title="Ver los agradecimientos recibidos" href="../HTML/misAgradecimientos.html">Mis agradecimientos</a></li> <!-- Mis agradecimientos -->
            <li class="cerrarDer" ><a href="./cerrar_sesion.html" ><span  class="cerrar"  > <span class="puerta"></span>Cerrar sesión</span></a></li> <!-- Cerrar sesión -->
        </ul>
    </nav>
    <main>
        <h3> Hola, Daniela</h3>
        <form action = "recoger.php" method="POST">
            <div>
                <label>Este agradecimiento es para:</label>
                <select name="nombres" id="nombres">
                    <option value="" disabled selected>--Selecciona a un compañero--</option>
                    <?php
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
                    ?>
                </select>
            </div>
            
            <div>
                <label>Escribe tu agradecimiento:</label><br>
                <textarea name="textarea" placeholder="Quiero agradecerte por..."></textarea>
            </div>

            <button type="submit">GRACIAS 🕊️</button>

        </form>
        <!-- Poner logo compañia de jesus con lienas -->
    </main>

    <footer>
        <!-- COMPLETAR FOOTER -->
    </footer>
</body>
</html>