<?php
include 'conexion.php';

global $conexion; 

$peliculas = $conexion->prepare("SELECT * FROM peliculas");
$peliculas->execute();
$resultadop = $peliculas->get_result();

foreach($resultadop as $row) {
    ?>
    <div class="content <?php echo $row['nombre']; ?>">
        <img src="<?php echo $row['linkl']; ?>" alt="Movie name" class="movie-title">
        <h4>
            <span><?php echo $row['fecha']; ?></span><span><i><?php echo $row['edad']; ?>+</i></span><span><?php echo $row['duracion']; ?></span><span><?php echo $row['genero']; ?></span>
        </h4>
        <p>
            <?php echo $row['descripcion']; ?>
        </p>
        <div class="button">
            <a href="#"><i class="fa fa-play" aria-hidden="true"></i> Ver</a>
            <a href="#"><i class="fa fa-plus" aria-hidden="true"></i> Favoritos</a>
            <?php
            if ($admin) {
                echo '<a href="#" onclick="openModalAgregar()"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</a>';
                echo '<a href="#" onclick="openModalEditar(\'' . $row['nombre'] . '\', \'' . $row['linkl'] . '\',\'' . $row['linkb'] . '\',\'' . $row['linkp'] . '\', \'' . $row['fecha'] . '\', \'' . $row['edad'] . '\', \'' . $row['duracion'] . '\', \'' . $row['genero'] . '\', \'' . $row['descripcion'] . '\')"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>';
                echo '<a href="admin.php?action=' . $row['id'] . '"><i class="fa fa-trash" aria-hidden="true"></i> Borrar</a>';
            }
            ?>
        </div>
    </div>
    <?php
}
?>
