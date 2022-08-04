<!DOCTYPE html>
<html>
<link rel="shortcut icon" type="image/x-icon" href="images/logo_pagina.ico" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

	<title>Nutricionista | recetas</title>

	<!-- Loading third party fonts -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="stylesheet.css">

		<?php 
			include './header.php';
			?> <!-- .site-header -->
</head>
<body>
	<?php 
		if(isset($_SESSION['DNI_Usuario']))
		{	
		}else{
			header("Location:index.php");
		}; ?>
		<div class="hero">
			<div class="container recipe-section">
				<img src="./images/logo_rework.svg" class="icon-logo" width="150"/>
				<h1 class="site-title">Subir Receta</h1>
				<form method="POST" enctype="multipart/form-data" action="backend/subir_recetas.php">
					<input type="text" name="receta" placeholder="Nombre receta" class="mb-2 input" required> <br>
					<input type="text" name="tiempo" placeholder="Tiempo" class="mb-2 input" required> <br>
					<input type="text" name="calorias" placeholder="Calorias" class="mb-2 input" required> <br>
					<textarea name="descripcion" placeholder="descripcion de receta" class="mb-2" required></textarea><br>
					<textarea name="cocinado" placeholder="metodo de cocinado" class="mb-2" required></textarea><br>
					<input class="imginput mb-2" accept="image/*" type="file" name="imagen" required><br>
					<input id="myInput" class="mb-2 input" type="number" placeholder="Cantidad de ingredientes" required><br>
					<div class="row" id="content"></div>
					<button class="button mx-auto" id="formulario_subir">Subir</button>
				</form>
				<h1 class="site-title">Eliminar recetas</h1>
				<form method="POST" enctype="multipart/form-data" action="backend/eleminar_recetas.php">
					<?php  
					include ("backend/conexion.php");
					$sql ="SELECT `id`, `nombre` FROM `recetas` WHERE 1";
					$resp_sql = mysqli_query($conexion,$sql);
					?>
					<select name="receta" class="mb-2 input" required>>
						<option selected disabled>seleccionar receta</option>
						<?php while ($row = mysqli_fetch_array($resp_sql)) {
						 ?>
						<option value="<?php echo $row['id'] ?>"><?php echo $row['nombre']; ?></option>
					<?php } ?>
					</select><br><br>
					<button class="btn btn-danger" id="formulario_baja">Eliminar</button>
				</form>
			</div>
		</div>
		<?php
		include 'footer.html';
		?>
</body>
</html>
<script type="text/javascript">
		$(function(){
  $("#myInput").change(function(){
  var cantidad = $("#myInput").val();
    $("#mySelect").val(cantidad);
    RenderInputs(cantidad);
  });

});

function RenderInputs(cantidad){
$('#content').html('');
  for (var i = 0; i < cantidad; i++) {
  $('#content').append('<div class="homepage">');  
        $('#content').append('<label> ingrediente ' + (i+1) + '</label>');
        $('#content').append('<input class="mb-2 input container recipe-section" type="text" name="cantidad[]" placeholder="cantidad" required/> ');
        $('#content').append('<input class="mb-2 input container recipe-section" type="text" name="ingrediente[]" placeholder="ingrediente" required/> ');
        $('#content').append('</div>');
  }
}
	</script>
