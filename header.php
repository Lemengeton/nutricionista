<header class="site-header">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo_pagina.ico" />
    <div class="container">
    <a href="index.php" id="branding" class="pull-left">
            <img src="images/logo_rework.svg" class="logo"
            width="70"
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
                    echo '<li class="menu-item"><a href="ingresar_recetas.php">Subir/Eliminar Receta</a></li>
                <li class="menu-item-c"><a href="backend/cerrar_sesion.php">Cerrar Sesion</a></li>';
                }else{
                    echo '<li class="menu-item"><a href="login.php">Login</a></li>';
                } ?>
            </ul> <!-- .menu -->
        </div> <!-- .main-navigation -->

        <div class="mobile-navigation"></div>
    </div>
</header> <!-- .site-header -->