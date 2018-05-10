<a name="galeria"></a>
<!-- ========================================= Start Portfolio -->
<section class="portfolio section-padding pb-0" style="background-color: #f7f7f7" data-scroll-index="4">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <div class="section-head">
                    <h4>Nuestros <span>Trabajos</span></h4>
                    <p>Hemos reunido lo mejor de nuestra experiencia profesional en <a href="#" style="color: black";> <strong> Marketing Político en el Perú, </strong></a> <br>en la siguiente galería</p>
                </div>
            </div>
            <div class="clear-fix"></div>

            <div class="container">
                <!-- filter links -->
                <div class="filtering mb-50">
                    <span data-filter='*' class="active">Todo</span>
                    <?php
                        $consultarCategoria = "SELECT * FROM galerias_categorias ORDER BY orden";
                        $resultadoCategoria = mysqli_query($enlaces,$consultarCategoria) or die('Consulta fallida: ' . mysqli_error($enlaces));
                        while($filaCat = mysqli_fetch_array($resultadoCategoria)){
                            $xCategoria = $filaCat['categoria'];
                            $xSlug = $filaCat['slug'];
                    ?>
                    <span data-filter='.<?php echo $xSlug; ?>'><?php echo $xCategoria; ?></span>
                    <?php
                        }
                        mysqli_free_result($resultadoCategoria);
                    ?>
                </div>
            </div>

            <!-- gallery -->
            <div class="gallery text-center full-width">
                <?php
                    $consultarGal = "SELECT gc.cod_categoria, gc.categoria, gc.slug, g.* FROM galerias_categorias as gc, galerias as g WHERE g.cod_categoria=gc.cod_categoria AND g.estado='1' ORDER BY orden ASC";
                    $resultadoGal = mysqli_query($enlaces,$consultarGal) or die('Consulta fallida: ' . mysqli_error($enlaces));
                    while($filaGal = mysqli_fetch_array($resultadoGal)){
                        $xCodigo        = $filaGal['cod_galeria'];
                        $xCategoria     = utf8_encode($filaGal['categoria']);
                        $xSlug          = $filaGal['slug'];
                        $xNomGal        = utf8_encode($filaGal['titulo']);
                        $xDescripcion   = utf8_encode($filaGal['descripcion']);
                        $xCategoria     = $filaGal['categoria'];
                        $xImagen        = $filaGal['imagen'];
                        $xVideo         = $filaGal['video'];
                ?>
                <!-- gallery item -->
                <div class="col-md-4 o-hidden items <?php echo $xSlug; ?>">
                    <div class="item-img wow slideInLeft">
                        <img src="/cms/assets/img/galerias/<?php echo $xImagen; ?>" alt="image">
                        <div class="item-img-overlay valign">
                            <div class="overlay-info full-width vertical-center">
                                <h6><?php echo $xNomGal; ?></h6>
                                <p><?php echo $xDescripcion; ?></p>
                            </div>
                            <?php if($xVideo==""){ ?>
                                <a href="/cms/assets/img/galerias/<?php echo $xImagen; ?>" class="popimg">
                                <i class="fas fa-image"></i></a>
                            <?php }else{ ?>
                                <a href="<?php echo $xVideo; ?>" data-lity>
                                <i class="fas fa-video"></i></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php
                    }
                    mysqli_free_result($resultadoGal);
                ?>
                <div class="clear-fix"></div>
            </div>
        </div>
    </div>
</section>
<!-- End Portfolio =========================================== -->