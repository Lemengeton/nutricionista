<?php 
include ('conexion.php');
$nombre = $_POST['receta'];
$tiempo = $_POST['tiempo'];
$descripcion = $_POST['descripcion'];
$calorias = $_POST['calorias'];
$ingredientes = $_POST['ingrediente'];
$cantidad = $_POST['cantidad'];
$contador = sizeof($ingredientes) -1;
$cocinado = $_POST['cocinado'];
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
      $sql = "INSERT INTO `recetas`(`nombre`, `tiempo`, `descripcion`, `imagen`, `calorias`, `m_cocinado`) VALUES ('".$nombre."','".$tiempo."','".$descripcion."','".$imagen."','".$calorias."','".$cocinado."')";

      	mysqli_query($conexion,$sql);

      $sql1 ="SELECT `id` FROM `recetas` WHERE recetas.nombre = '".$nombre."'";

      $resp_sql = mysqli_query($conexion,$sql1);

      $ID = mysqli_fetch_row($resp_sql);

      for ($i=0; $i < $contador; $i++) { 
      $sql2 ="INSERT INTO `ingredientes`(`ID_receta`, `cantidad`, `ingrediente`) VALUES ('".$ID[0]."','".$cantidad[$i]."','".$ingredientes[$i]."')";
         mysqli_query($conexion,$sql2);
   }
         header('location:../ingresar_recetas.php');
    } 
    else 
    {
       //si no cumple con el formato
       echo "No se puede subir una imagen con ese formato";
    }
 ?>