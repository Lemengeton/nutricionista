<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="stylesheet.css">
		<title>Nutricionista | Login</title>
</head>
<body class="homepage">
	<?php
		include ('header.php');
		if(isset($_SESSION['DNI_Usuario']))
	{
		header("Location:./index.php");
	}else
	?>
	<div class="hero">
		<div class="container login-section">
			<img src="./images/logo_rework.svg" class="icon-logo" width="150"/>
            <h1 class="site-title">Login</h1>
            <form method="post" action="backend/login_user.php" class="">
            	<input type="text" name="DNI_Usuario" class="mb-2" placeholder="DNI"><br>
            	<input type="password" name="Password" class="mb-2" placeholder="Contraseña"><br>
            	<button class="button mx-auto">Enviar</button>
            </form>
        </div>
    </div>
	<?php
	include 'footer.html';
	?>
</body>
</html>