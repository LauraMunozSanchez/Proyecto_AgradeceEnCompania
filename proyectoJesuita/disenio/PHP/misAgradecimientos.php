<!-- CREAR AGRADECIMIENTOS -->
<?php
    $recibidos = [
        0 => "mensaje.php",
        1 => "mensaje.php",
        2 => "mensaje.php",
        3 => "mensaje.php",
        4 => "mensaje.php"
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Guy Consolmagno">
    <link rel="stylesheet" href="./CSS/misAgradecimientos.css">
    <title>Mis agradecimientos | Agradece en compañia</title>
</head>
<body>
    <header>
        <img src="./img/milogo.PNG" alt="Logo Agradece En Compañia">
        <h1>AGRADECE <span>EN</span> COMPAÑIA</h1>
    </header>
    <nav>
        <ul>
            <img src="./img/jesuitasBlanco.png" alt="Logo Jesuitas ">
            <li><a title="Vuelve al inicio" href="">Inicio</a></li> <!-- Inicio -->
            <li><a title="Crea y envía un agradecimiento" class="seleccionado" href="" >Agradecer</a></li> <!-- Agradecer -->
            <li><a title="Ver los agradecimientos recibidos" href="">Mis agradecimientos</a></li> <!-- Mis agradecimientos -->
            <li class="cerrarDer" ><a href="" ><span  class="cerrar"  > <span class="puerta"></span>Cerrar sesión</span></a></li> <!-- Cerrar sesión -->
        </ul>
    </nav>
    <main>
        <div class="item">
            <p>Agradecimiento 1</p>
            <a href="agradecimiento1.php">Ver</a>
        </div>
        <?php
            $i = 0;
            $total = count($recibidos);
            while ($i < $total) {
                echo '<div class="item">';
                echo '<p>Agradecimiento ' . ($i + 1) . '</p>';
                echo '<a href="'.$recibidos[$i].'">Ver</a>';
                echo '</div>';
                $i++;
            }
        ?>
    </main>
    <footer>
        <!-- COMPLETAR FOOTER -->
    </footer>
</body>
</html>