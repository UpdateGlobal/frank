<a name="que-hacemos"></a>
<!-- ========================================= Start services -->
<section class="services section-padding text-center" data-scroll-index="3">
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <div class="section-head">
                    <h4>Como ayudamos <span> en tu Campaña Política</span></h4>
                    <?php
                        $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='2' AND estado='1'";
                        $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                        $filaCon = mysqli_fetch_array($resultadoCon);
                            $xCodigo      = $filaCon['cod_contenido'];
                            $xContenido   = $filaCon['contenido'];
                            $xEstado      = $filaCon['estado'];
                    ?>
                    <p><?php echo $xContenido; ?></p>
                    <?php mysqli_free_result($resultadoCon); ?>
                </div>
            </div>
            <div class="clear-fix"></div>
            <?php
                $consultarServicio = "SELECT * FROM servicios WHERE estado='1' ORDER BY orden";
                $resultadoServicio = mysqli_query($enlaces,$consultarServicio) or die('Consulta fallida: ' . mysqli_error($enlaces));
                while($filaSer = mysqli_fetch_array($resultadoServicio)){
                    $xCodigo      = $filaSer['cod_servicio'];
                    $xIcon        = $filaSer['icon'];
                    $xTitulo      = $filaSer['titulo'];
                    $xDescripcion = $filaSer['descripcion'];
                    $xOrden       = $filaSer['orden'];
                    $xEstado      = $filaSer['estado'];
                    $num++;
                    $line++;
            ?>
            <div class="col-lg-4 col-md-6 <?php if($num!=1){ ?> bord <?php $num = 0; } ?>">
                <div class="item wow fadeInUp">
                    <span class="icon"><i class="fas <?php echo $xIcon; ?>"></i></span>
                    <h6><?php echo $xTitulo; ?></h6>
                    <p><?php echo $xDescripcion; ?></p>
                </div>
            </div>
            <?php if($line==3){ ?><div class="custom-bord"></div><?php } ?>
            <?php
                }
                mysqli_free_result($resultadoServicio); 
            ?>
            <div class="clearfix"></div>
        </div>
    </div>
</section>
<!-- End services =========================================== -->