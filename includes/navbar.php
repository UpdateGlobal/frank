<!-- ========================================= Navbar -->
<nav class="navbar navbar-expand-lg">
	<div class="container">
		<?php
	    	$consultarMet = 'SELECT * FROM metatags';
	        $resultadoMet = mysqli_query($enlaces,$consultarMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
	        $filaMet = mysqli_fetch_array($resultadoMet);
	        	$xLogo      = $filaMet['logo'];
    	?>
		<a class="logo" href="/index.php">
			<img src="/cms/assets/img/meta/<?php echo $xLogo; ?>" alt="logo">
		</a>
 		<?php mysqli_free_result($resultadoMet); ?>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icon-bar"><i class="fas fa-bars"></i></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
			    	<a class="nav-link active" href="#" data-scroll-nav="0">Inicio</a>
			  	</li>
			    <li class="nav-item">
			        <a class="nav-link" href="#" data-scroll-nav="1">Quienes Somos</a>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="#" data-scroll-nav="3">Qué Hacemos</a>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="#" data-scroll-nav="4">Galería</a>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="#" data-scroll-nav="6">Blog</a>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="#" data-scroll-nav="7">Nuestro Equipo</a>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="#" data-scroll-nav="8">Contacto</a>
			    </li>
			</ul>
		</div>
	</div>
</nav>
<!-- End Navbar =========================================== -->