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
			        <a class="nav-link" href="/index.php">Inicio</a>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="/index.php#quienes-somos">Quienes Somos</a>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="/index.php#que-hacemos">Qué Hacemos</a>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="/index.php#galeria">Galería</a>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link active" href="/blog.php">Blog</a>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="/index.php#nuestro-equipo">Nuestro Equipo</a>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="/index.php#contacto">Contacto</a>
			    </li>
			</ul>
		</div>
	</div>
</nav>
<!-- End Navbar =========================================== -->