<?php 
include ('backend/conexion.php');
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Nutricionista | Recetas</title>
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

	</head>


	<body>
		
		<div id="site-content">
			<?php 
			include './header.php';
			?> <!-- .site-header -->

<main class="main-content">
	<?php  
	$sql ="SELECT `id`, `nombre`, `tiempo`, `descripcion`, `imagen`, `calorias` FROM `recetas` WHERE 1";
	$resp_sql = mysqli_query($conexion,$sql);
	?>
				
				<div class="content">
					<div class="container">
						
						<h2 class="entry-title">Recetas</h2>
						<p>Recetas recomendadas por nosotros. </p>

						<div class="Recetas-list">
							<?php while ($row = mysqli_fetch_array($resp_sql)) {
								?>
								<article class="recipe">
								<figure class="recipe-image"><img src="<?php echo $row['imagen'] ?>" alt="Food 1" class="receta_imagen"></figure>
								<div class="recipe-detail">
									<h2 class="recipe-title"><a href="single.php"><?php echo $row['nombre']; ?></a></h2>
									<p><?php echo $row['descripcion']; ?></p>
									<div class="recipe-meta">
										<span class="time"><img src="images/icon-time.png"> <?php echo $row['tiempo']; ?></span>
										<span class="calorias"><img src="images/icon-pie-chart.png"><?php echo $row['calorias']; ?></span>
									</div>
								</div>
							</article>
								<?php
							} ?>
							<article class="recipe">
								<figure class="recipe-image"><img src="images/pan_carne.png" alt="Food 1" class="receta_imagen"></figure>
								<div class="recipe-detail">
									<h2 class="recipe-title"><a href="single.php">Pan de Carne</a></h2>
									<p>El pan de carne (o pastel de carne) es un plato cuyo principal ingrediente es la carne, que consiste en carne picada de vaca, ternera, cordero o cerdo (a veces una combinaci??n de algunas) y ali??ada con pan rallado (a veces se le a??ade granos de cereales) y especias.??? </p>
									<div class="recipe-meta">
										<span class="time"><img src="images/icon-time.png"> 40 min</span>
									</div>
								</div>
							</article>
							<article class="recipe">
								<figure class="recipe-image"><img src="images/carrot_cake.png" alt="Food 2" class="receta_imagen"></figure>
								<div class="recipe-detail">
									<h2 class="recipe-title"><a href="single.php">Carrot Cake(Pastel de Zanahoria)</a></h2>
									<p>El pastel de zanahoria, tarta de zanahoria o torta de zanahoria es un pastel dulce con zanahoria machacada mezclada en la masa. La zanahoria se ablanda en el proceso de cocci??n, y la tarta suele tener una textura densa y suave. Las zanahorias mejoran el sabor, textura y apariencia del pastel. En ocasiones se a??ade nuez tostada a la mezcla.</p>
									<div class="recipe-meta">
										<span class="time"><img src="images/icon-time.png"> 25-35 Min</span>
									</div>
								</div>
							</article>
							<article class="recipe">
								<figure class="recipe-image"><img src="images/tacos_pollo.png" alt="Food 3" class="receta_imagen"></figure>
								<div class="recipe-detail">
									<h2 class="recipe-title"><a href="single.php">Tacos de Pollo</a></h2>
									<p>El taco es una preparaci??n culinaria muy popular de M??xico que consiste en una tortilla, generalmente de ma??z, que se dobla o se enrolla para contener dentro diversos ingredientes y alg??n tipo de salsa.??? Es el ??antojito?? m??s representativo de la cocina mexicana y se puede encontrar en todos los lugares de la rep??blica y en restaurantes mexicanos por todo el mundo.</p>
									<div class="recipe-meta">
										<span class="time"><img src="images/icon-time.png"> 40 min</span>
									</div>
								</div>
							</article>
							<article class="recipe">
								<figure class="recipe-image"><img src="images/ensalada.png" alt="Food 4" class="receta_imagen"></figure>
								<div class="recipe-detail">
									<h2 class="recipe-title"><a href="single.php">Ensalada sencilla</a></h2>
									<p>7 pasos f??ciles crea una ensalada que puedes llevar al trabajo.
										??Te ahorrar?? tiempo y esfuerzo, el resultado ser?? delicioso!</p>
									<div class="recipe-meta">
										<span class="time"><img src="images/icon-time.png"> 10 min</span>
									</div>
								</div>
							</article>
							<article class="recipe">
								<figure class="recipe-image"><img src="images/huevo_sus.png" alt="Food 5" class="receta_imagen"></figure>
								<div class="recipe-detail">
									<h2 class="recipe-title"><a href="single.php">Sustituto de huevos!</a></h2>
									<p>Ten??s que cocinar y te diste cuenta que no ten??s huevos? Ahora te cuento c??mo reemplazarlo.</p>
									<div class="recipe-meta">
										<span class="time"><img src="images/icon-time.png"> 15 min</span>
									</div>
								</div>
							</article>
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