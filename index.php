<!DOCTYPE html>
<html lang="esp">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Nutricionista</title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="fonts/iconmoon.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		
		<link rel="stylesheet" href="./stylesheet.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body class="homepage">
		
		<?php
		include 'header_index.html';
		?> <!-- .site-header -->

			<div class="hero">
				<div class="container">
				<img src="images/logo_rework.svg" class="icon-logo"
            width="150"
            />
					<h1 class="site-title">Griselda</h1>
					<small class="site-description">Nutricionista profesional</small>
				</div>
			</div>

			<main class="main-content">
				<div class="fullwidth-block cooking-section category-block">
					<div class="container">
						<figure><img src="images/hypertension.png" alt="cooking"></figure>
						<div class="category-content">
							<h1 class="category-title">Hipertensión</h1>
							<p>La presión arterial alta (hipertensión) es una afección frecuente en la que la fuerza que ejerce la sangre contra las paredes de tus arterias con el transcurso del tiempo es lo suficientemente alta como para poder causarte problemas de salud, como una enfermedad cardíaca.</p>
							<p>
								<button class="button" type="button" data-bs-toggle="collapse" data-bs-target="#ver_mas" aria-expanded="false" aria-controls="ver_mas">
								  Ver mas
								</button>
							</p>
							<div class="collapse" id="ver_mas">
								<div class="card card-body collapseT">
									<p>La presión arterial está determinada tanto por la cantidad de sangre que el corazón bombea como por el grado de resistencia al flujo de la sangre en las arterias. Cuanta más sangre tu corazón bombee y cuanto más estrechas estén tus arterias, mayor será tu presión arterial. La lectura de la presión arterial se determina en milímetros de mercurio (mm Hg). Tiene dos números.</p>
									<p>Se puede tener presión arterial alta durante años sin presentar ningún síntoma. La presión arterial alta no controlada aumenta el riesgo de padecer graves problemas de salud, como el ataque cardíaco y el accidente cerebro vascular. Afortunadamente, la presión arterial alta se puede detectar fácilmente. Y, una vez que sabes que tienes presión arterial alta, puedes trabajar con tu médico para controlarla. Como tu nutri estoy dispuesta a enseñarte a regular tu presión arterial a través de una dieta balanceada y adecuada a tu cuerpo.</p>
								</div>
							</div>
						</div> <!-- .category-content -->
					</div>
				</div> <!-- .cooking-section -->
				<div class="fullwidth-block restaurant-section category-block">
					<div class="container">
						<figure><img src="images/fe.jpg" alt="restaurant"></figure>
						<div class="category-content">
							<h1 class="category-title">Hierro(Fe) en los vegetales </h1>
							<p>El hierro es un mineral necesario para el crecimiento y desarrollo del cuerpo. El cuerpo utiliza el hierro para fabricar la hemoglobina, una proteína de los glóbulos rojos que transporta el oxígeno de los pulmones a distintas partes del cuerpo, y la mioglobina, una proteína que provee oxígeno a los músculos.</p>
							<button class="button" type="button" data-bs-toggle="collapse" data-bs-target="#ver_mas1" aria-expanded="false" aria-controls="ver_mas1">Ver mas</button>
							<div class="collapse" id="ver_mas1">
								<div class="card card-body collapseT">
								<p>
									El cuerpo también requiere hierro para elaborar hormonas y tejido conectivo. Es importante consumir alimentos que lo aporten como carnes, legumbre y vegetales, sobre todo los de hoja verde oscuro. La cantidad diaria de hierro que nuestro cuerpo necesita varía según edad y etapa de la vida.
								</p>
								</div>
							</div>
						</div> <!-- .category-content -->
					</div>
				</div> <!-- .restaurant-section -->
				<div class="fullwidth-block fruits-section category-block">
					<div class="container">
						<figure><img src="images/huevo_sus.png" alt="fruits"></figure>
						<div class="category-content">
							<h1 class="category-title">Sustitutos del huevo</h1>
							<p>Tenés que cocinar y te diste cuenta que no tenés huevos? Ahora te contamos cómo reemplazarlo.</p>
							<button class="button" type="button" data-bs-toggle="collapse" data-bs-target="#ver_mas2" aria-expanded="false" aria-controls="ver_mas2">Ver mas</button>
							<div class="collapse" id="ver_mas2">
								<div class="card card-body collapseT">
								<p>
									Para preparaciones dulces: puré de ½ banana. 3 cdas de manteca de maní. Puré de ¼ de manzana.
								</p>
								<p>
									Preparaciones saladas: 1 cdta de agar-agar + 1 cda de agua. 1 cdta de semillas de chía + ¼ taza de agua. ¼ taza de tofu. 1 cda de bicarbonato de sodio + 1 cda de vinagre blanco o de manzana. Recordá que cada opción es por 1 huevo, así que si necesitás más solo multiplicá la opción elegida por la cantidad de huevos que lleva tu receta y listo!!
								</p>
								</div>
							</div>
						</div> <!-- .category-content -->
					</div>
				</div> <!-- .fruits-section -->
				<div class="fullwidth-block vegetables-section category-block">
					<div class="container">
						<figure><img src="images/28998.png" alt="vegetables"></figure>
						<div class="category-content">
							<h1 class="category-title">Diabetes</h1>
							<p>La diabetes es una enfermedad en la que los niveles de glucosa (azúcar) de la sangre están muy altos. La glucosa proviene de los alimentos que consume. La insulina es una hormona que ayuda a que la glucosa entre a las células para suministrarles energía. En la diabetes tipo 1, el cuerpo no produce insulina. En la diabetes tipo 2, la más común, el cuerpo no produce o no usa la insulina de manera adecuada. Sin suficiente insulina, la glucosa permanece en la sangre.</p>
							<button class="button" type="button" data-bs-toggle="collapse" data-bs-target="#ver_mas3" aria-expanded="false" aria-controls="ver_mas3">Ver mas</button>
							<div class="collapse" id="ver_mas3">
								<div class="card card-body collapseT">
									<p>
									Con el tiempo, el exceso de glucosa en la sangre puede causar problemas serios. Puede dañar los ojos, los riñones y los nervios. La diabetes también puede causar enfermedades cardíacas, derrames cerebrales y la necesidad de amputar un miembro.
								</p>
								<p>
									Las mujeres embarazadas también pueden desarrollar diabetes, llamada diabetes gestacional.<br>
								
									Un análisis de sangre puede mostrar si tiene diabetes. El ejercicio, el control de peso y respetar el plan de comidas puede ayudar a controlar la diabetes. También debe controlar el nivel de glucosa en sangre y, si tiene receta médica, tomar medicamentos. 
									Si vos tenés diabetes yo te puedo ayudar con tus comidas y te voy a enseñar cómo mejorar tu dieta poco a poco para cambiar tu estilo de alimentación.
								</p>
								</div>
							</div>
						</div> <!-- .category-content -->
					</div>
				</div> <!-- .vegetables-section -->

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