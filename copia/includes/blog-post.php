<!-- ========================================= Start Blog -->
<section class="blog section-padding bg-gray o-hidden" data-scroll-index="6">
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <div class="section-head">
                    <h4>&Uacute;ltimas <span>Noticias</span></h4>
                    <p>Entérate de las últimas novedades o actividades en Marketing Político, en nuestro blog</p>
                </div>
            </div>
            <div class="clear-fix"></div>
        </div>
        <div class="row">
            <div class="col-md-3 wow fadeInUp">
                <h5>Categor&iacute;as</h5>
                <ul class="categorias">
                    <?php
                        $consultarCategoria = "SELECT * FROM noticias_categorias WHERE estado='1' ORDER BY orden";
                        $resultadoCategoria = mysqli_query($enlaces,$consultarCategoria) or die('Consulta fallida: ' . mysqli_error($enlaces));
                        while($filaCat = mysqli_fetch_array($resultadoCategoria)){
                            $xCodigo    = $filaCat['cod_categoria'];
                            $xCategoria = $filaCat['categoria'];
                    ?>
                    <li><a href="categorias.php?cod_categoria=<?php echo $xCodigo; ?>"><i class="fas fa-angle-double-right"></i> <?php echo $xCategoria; ?></a></li>
                    <?php
                        }
                        mysqli_free_result($resultadoCategoria);
                    ?>
                </ul>
            </div>
            <div class="col-md-9 wow fadeInUp">
                <?php
                    $consultarNoticias = "SELECT nc.cod_categoria, nc.categoria, p.* FROM noticias as p, noticias_categorias as nc WHERE p.cod_noticia='$cod_noticia' AND p.estado='1'";
                    $resultadoNoticias = mysqli_query($enlaces,$consultarNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
                    $filaNot = mysqli_fetch_array($resultadoNoticias);
                        $xTitulo        = $filaNot['titulo'];
                        $xCategoria     = $filaNot['categoria'];
                        $xNoticia       = $filaNot['noticia'];
                        $xImagen        = $filaNot['imagen'];
                        $xFecha         = $filaNot['fecha'];
                        $xEstado        = $filaNot['estado'];
                ?>
                <div class="pitem">
                    <div class="post-img" style="margin-top: 0px;">
                        <img src="cms/assets/img/noticias/<?php echo $xImagen; ?>" alt="<?php echo $xTitulo; ?>">
                    </div>
                    <div class="content-post">
                        <span class="categoria-post"><?php echo $xCategoria; ?></span>
                        <h4><?php echo $xTitulo; ?></h4>
                        <?php echo $xNoticia; ?>
                        <hr>
                        <a class="btn-volver" href="blog.php">&lt; Volver</a>
                    </div>
                </div>
                <?php
                    mysqli_free_result($resultadoNoticias);
                ?>
            </div>
        </div>
    </div>
</section>
<!-- End Blog =========================================== -->