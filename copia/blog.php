<?php include("cms/module/conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
    <?php include 'includes/head.php'; ?>
    <body>
        <?php
            include 'includes/loader.php';
            include 'includes/navbar_int.php';
        ?>
        <header class="header slider bg-img" data-scroll-index="0" data-overlay-dark="7" data-background="img/bg3.jpg" data-stellar-background-ratio="0.5" id="inicio" style="height: 180px;"></header>
        <?php 
            include 'includes/blog.php';
            include 'includes/footer.php';
            include 'includes/scripts.php';
        ?>
        <div class="fixed-bottom" align="right">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-scroll-nav="0"><i class="fas fa-arrow-up fa-4x"></i></a>
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