<?php

    require ('../BACKEND/funcionesAlumnos.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Guy Consolmagno">
    <link rel="icon" type="image/x-icon" href="../ASSETS/IMG/favicon.png">
    <link rel="stylesheet" href="../ASSETS/CSS/agradecer.css">
    <title>Agradecer | Agradece en compañia</title>
</head>
<body>
    <header>
        <img src="../ASSETS/IMG/milogo.PNG" alt="Logo Agradece En Compañia">
        <h1>AGRADECE <span>EN</span> COMPAÑIA</h1>
    </header>
    <nav>
        <ul>
            <img src="../ASSETS/IMG/jesuitasBlanco.png" alt="Logo Jesuitas ">
            <li><a title="Vuelve al inicio" href="./home.html">Inicio</a></li> <!-- Inicio -->
            <li><a title="Crea y envía un agradecimiento" class="seleccionado" >Agradecer</a></li> <!-- Agradecer -->
            <li><a title="Ver los agradecimientos recibidos" href="./misAgradecimientos.php">Mis agradecimientos</a></li> <!-- Mis agradecimientos -->
            <li class="cerrarDer" ><a href="../BACKEND/cerrarSesion.php" ><span  class="cerrar"  > <span class="puerta"></span>Cerrar sesión</span></a></li> <!-- Cerrar sesión -->
        </ul>
    </nav>
    <main>
        <h3> Hola, Daniela</h3>
        <form action = "../BACKEND/guardarAgradecimiento.php" method="POST">
            <div>
                <label>Este agradecimiento es para:</label>
                <select name="idReceptor" id="nombres">
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
        <img src="../ASSETS/IMG/logoguada.png" alt="Logo Footer">
        <p>© 2026 Agradece en Compañía</p>
    </footer>
</body>
</html>