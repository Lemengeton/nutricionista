<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nutricionista | recetas</title>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="stylesheet.css">
		
</head>
<body class="homepage">
<<<<<<< HEAD
	<?php include ('header.php');  
=======
	<?php include ('header.php');
>>>>>>> ocultar-accesos
	if(isset($_SESSION['DNI_Usuario']))
	{	
	}else{
		header("Location:index.php");
	}
<<<<<<< HEAD
	?>
=======
	 ?>
>>>>>>> ocultar-accesos
	<div class="hero">
		<div class="container recipe-section">
			<img src="./images/logo_rework.svg" class="icon-logo" width="150"/>
            <h1 class="site-title">ingresar recetas</h1>
            <form method="POST" enctype="multipart/form-data" action="backend/subir_recetas.php">
            	<input type="text" name="receta" placeholder="Nombre receta" class="mb-2 input"> <br>
            	<input type="text" name="tiempo" placeholder="Tiempo" class="mb-2 input"> <br>
            	<input type="text" name="calorias" placeholder="Calorias" class="mb-2 input"> <br>
            	<textarea name="descripcion" placeholder="descripcion de receta" class="mb-2"></textarea><br>
            	<textarea name="cocinado" placeholder="metodo de cocinado" class="mb-2"></textarea><br>
            	<input class="imginput mb-2" accept="image/*" type="file" name="imagen"><br>
            	<input id="myInput" class="mb-2 input" type="number" placeholder="Cantidad de ingredientes"><br>
            	<div class="row" id="content"></div>
            	<button class="button mx-auto">Subir</button>
            </form>
        </div>
    </div>
    <?php
	include 'footer.html';
	?>
	<script type="text/javascript">
		$(function(){

  $("#mySelect").change(function(){
  var cantidad =$("#mySelect").val();
    $("#myInput").val(cantidad);
    RenderInputs(cantidad);
  });
  
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
        $('#content').append('<input class="mb-2 input container recipe-section" type="text" name="cantidad[]" placeholder="cantidad"/> ');
        $('#content').append('<input class="mb-2 input container recipe-section" type="text" name="ingrediente[]" placeholder="ingrediente"/> ');
        $('#content').append('</div>');
  }

}
	</script>
</body>
</html>
