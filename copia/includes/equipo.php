<a name="nuestro-equipo"></a>
<!-- ========================================= Start Team -->
<section class="team section-padding bg-gray1" data-scroll-index="7">
    <div class="container">
        <div class="row">
            <?php
                $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='5' AND estado='1'";
                $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
                while($filaCon = mysqli_fetch_array($resultadoCon)){
                    $xContenido   = $filaCon['contenido'];
            ?>
            <div class="offset-md-2 col-md-8">
                <div class="section-head">
                    <h4>Conoce <span>Nuestro Equipo</span></h4>
                    <p><?php echo $xContenido; ?></p>
                </div>
            </div>
            <div class="clear-fix"></div>
            <?php 
                }
                mysqli_free_result($resultadoCon);
            ?>
            <div class="owl-carousel owl-theme full-width text-center">
                <?php
                    $consultarservicio = "SELECT * FROM equipo WHERE estado='1' ORDER BY orden";
                    $resultadoservicio = mysqli_query($enlaces,$consultarservicio) or die('Consulta fallida: ' . mysqli_error($enlaces));
                    while($filaSer = mysqli_fetch_array($resultadoservicio)){
                        $xImagen      = $filaSer['imagen'];
                        $xNombre      = $filaSer['nombre'];
                        $xCargo       = $filaSer['cargo'];
                ?>
                <div class="titem wow fadeInUp">
                    <div class="author-img">
                        <img src="cms/assets/img/equipo/<?php echo $xImagen; ?>" alt="">
                    </div>
                    <div class="info">
                        <h6><?php echo $xNombre; ?></h6>
                        <span><?php echo $xCargo; ?></span>
                    </div>
                </div>
                <?php
                    }
                    mysqli_free_result($resultadoservicio);
                ?>      
            </div>
        </div>
    </div>
</section>
<!-- End Team =========================================== -->