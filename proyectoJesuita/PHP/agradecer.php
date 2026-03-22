<!-- CREAR AGRADECIMIENTOS -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Laura Muñoz Sanchez">
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
            <li><a title="Vuelve al inicio" href="">Inicio</a></li> <!-- Inicio -->
            <li><a title="Crea y envía un agradecimiento" class="seleccionado" href="" >Agradecer</a></li> <!-- Agradecer -->
            <li><a title="Ver los agradecimientos recibidos" href="">Mis agradecimientos</a></li> <!-- Mis agradecimientos -->
            <li class="cerrarDer" ><a href="" ><span  class="cerrar"  > <span class="puerta"></span>Cerrar sesión</span></a></li> <!-- Cerrar sesión -->
        </ul>
    </nav>
    <main>
        <h3> Hola, Daniela</h3>
        <form action = "" method="POST">
            <div>
                <label>Este agradecimiento es para:</label>
                <select name="nombres" id="nombres">
                    <option value="" disabled selected>--Selecciona a un compañero--</option>
                    <?php
                        require("funcionesAlumnos.php");
                        mostraralumnos();
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