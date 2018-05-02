<!-- =====================================
    	==== Start slider -->
    	<header class="header slider bg-img" data-scroll-index="0" data-overlay-dark="7" data-background="img/bg3.jpg" data-stellar-background-ratio="0.5" id="inicio">
    		<div class="container-fluid">
    			<div class="row">
    				<div class="owl-carousel owl-theme full-width">
    					<?php
	                        $consultarBanner = "SELECT * FROM banners WHERE estado='1' ORDER BY orden";
	                        $resultadoBanner = mysqli_query($enlaces,$consultarBanner) or die('Consulta fallida: ' . mysqli_error($enlaces));
	                        while($filaBan = mysqli_fetch_array($resultadoBanner)){
	                         	$xTitulo    	= $filaBan['titulo'];
	                         	$xSubTitulo    	= $filaBan['subtitulo'];
	                         	$xDescripcion	= $filaBan['texto'];
                      	?>
    					<div class="text-center item">
	    					<div class="v-middle caption">
    							<h5><?php echo $xSubTitulo; ?></h5>
			    				<h1 class="bold"><?php echo $xTitulo; ?></h1>
			    				<div class="row justify-content-center">
			    					<div class="col-lg-7 col-md-10">
			    						<p class="slider"><?php echo $xDescripcion; ?></p>
			    					</div>
			    				</div>
	    					</div>
	    				</div>
	    				<?php
	    					}
	    					mysqli_free_result($resultadoBanner);
	    				?>
    				</div>
    			</div>
    		</div>

    		<div class="arrow">
				<a href="slider-text.html#" data-scroll-nav="1">
					<i class="fas fa-chevron-down"></i>
				</a>
			</div>
    	</header>
    	<!-- End slider ====
    	======================================= -->






<!-- =====================================
    	==== Start slider -->
    	<header class="header slider bg-img" data-scroll-index="0" data-overlay-dark="7" data-background="img/bg3.jpg" data-stellar-background-ratio="0.5" id="inicio">
    		<div class="container-fluid">
    			<div class="row">
    				<div class="owl-carousel owl-theme full-width">
    					<div class="text-center item">
	    					<div class="v-middle caption">
    							<h5>Logra <span> Resultados</span> Importantes</h5>
			    				<h1 class="bold">MARKETING POLÍTICO</h1>
			    				<div class="row justify-content-center">
			    					<div class="col-lg-7 col-md-10">
			    						<p class="slider">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed dolore minus ipsum eos consequatur perferendis, eius expedita neque.</p>
			    					</div>
			    				</div>
							   <!-- <a href="slider-text.html#0" class="buton">Ingresa</a> -->
	    					</div>
	    				</div>
	    				<div class="text-center item">
	    					<div class="v-middle caption">
    							<h5>Lorem Ipsum dolor Sit Amet</h5>
			    				<h1 class="bold">Ipsum dolor sit Amet</h1>
			    				<div class="row justify-content-center">
			    					<div class="col-lg-7 col-md-10">
			    						<p class="slider">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed dolore minus ipsum eos consequatur perferendis, eius expedita neque.</p>
			    					</div>
			    				</div>
							   <!-- <a href="slider-text.html#0" class="buton">Ingresa</a> -->
	    					</div>
	    				</div>
	    				<div class="text-center item">
	    					<div class="v-middle caption">
    							<h5>Lorem <span>Ipsum dolor </span> Sit Amet</h5>
			    				<h1 class="bold">Ipsum dolor sit Amet</h1>
			    				<div class="row justify-content-center">
			    					<div class="col-lg-7 col-md-10">
			    						<p class="slider">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed dolore minus ipsum eos consequatur perferendis, eius expedita neque.</p>
			    					</div>
			    				</div>
							   <!-- <a href="slider-text.html#0" class="buton">Ingresa</a> -->
	    					</div>
	    				</div>
	    			
    				</div>
    			</div>
    		</div>

    		<div class="arrow">
				<a href="slider-text.html#" data-scroll-nav="1">
					<i class="fas fa-chevron-down"></i>
				</a>
			</div>
    	</header>
    	<!-- End slider ====
    	======================================= -->