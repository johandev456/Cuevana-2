<?php
include 'conexion.php';
global $conexion; 
include 'getIP.php';
$consulta = $conexion->prepare("SELECT * FROM ipusuario");
$consulta->execute();
$resultado = $consulta->get_result();
$admin =false;
if ($resultado->num_rows > 0) {
	foreach ($resultado as $row) {
		if ($row['ip'] == obtenerIP()) {
			$admin = true;
			echo "eres admin";
		}
	}
}
if (!$admin) {
    header('Location: index.php');
}
$action = isset($_GET['action']) ? $_GET['action'] : '';

if ($action == 'add') {
    $formattedTitle = str_replace(' ', '_', $_POST['nombre']);

    $nombre = $formattedTitle;
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
} else if($action=='edit'){
    $formattedTitle = str_replace(' ', '_', $_POST['nombre']);

    $nombre = $formattedTitle;
    $linkl = $_POST['linkl'];
    $linkb = $_POST['linkb'];
    $linkp = $_POST['linkp'];
    $fecha = $_POST['fecha'];
    $edad = $_POST['edad'];
    $duracion = $_POST['duracion'];
    $genero = $_POST['genero'];
    $descripcion = $_POST['descripcion'];
  

    $editQuery = $conexion->prepare("UPDATE peliculas SET nombre = ?, linkp = ?, linkb = ?, linkl = ?, fecha = ?, edad = ?, duracion = ?, genero = ?, descripcion = ? WHERE nombre = ?");
    if ($editQuery === false) {
        die('Error en la consulta SQL: ' . $conexion->error);
    }
    $editQuery->bind_param("ssssssssss", $nombre, $linkp, $linkb, $linkl, $fecha, $edad, $duracion, $genero, $descripcion, $nombre);
    if ($editQuery->execute()) {
        echo "Película editada exitosamente";
        header('Location: index.php');
    } else {
        echo "Error al editar la película: " . $editQuery->error;
    }
} else if(is_numeric($action)){
    $id = intval($action);
    $deleteQuery = $conexion->prepare("DELETE FROM peliculas WHERE id = ?");
    if ($deleteQuery === false) {
        die('Error en la consulta SQL: ' . $conexion->error);
    }
    $deleteQuery->bind_param("i", $id);
    if ($deleteQuery->execute()) {
        echo "Película eliminada exitosamente";
        header('Location: index.php');
    } else {
        echo "Error al eliminar la película: " . $deleteQuery->error;
    }
} else if($action=='close'){
   $delete = $conexion->prepare("DELETE FROM ipusuario WHERE ip = ?");
   $delete->bind_param("s", obtenerIP());
    if ($delete->execute()) {
          echo "Sesión cerrada exitosamente";
          header('Location: index.php');
     } else {
          echo "Error al cerrar la sesión: " . $delete->error;
     }

}else
 {
    echo "Acción no válida";
}
?>
