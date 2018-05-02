<?php include("cms/module/conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
    <?php include 'includes/head.php'; ?>
    <body>
        <?php
            include 'includes/loader.php';
            include 'includes/navbar.php';
            include 'includes/slider.php';
            include 'includes/quienes-somos.php';
            include 'includes/servicios.php';
            include 'includes/galeria.php';
            include 'includes/blog-adelanto.php';
            include 'includes/equipo.php';
            include 'includes/contacto.php';
            include 'includes/footer.php';
            include 'includes/scripts.php';
        ?>
        <div class="fixed-bottom" align="right">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="slider-text.html#" data-scroll-nav="0"><i class="fas fa-arrow-up fa-4x"></i></a>
                </li>
            </ul>
        </div>
        <style type="text/css">
            .fixed-bottom {
                position: fixed;
                right: 20px;
                bottom: 0;
                left: 0;
                z-index: 1030;
            }
        </style>
    </body>
</html>