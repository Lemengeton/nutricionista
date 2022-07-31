<header class="site-header">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|" rel="stylesheet" type="text/css">
        <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="fonts/iconmoon.css" rel="stylesheet" type="text/css">
        <!-- Loading main css file -->
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="./stylesheet.css">
    <div class="container">
        <a href="index.php" id="branding" class="pull-left">
            <img src="images/logo_rework.svg" class="logo"
            width="60"
            />
            <h1 class="site-title">Griselda</h1>
        </a>
        <!-- Default snippet for navigation -->
        <div class="main-navigation pull-right">
            <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
            <ul class="menu">
                <li class="menu-item"><a href="about.php">Sobre mi</a></li>
                <li class="menu-item"><a href="offer.php">Servicios</a></li>
                <li class="menu-item"><a href="recipe.php">Recetas</a></li>
                <li class="menu-item"><a href="contacto.php">Contacto</a></li>
                <?php 
                session_start();
                if(isset($_SESSION['DNI_Usuario']))
                {
                    echo '<li class="menu-item"><a href="ingresar_recetas.php">Subir recetas</a></li>
                <li class="menu-item"><a href="backend/cerrar_sesion.php">cerrar sesion</a></li>';
                }else{
                    echo '<li class="menu-item"><a href="login.php">Login</a></li>';
                } ?>
            </ul> <!-- .menu -->
        </div> <!-- .main-navigation -->

        <div class="mobile-navigation"></div>
    </div>
</header> <!-- .site-header -->