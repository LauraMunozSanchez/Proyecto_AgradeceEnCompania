<?php

    require 'configdb.php';

    function conectar(){
	    $conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
	    $conexion->set_charset("utf8"); 
        return $conexion;
    }
    function mostraralumnos(){ 
	    $conexion=conectar();  
	    $sql = "SELECT nombre, idAlumno FROM alumnos";
	    $resultado=$conexion->query($sql);
		$fila = $resultado->fetch_array(); // Obtener la primera fila del resultado
		while ($fila) { // Iterar mientras haya filas disponibles
			echo '<option value="' . $fila["idAlumno"] . '">' . $fila["nombre"] . '</option>';
			$fila = $resultado->fetch_array(); // Obtener la siguiente fila
        }
		$conexion->close(); // Cerrar la conexión después de usarla
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Guy Consolmagno">
    <!-- PONER FAVICON -->
    <link rel="stylesheet" href="./agradecer.css">
    <title>Agradecer | Agradece en compañia</title>
</head>
<body>
    <header>
        <img src="./IMG/milogo.PNG" alt="Logo Agradece En Compañia">
        <h1>AGRADECE <span>EN</span> COMPAÑIA</h1>
    </header>
    <nav>
        <ul>
            <img src="./IMG/jesuitasBlanco.png" alt="Logo Jesuitas ">
            <li><a title="Vuelve al inicio" href="./index.html">Inicio</a></li> <!-- Inicio -->
            <li><a title="Crea y envía un agradecimiento" class="seleccionado" >Agradecer</a></li> <!-- Agradecer -->
            <li><a title="Ver los agradecimientos recibidos" href="./misAgradecimientos.html">Mis agradecimientos</a></li> <!-- Mis agradecimientos -->
            <li class="cerrarDer" ><a href="./cerrar_sesion.html" ><span  class="cerrar"  > <span class="puerta"></span>Cerrar sesión</span></a></li> <!-- Cerrar sesión -->
        </ul>
    </nav>
    <main>
        <h3> Hola, Daniela</h3>
        <form action = "" method="POST">
            <div>
                <label>Este agradecimiento es para:</label>
                <select name="nombres" id="nombres">
                    <option value="" disabled selected>--Selecciona a un compañero--</option>
                    <option value="00" ></option>
                    <?php
                        mostraralumnos();
                    ?>
                </select>
            </div>
            
            <div>
                <label>Escribe tu agradecimiento:</label><br>
                <textarea name="mensaje" placeholder="Quiero agradecerte por..."></textarea>
            </div>

            <button type="submit">GRACIAS 🕊️</button>

        </form>
    </main>

    <footer>
        <img src="./IMG/logoguada.png" alt="Logo Footer">
        <p>© 2026 Agradece en Compañía</p>
    </footer>
</body>
</html>