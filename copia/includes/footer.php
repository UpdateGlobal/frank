<!-- ========================================= Start Footer -->
<footer class="section-padding">
    <div class="container text-center">
        <?php
            $consultarMet = "SELECT * FROM metatags";
            $resultadoMet = mysqli_query($enlaces,$consultarMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
            $filaMet = mysqli_fetch_array($resultadoMet);
                $xLogo      = $filaMet['logo'];
                $xTitulo    = $filaMet['titulo'];
                $xSlogan    = $filaMet['slogan'];
        ?>
        <a class="logo" href="index.php"><img src="cms/assets/img/meta/<?php echo $xLogo; ?>" alt="<?php echo "".$xTitulo." | ".$xSlogan.""; ?>"></a>
        <?php mysqli_free_result($resultadoMet); ?>
        <div class="social-icon">
            <?php
                $consultarSol = "SELECT * FROM social WHERE estado='1' ORDER BY orden";
                $resultadoSol = mysqli_query($enlaces,$consultarSol) or die('Consulta fallida: ' . mysqli_error($enlaces));
                while($filaSol = mysqli_fetch_array($resultadoSol)){
                    $xType      = $filaSol['type'];
                    $xLinks     = $filaSol['links'];
            ?>
            <a href="<?php echo $xLinks; ?>"><i class="fab <?php echo $xType; ?>"></i></a>
            <?php
                }
                mysqli_free_result($resultadoSol);
            ?>
        </div>
        <p>Frank McBride 2018 &copy;</p>
    </div>
</footer>
<!-- End Footer =========================================== -->