<a name="quienes-somos"></a>
<!-- ========================================= Start hero -->
<section class="hero" data-scroll-index="1">
    <div class="intro bg-gray1 text-center">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8 content wow fadeInUp">
                    <a class="logo-img" href="slider-text.html#">
                        <img src="/img/brand.png" alt="logo">
                    </a>
                    <div class="section-head">
                        <h4>Quienes <span> Somos</span></h4>
                        <?php
                            $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='1'";
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
            </div>
        </div>
    </div>
</section>
<!-- End hero =========================================== -->