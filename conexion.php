<?php
$host = "localhost";
$usuario ="root";
$clave = "alex010101";
$basededatos="cuevana2";
$conexion = new mysqli($host,$usuario,$clave,$basededatos);
mysqli_set_charset($conexion, "utf8");
if($conexion->connect_error){
    die("Error de conexion: ".$conexion->connect_error);
}

?>