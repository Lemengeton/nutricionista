<?php 
include ('conexion.php');
$recetas = $_POST['receta'];

$sql = "DELETE FROM `recetas` WHERE `id` = ".$recetas."
 ?>