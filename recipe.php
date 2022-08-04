<?php 
include ('backend/conexion.php');
 ?>
<!DOCTYPE html>
<link rel="shortcut icon" type="image/x-icon" href="images/logo_pagina.ico" />
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Nutricionista | Recetas</title>
		<link rel="stylesheet" href="stylesheet.css">
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="fonts/iconmoon.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->
<?php 
			include './header.php';
			?> <!-- .site-header -->
	</head>


	<body>
		
		<div id="site-content">

<main class="main-content">
	<?php  
	$sql ="SELECT `id`, `nombre`, `tiempo`, `descripcion`, `imagen`, `calorias` FROM `recetas` WHERE 1";
	$resp_sql = mysqli_query($conexion,$sql);
	?>
				
				<div class="content">
					<div class="container">
						
						<h2 class="entry-title">Recetas</h2>
						<p>Recetas recomendadas. </p>

						<div class="Recetas-list">
							<?php while ($row = mysqli_fetch_array($resp_sql)) {
								?>
								<form method="POST" action="single.php">
								<article class="recipe">
								<figure class="recipe-image"><img src="<?php echo $row['imagen'] ?>" alt="Food 1" class="receta_imagen"></figure>
								<div class="recipe-detail">
									<button class="trans text-start"><h2 class="recipe-title"><?php echo $row['nombre']; ?></h2></button>
									<p><?php echo $row['descripcion']; ?></p>
									<div class="recipe-meta">
										<span class="time"><img src="images/icon-time.png"> <?php echo $row['tiempo']; ?>&nbsp;Min</span>
										<span class="calorie"><img src="images/icon-pie-chart.png"><?php echo $row['calorias']; ?>&nbsp;Cal</span>
									</div>
								</div>
							</article>
							<input type="hidden" name="receta" value="<?php echo $row['id']; ?>">
							</form>
								<?php
							} ?>
						</div>
					</div>
				</div>
			</main> <!-- .main-content -->
			
			<?php
				include 'footer.html';
			?> <!-- Footer -->

		</div>

		

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>