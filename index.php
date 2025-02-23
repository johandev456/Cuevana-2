<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'conexion.php';
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

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/main.css" >
	<title>Cuevana 2</title>
</head>
<body>
<header>
	<a href="#" class="logo">Cuevana 2</a>
	<ul class="nav">
		<li><a href=""><i class="fa fa-home" aria-hidden="true"></i>
		</a></li>
		<li><a href="#">Accion</a></li>
		<li><a href="#">Infantil</a></li>
		<li><a href="#">Trend</a></li>
		<li><a href="#">Favoritos</a></li>
	</ul>
	<div class="search">
		<input type="text" placeholder="Buscar">
		<i class="fa fa-search" aria-hidden="true"></i>
	</div>
</header>
<div class="banner">
	<div class="content the-little-mermaid active">
		<img src="./images/the-little-mermaid-title.png" alt="Movie name" class="movie-title">
		<h4>
			<span>2023</span><span><i>12+</i></span><span>2h 14min</span><span>Romance</span>

		</h4>
		<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, doloribus? Ea itaque animi provident. Perspiciatis laboriosam ipsum earum, quae eligendi, voluptatibus tempora totam molestiae praesentium facere nostrum atque, distinctio alias.

		</p>
		<div class="button">
			<a href="#" ><i class="fa fa-play" aria-hidden="true"></i> Ver</a>
			<a href="#" ><i class="fa fa-plus" aria-hidden="true"></i> Favoritos</a>
			<?php if ($admin) { ?>
				<a href="#" onclick="openModalAgregar()"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</a>
				<a href="#" onclick="openModalEditar()"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
				<a href="#" onclick="openModalBorrar()"><i class="fa fa-trash" aria-hidden="true"></i> Borrar</a>
			<?php } ?>
		</div>
	</div>
	<div class="content bg-65">
		<img src="./images/the-65-title.png" alt="Movie name" class="movie-title">
		<h4>
			<span>2023</span><span><i>15+</i></span><span>2h 14min</span><span>Romance</span>

		</h4>
		<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, doloribus? Ea itaque animi provident. Perspiciatis laboriosam ipsum earum, quae eligendi, voluptatibus tempora totam molestiae praesentium facere nostrum atque, distinctio alias.

		</p>
		<div class="button">
			<a href="#" ><i class="fa fa-play" aria-hidden="true"></i> Ver</a>
			<a href="#" ><i class="fa fa-plus" aria-hidden="true"></i> Favoritos</a>
			<?php if ($admin) { ?>
				<a href="#" onclick="openModalAgregar()"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</a>
				<a href="#" onclick="openModalEditar()"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
				<a href="#" onclick="openModalBorrar()"><i class="fa fa-trash" aria-hidden="true"></i> Borrar</a>
			<?php } ?>
		</div>
	</div>
	<div class="content the-covenant">
		<img src="./images/the-covenant-title.png" alt="Movie name" class="movie-title">
		<h4>
			<span>2023</span><span><i>12+</i></span><span>2h 14min</span><span>Romance</span>

		</h4>
		<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, doloribus? Ea itaque animi provident. Perspiciatis laboriosam ipsum earum, quae eligendi, voluptatibus tempora totam molestiae praesentium facere nostrum atque, distinctio alias.

		</p>
		<div class="button">
			<a href="#" ><i class="fa fa-play" aria-hidden="true"></i> Ver</a>
			<a href="#" ><i class="fa fa-plus" aria-hidden="true"></i> Favoritos</a>
			<?php if ($admin) { ?>
				<a href="#" onclick="openModalAgregar()"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</a>
				<a href="#" onclick="openModalEditar()"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
				<a href="#" onclick="openModalBorrar()"><i class="fa fa-trash" aria-hidden="true"></i> Borrar</a>
			<?php } ?>
		</div>
	</div>
	<div class="content the-black-demon">
		<img src="./images/the-black-demon-title.png" alt="Movie name" class="movie-title">
		<h4>
			<span>2023</span><span><i>12+</i></span><span>2h 14min</span><span>Romance</span>

		</h4>
		<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, doloribus? Ea itaque animi provident. Perspiciatis laboriosam ipsum earum, quae eligendi, voluptatibus tempora totam molestiae praesentium facere nostrum atque, distinctio alias.

		</p>
		<div class="button">
			<a href="#" ><i class="fa fa-play" aria-hidden="true"></i> Ver</a>
			<a href="#" ><i class="fa fa-plus" aria-hidden="true"></i> Favoritos</a>
			<?php if ($admin) { ?>
				<a href="#" onclick="openModalAgregar()"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</a>
				<a href="#" onclick="openModalEditar()"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
				<a href="#" onclick="openModalBorrar()"><i class="fa fa-trash" aria-hidden="true"></i> Borrar</a>
			<?php } ?>
		</div>
	</div>
	<div class="content the-tank">
		<img src="./images/the-tank-title.png" alt="Movie name" class="movie-title">
		<h4>
			<span>2023</span><span><i>12+</i></span><span>2h 14min</span><span>Romance</span>

		</h4>
		<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, doloribus? Ea itaque animi provident. Perspiciatis laboriosam ipsum earum, quae eligendi, voluptatibus tempora totam molestiae praesentium facere nostrum atque, distinctio alias.

		</p>
		<div class="button">
			<a href="#" ><i class="fa fa-play" aria-hidden="true"></i> Ver</a>
			<a href="#" ><i class="fa fa-plus" aria-hidden="true"></i> Favoritos</a>
			<?php if ($admin) { ?>
				<a href="#" onclick="openModalAgregar()"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</a>
				<a href="#" onclick="openModalEditar()"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
				<a href="#" onclick="openModalBorrar()"><i class="fa fa-trash" aria-hidden="true"></i> Borrar</a>
			<?php } ?>
		
				
	</div>
				
				
	</div>
	<?php include 'carrusel.php'; ?>
	<div class="carousel-box">
		<div class="carousel">
			<div class="carousel-item" 
			onclick="changeBg('bg-little-mermaid.jpg', 'the-little-mermaid');">
				<img src="./images/movies/the-little-mermaid.jpeg" alt="">
			</div>
			<div class="carousel-item" 
			onclick="changeBg('bg-65.jpeg', 'bg-65');">
				<img src="./images/movies/65.jpg" alt="">
			</div>
			<div class="carousel-item" 
			onclick="changeBg('bg-the-covenant.jpeg', 'the-covenant');">
				<img src="./images/movies/the-covenant.jpg" alt="">
			</div>
			<div class="carousel-item"
			onclick="changeBg('bg-the-black-demon.jpeg', 'the-black-demon');">
				<img src="./images/movies/the-black-demon.jpg" alt="">
			</div>
			<div class="carousel-item"
			onclick="changeBg('bg-the-tank.jpeg', 'the-tank');">
				<img src="./images/movies/the-tank.jpeg" alt="">
			</div>
			<?php 
			$peliculas = $conexion->prepare("SELECT linkb, nombre, linkp FROM peliculas");
			$peliculas->execute();
			$resultadop = $peliculas->get_result();
			foreach($resultadop as $row){
			?> <div class="carousel-item"
			onclick="changeBgl('<?php echo $row['linkb']; ?>', '<?php echo $row['nombre']?>');">
				<img src="<?php echo $row['linkp']; ?>" alt="">
				</div>
			<?php } ?>
				
		</div>
	</div>
	<
		<a href="#" class="play" onclick="Cerrarvideo()"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Ver trailer</a>
		<ul class="sci">
			<li><a href="#" onclick=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		</ul>
	
