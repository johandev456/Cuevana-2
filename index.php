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
		<?php if ($admin) { ?>
			<li><a href="admin.php?action=close">Cerrar sesion</a></li>
		<?php } ?>
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
	
	<?php include 'carrusel.php'; ?>
	<div class="carousel-box">
		<div class="carousel">
			
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
        <form id="formEditar" method="POST" action="admin.php?action=edit">
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