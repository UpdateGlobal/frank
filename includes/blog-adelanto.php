<a name="blog"></a>
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
            
            <div class="col-md-12 wow fadeInUp owl-carousel owl-theme">
                <?php
                    $consultarNoticias = "SELECT nc.cod_categoria, nc.categoria, p.* FROM noticias as p, noticias_categorias as nc WHERE p.cod_categoria=nc.cod_categoria AND p.estado='1' ORDER BY fecha DESC";
                    $resultadoNoticias = mysqli_query($enlaces,$consultarNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
                    while($filaNot = mysqli_fetch_array($resultadoNoticias)){
                        $cod_noticia    = $filaNot['cod_noticia'];
                        $cod_categoria  = $filaNot['cod_categoria'];
                        $xTitulo        = $filaNot['titulo'];
                        $xSlug          = $filaNot['slug'];
                        $xCategoria     = $filaNot['categoria'];
                        $xNoticia       = $filaNot['noticia'];
                        $xImagen        = $filaNot['imagen'];
                        $xFecha         = $filaNot['fecha'];
                        $xEstado        = $filaNot['estado'];
                ?>
                <div class="pitem">
                    <div class="post-img">
                        <img src="/cms/assets/img/noticias/<?php echo $xImagen; ?>" alt="<?php echo $xTitulo; ?>">
                    </div>
                    <div class="content">
                        <?php
                            $consultarCategoria = "SELECT * FROM noticias_categorias WHERE estado='1' AND cod_categoria='$cod_categoria' ORDER BY orden";
                            $resultadoCategoria = mysqli_query($enlaces,$consultarCategoria) or die('Consulta fallida: ' . mysqli_error($enlaces));
                            $filaCat = mysqli_fetch_array($resultadoCategoria);
                                $xSlugc     = $filaCat['slug'];
                        ?>
                        <span class="tag"><a href="/categorias/<?php echo $xSlugc; ?>"><?php echo $xCategoria; ?></a></span>
                        <?php mysqli_free_result($resultadoCategoria); ?>
                        <h5><a href="/blog/<?php echo $xSlug; ?>"><?php echo $xTitulo; ?></a></h5>
                        <p class="text-justify">
                            <?php 
                                $xResumen_m = strip_tags($xNoticia);
                                $strCut = substr($xResumen_m,0,200);
                                $xResumen_m = $strCut.'...';
                            ?>
                            <?php echo $xResumen_m; ?>
                        </p>
                    </div>
                </div>
                <?php
                    }
                    mysqli_free_result($resultadoNoticias);
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <a class="btn-volver" href="/blog.php" style="margin-top: 30px;">Ver todas las noticias</a>
            </div>
        </div>
    </div>
</section>
<!-- End Blog =========================================== -->