</div>
<div class="trailer">
	<!-- Embed YouTube video using iframe -->
	<iframe  src="https://www.youtube.com/embed/kxyyKU8rgaU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<img class="close" src="./images/close.png" alt="" onclick="Cerrarvideo()">
</div>

<!-- Modal Agregar -->
<div id="modalAgregar" class="modal">
    <div class="modal-content">
        <h4>Agregar Película</h4>
        <form id="formAgregar" method="POST" action="admin.php?action=add">
            <div class="input-field">
                <input id="nombre" type="text" name="nombre" required>
                <label for="nombre">Nombre</label>
            </div>
            <div class="input-field">
                <input id="linkl" type="text" name="linkl" required>
                <label for="linkl">Link del logo</label>
            </div>
			<div class="input-field">
                <input id="linkb" type="text" name="linkb" required>
                <label for="linkl">Link del fondo</label>
            </div>
			<div class="input-field">
                <input id="linkp" type="text" name="linkp" required>
                <label for="linkl">Link del poster</label>
            </div>
            <div class="input-field">
                <input id="fecha" type="text" name="fecha" required>
                <label for="fecha">Fecha</label>
            </div>
            <div class="input-field">
                <input id="edad" type="text" name="edad" required>
                <label for="edad">Edad</label>
            </div>
            <div class="input-field">
                <input id="duracion" type="text" name="duracion" required>
                <label for="duracion">Duración</label>
            </div>
            <div class="input-field">
                <input id="genero" type="text" name="genero" required>
                <label for="genero">Género</label>
            </div>
            <div class="input-field">
                <textarea id="descripcion" class="materialize-textarea" name="descripcion" required></textarea>
                <label for="descripcion">Descripción</label>
            </div>
            <button type="submit" class="btn">Agregar</button>
        </form>
    </div>
