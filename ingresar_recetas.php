<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nutricionista | Recetas</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="stylesheet.css">
</head>
<body class="homepage">
	<?php include ('header.php');
	include ('backend/conexion.php');
	if(isset($_SESSION['DNI_Usuario']))
	{	
	}else{
		header("Location:index.php");
	}
	?>
	<div class="hero">
		<div class="container recipe-section">
			<img src="./images/logo_rework.svg" class="icon-logo" width="150"/>
			<h1 class="site-title">ingresar recetas</h1>
			<form method="POST" enctype="multipart/form-data" action="backend/subir_recetas.php">
				<input type="text" name="receta" placeholder="Nombre receta" class="mb-2 input"> <br>
				<input type="text" name="tiempo" placeholder="Tiempo" class="mb-2 input"> <br>
				<input type="text" name="calorias" placeholder="Calorias" class="mb-2 input"> <br>
				<textarea name="descripcion" placeholder="descripcion de receta" class="mb-2"></textarea><br>
				<input class="imginput mb-2" accept="image/*" type="file" name="imagen"><br>
				<input id="myInput" class="mb-2 input" type="number" placeholder="Cantidad de ingredientes">
				<div class="row" id="content" style="width: 200px; height: 200px;"></div>
				<button class="button mx-auto">Subir</button>
			</form>
		</div>
	</div>
	<script type="text/javascript">
		$(function(){
			$("#myInput").change(function(){
				var cantidad = $("#myInput").val();
				RenderInputs(cantidad);
			} );
		});
		function RenderInputs(cantidad){
			$('#content').html('');
			for (var i = 0; i < cantidad; i++) {
				$('#content').append('<div class="homepage">');  
				$('#content').append('<label> ingrediente ' + (i+1) + '</label>');
				$('#content').append('<input class="mb-2 input container recipe-section" type="text" name="cantidad_i[]" placeholder="cantidad"/> ');
        $('#content').append('<input class="mb-2 input container recipe-section" type="text" name="ingrediente[]" placeholder="ingrediente"/> ');
        $('#content').append('</div>');
      }
    }
  </script>
  <?php
  include 'footer.html';
	?>
</body>
</html>