<?php
    session_start();
    require ('conectar.php');

    $conexion = conectar();

    $idReceptor = $_POST['idReceptor'];
    $idEmisor = $_SESSION['idAlumno'];
    $mensaje = $_POST['mensaje'];

    $sql = "INSERT INTO agradecimientos (idReceptor, idEmisor, mensaje) VALUES ('$idReceptor', '$idEmisor', '$mensaje');";

    //echo $sql;

    $conexion->query($sql);

    $conexion->close();
    
?>