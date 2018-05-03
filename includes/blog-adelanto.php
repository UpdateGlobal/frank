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
                        $xCategoria     = $filaNot['categoria'];
                        $xNoticia       = $filaNot['noticia'];
                        $xImagen        = $filaNot['imagen'];
                        $xFecha         = $filaNot['fecha'];
                        $xEstado        = $filaNot['estado'];
                ?>
                <div class="pitem">
                    <div class="post-img">
                        <img src="cms/assets/img/noticias/<?php echo $xImagen; ?>" alt="<?php echo $xTitulo; ?>">
                    </div>
                    <div class="content">
                        <span class="tag"><a href="categorias.php?cod_categoria=<?php echo $cod_categoria; ?>"><?php echo $xCategoria; ?></a></span>
                        <h5><a href="post.php?cod_noticia=<?php echo $cod_noticia; ?>"><?php echo $xTitulo; ?></a></h5>
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
    </div>
</section>
<!-- End Blog =========================================== -->