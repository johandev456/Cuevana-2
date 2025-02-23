<?php
include 'conexion.php';
global $conexion; 

$action = isset($_GET['action']) ? $_GET['action'] : '';

if ($action == 'add') {
    $nombre = $_POST['nombre'];
    $linkl = $_POST['linkl'];
    $linkb = $_POST['linkb'];
    $linkp = $_POST['linkp'];
    $fecha = $_POST['fecha'];
    $edad = $_POST['edad'];
    $duracion = $_POST['duracion'];
    $genero = $_POST['genero'];
    $descripcion = $_POST['descripcion'];

    $addQuery = $conexion->prepare("INSERT INTO peliculas (nombre, linkp, linkb, linkl, fecha, edad, duracion, genero, descripcion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    if ($addQuery === false) {
        die('Error en la consulta SQL: ' . $conexion->error);
    }
    $addQuery->bind_param("sssssssss", $nombre, $linkp, $linkb, $linkl, $fecha, $edad, $duracion, $genero, $descripcion);
    if ($addQuery->execute()) {
        echo "Película agregada exitosamente";
        header('Location: index.php');
    } else {
        echo "Error al agregar la película: " . $addQuery->error;
    }
} else {
    echo "Acción no válida";
}
?>
