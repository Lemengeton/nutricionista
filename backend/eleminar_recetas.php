<?php 
include ('conexion.php');
$recetas = $_POST['receta'];

$sql = "DELETE FROM `recetas` WHERE `id` = ".$recetas."";
mysqli_query($conexion,$sql);

$sql = "DELETE FROM `ingredientes` WHERE `ID_receta` = ".$recetas."";
mysqli_query($conexion,$sql);

echo'<script type="text/javascript">
    alert("Receta Eliminada");
    window.location.href="../ingresar_recetas.php";
    </script>';
 ?>