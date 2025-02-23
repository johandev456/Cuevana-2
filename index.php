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
				<a href="admin.php"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</a>
<a href="admin.php"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
<a href="admin.php"><i class="fa fa-trash" aria-hidden="true"></i> Borrar</a>
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
				<a href="admin.php"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</a>
<a href="admin.php"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
<a href="admin.php"><i class="fa fa-trash" aria-hidden="true"></i> Borrar</a>
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
				<a href="admin.php"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</a>
<a href="admin.php"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
<a href="admin.php"><i class="fa fa-trash" aria-hidden="true"></i> Borrar</a>
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
				<a href="admin.php"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</a>
<a href="admin.php"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
<a href="admin.php"><i class="fa fa-trash" aria-hidden="true"></i> Borrar</a>
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
				<a href="admin.php"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</a>
<a href="admin.php"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
<a href="admin.php"><i class="fa fa-trash" aria-hidden="true"></i> Borrar</a>
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
			<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		</ul>
	
</div>
<div class="trailer">
	<!-- Embed YouTube video using iframe -->
	<iframe  src="https://www.youtube.com/embed/kxyyKU8rgaU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<img class="close" src="./images/close.png" alt="" onclick="Cerrarvideo()">
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 <script type="text/javascript" src="./js/script.js"></script>
<script>
	$(document).ready(function(){
		$('.carousel').carousel();
	});
</script>
</body>
</html>