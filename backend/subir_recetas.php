<?php 
include ('conexion.php');
$nombre = $_POST['receta'];
$tiempo = $_POST['tiempo'];
$descripcion = $_POST['descripcion'];
// Recibo los datos de la imagen
$nombre_img = $_FILES['imagen']['name'];
$tipo = $_FILES['imagen']['type'];
$tamano = $_FILES['imagen']['size'];

//Si existe imagen y tiene un tamaño correcto
   //indicamos los formatos que permitimos subir a nuestro servidor
   if (($_FILES["imagen"]["type"] == "image/gif")
   || ($_FILES["imagen"]["type"] == "image/jpeg")
   || ($_FILES["imagen"]["type"] == "image/jpg")
   || ($_FILES["imagen"]["type"] == "image/png"))
   {
      // Ruta donde se guardarán las imágenes que subamos
      $directorio = $_SERVER['DOCUMENT_ROOT'].'/nutricionista/images/';
      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
      move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_img);
      $imagen = 'images/'.$_FILES['imagen']['name'];
      $sql = "INSERT INTO `recetas`(`nombre`, `tiempo`, `descripción`, `imagen`) VALUES ('".$nombre."','".$tiempo."','".$descripcion."','".$imagen."')";
      	mysqli_query($conexion,$sql);
      	header('location:../ingresar_resetas.php');
    } 
    else 
    {
       //si no cumple con el formato
       echo "No se puede subir una imagen con ese formato ";
    }
 ?>