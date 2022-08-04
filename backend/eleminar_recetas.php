<?php 
include ('conexion.php');
$recetas = $_POST['receta'];

$sql = "DELETE FROM `recetas` WHERE `id` = ".$recetas."";
mysqli_query($conexion,$sql);

$sql = "DELETE FROM `ingredientes` WHERE `ID_receta` = ".$recetas."";
mysqli_query($conexion,$sql);

header('location:../ingresar_recetas.php');
 ?>