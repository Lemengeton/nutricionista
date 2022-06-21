<?php 

include("conexion.php");

$DNI_Usuario = $_POST['DNI_Usuario'];
$Password = $_POST['Password'];


$sql = "SELECT DNI,nombre,apellido from usuario
        where DNI = '".$DNI_Usuario."' and 
              contraseña = '".($Password)."' ";



$consulta_bd = mysqli_query($conexion,$sql);

$row = mysqli_fetch_row($consulta_bd);

if ($row != null)
{
  session_start();
  $_SESSION['DNI_Usuario'] = $row[0];
  header("Location:http://localhost/dietetica/index.php");
}else
{
   header("Location:http://localhost/dietetica/login.php");
}

?>