</div>
<div id="modalEditar" class="modal">
    <div class="modal-content">
        <h4>Editar Película</h4>
        <form id="formEditar" method="POST" action="admin.php?action=add">
            <div class="input-field">
                <input id="enombre" type="text" name="nombre" required>
                <label for="nombre">Nombre</label>
            </div>
            <div class="input-field">
                <input id="elinkl" type="text" name="linkl" required>
                <label for="linkl">Link del logo</label>
            </div>
			<div class="input-field">
                <input id="elinkb" type="text" name="linkb" required>
                <label for="linkl">Link del fondo</label>
            </div>
			<div class="input-field">
                <input id="elinkp" type="text" name="linkp" required>
                <label for="linkl">Link del poster</label>
            </div>
            <div class="input-field">
                <input id="efecha" type="text" name="fecha" required>
                <label for="fecha">Fecha</label>
            </div>
            <div class="input-field">
                <input id="eedad" type="text" name="edad" required>
                <label for="edad">Edad</label>
            </div>
            <div class="input-field">
                <input id="eduracion" type="text" name="duracion" required>
                <label for="duracion">Duración</label>
            </div>
            <div class="input-field">
                <input id="egenero" type="text" name="genero" required>
                <label for="genero">Género</label>
            </div>
            <div class="input-field">
                <textarea id="edescripcion" class="materialize-textarea" name="descripcion" required></textarea>
                <label for="descripcion">Descripción</label>
            </div>
            <button type="submit" class="btn">Editar</button>
        </form>
    </div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 <script type="text/javascript" src="./js/script.js"></script>
<script>
	$(document).ready(function(){
		$('.carousel').carousel();
		$('.modal').modal();
	});

	// Función para abrir el modal de agregar
	function openModalAgregar() {
		$('#modalAgregar').modal('open');
	}
	function openModalEditar(nombre, linkl, linkb, linkp, fecha, edad, duracion, genero, descripcion) {
		$('#enombre').val(nombre);
		$('#elinkl').val(linkl);
		$('#elinkb').val(linkb);
		$('#elinkp').val(linkp);
		$('#efecha').val(fecha);
		$('#eedad').val(edad);
		$('#eduracion').val(duracion);
		$('#egenero').val(genero);
		$('#edescripcion').val(descripcion);
		$('#modalEditar').modal('open');
	}

</script>
</body>
</html>