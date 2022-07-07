<?php 
include ("backend/conexion.php"); ?>
<!DOCTYPE html>
<html lang="en">
	<?php  
	$id = $_POST['receta'];
	$sql ="SELECT `nombre`, `tiempo`, `descripcion`, `imagen`, `calorias`, `m_cocinado` FROM `recetas` WHERE recetas.id = '".$id."'";
	$sql1 ="SELECT `cantidad`, `ingrediente` FROM `ingredientes` WHERE ingredientes.ID_receta = '".$id."'";
	$resp_sql = mysqli_query($conexion,$sql);
	$resp_sql1 = mysqli_query($conexion,$sql1);
	?>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Diatecian | Recipe Single</title>
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
		
		<?php
		include 'header.php'; 
		?> <!-- .site-header -->
		<?php while ($row = mysqli_fetch_array($resp_sql)) {?>
			<main class="main-content">
				
				<div class="content">
					<div class="container">
						
						<div class="row">
							<div class="col-md-4">
								<figure><img src="<?php echo $row['imagen']; ?>" style="max-height: 550px; max-width: 450px;"></figure>
							</div>
							<div class="col-md-7 col-md-offset-1">
								<h2 class="entry-title"><?php echo $row['nombre']; ?></h2>
								<div class="recipe-meta">
									<span class="time"><img src="images/icon-time.png"><?php echo $row['tiempo']; ?></span>
								</div>
								<div class="ingredient">
									<h3>Ingredientes</h3>
									<?php while ($row1 = mysqli_fetch_array($resp_sql1)){ ?>
									<table>
										<tr>
											<td><strong><?php echo $row1['cantidad']; ?></strong></td> 
											<td><?php echo $row1['ingrediente'] ?></td>
										</tr>
									</table>
									<?php  }?>	
								</section>
							</div>
							<p>
								<?php 
								echo $row['m_cocinado']; ?>
							</p>
						</div>
						
					</div>
				</div>

			</main> <!-- .main-content -->
		<?php } ?>
			
			<?php
				include 'footer.html';
			?> <!-- Footer -->

		</div>

		

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>