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
            <div class="col-md-3 col-sm-12 col-xs-12 wow fadeInUp">
                <h5>Categor&iacute;as</h5>
                <ul class="categorias">
                    <?php
                        $consultarCategoria = "SELECT * FROM noticias_categorias WHERE estado='1' ORDER BY orden";
                        $resultadoCategoria = mysqli_query($enlaces,$consultarCategoria) or die('Consulta fallida: ' . mysqli_error($enlaces));
                        while($filaCat = mysqli_fetch_array($resultadoCategoria)){
                            $xCodigo    = $filaCat['cod_categoria'];
                            $xCategoria = $filaCat['categoria'];
                            $xSlug      = $filaCat['slug'];
                    ?>
                    <li><a href="/categorias/<?php echo $xSlug; ?>"><i class="fas fa-angle-double-right"></i> <?php echo $xCategoria; ?></a></li>
                    <?php
                        }
                        mysqli_free_result($resultadoCategoria);
                    ?>
                </ul>
            </div>
            <div class="col-md-9 col-sm-12 col-xs-12 wow fadeInUp">
                <div class="row">
                <?php
                    $consultarNoticias = "SELECT * FROM noticias WHERE cod_categoria='$cod_categoria' AND estado='1'";
                    $resultadoNoticias = mysqli_query($enlaces, $consultarNoticias);
                    $total_registros = mysqli_num_rows($resultadoNoticias);
                    if($total_registros==0){ 
                ?>
                    <h3>No hay entradas en nuestro blog, pronto tendremos novedades.</h3>
                    <div style="height: 40px;"></div>
                <?php 
                    }else{
                        $registros_por_paginas = 4;
                        $total_paginas = ceil($total_registros/$registros_por_paginas);
                        $pagina = intval($_GET['p']);
                        if($pagina<1 or $pagina>$total_paginas){
                            $pagina=1;
                        }
                        $posicion = ($pagina-1)*$registros_por_paginas;
                        $limite = "LIMIT $posicion, $registros_por_paginas";

                        $consultarNoticias = "SELECT nc.cod_categoria, nc.categoria, p.* FROM noticias as p, noticias_categorias as nc WHERE p.cod_categoria='$cod_categoria' AND p.cod_categoria=nc.cod_categoria AND p.estado='1' ORDER BY fecha ASC $limite";
                        $resultadoNoticias = mysqli_query($enlaces,$consultarNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
                        while($filaNot = mysqli_fetch_array($resultadoNoticias)){
                            $cod_noticia    = $filaNot['cod_noticia'];
                            $cod_categoria  = $filaNot['cod_categoria'];
                            $xTitulo        = $filaNot['titulo'];
                            $xCategoria     = $filaNot['categoria'];
                            $xImagen        = $filaNot['imagen'];
                            $xNoticia       = $filaNot['noticia'];
                            $xFecha         = $filaNot['fecha'];
                            $xSlug          = $filaNot['slug'];
                ?>
                <div class="col-md-6 wow fadeInUp">
                    <div class="pitem">
                        <div class="post-img" style="margin-top: 0px;">
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
                            <h5 class="titulo-post"><a href="/blog/<?php echo $xSlug; ?>"><?php echo $xTitulo; ?></a></h5>
                            <p class="text-justify text-post">
                                <?php 
                                    $xResumen_m = strip_tags($xNoticia);
                                    $strCut = substr($xResumen_m,0,200);
                                    $xResumen_m = $strCut.'...';
                                ?>
                                <?php echo $xResumen_m; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
                    }
                    mysqli_free_result($resultadoNoticias);
                ?>
                </div>
                <?php       
                    $paginas_mostrar = 10;
                    if ($total_paginas>1){
                        echo "<div class='pagination-area'>
                                <ul>";
                        if($pagina>1){
                            echo "<li><a href='/categorias/".$slug."&p=".($pagina-1)."'><i class='fa fa-angle-double-left' aria-hidden='true'></i></a></li>";
                        }
                        for($i=$pagina; $i<=$total_paginas && $i<=($pagina+$paginas_mostrar); $i++){
                            if($i==$pagina){
                                echo "<li class='active'><a>$i</a></li>";
                            }else{
                                echo "<li><a href='/categorias/".$slug."&p=$i'>$i</a></li>";
                            }
                        }
                        if(($pagina+$paginas_mostrar)<$total_paginas){
                            echo "<li><a>...</a></li>";
                        }
                        if($pagina<$total_paginas){
                            echo "<li><a href='/categorias/".$slug."&p=".($pagina+1)."'><i class='fa fa-angle-double-right' aria-hidden='true'></i></a></li>";
                        }
                        echo "  </ul>
                            </div>
                        <hr>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- End Blog =========================================== -->