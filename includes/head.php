<head>
	<?php
    	$consultarMet = 'SELECT * FROM metatags';
        $resultadoMet = mysqli_query($enlaces,$consultarMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
        $filaMet = mysqli_fetch_array($resultadoMet);
        	$xCodigo    = $filaMet['cod_meta'];
            $xLogo      = $filaMet['logo'];
            $xTitulo    = $filaMet['titulo'];
            $xSlogan    = $filaMet['slogan'];
            $xDes       = $filaMet['description'];
            $xKey       = $filaMet['keywords'];
            $xIco       = $filaMet['ico'];
    ?>
	<!-- Metas -->
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- Title  -->
	<title><?php echo $xTitulo; ?> | <?php $xSlogan ?></title>
	<meta name="description" content="<?php echo $xDes; ?>" />
	<meta name="keywords" content="<?php echo $xKey; ?>" />

	<meta name="DC.title" content="<?php echo $xTitulo." | ".$xSlogan; ?>" />
    <meta name="DC.description" lang="es" content="<?php echo $xDes; ?>" />
    <meta name="geo.region" content="PE-LIM" />
    <meta name="robots" content="INDEX,FOLLOW" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="cms/assets/img/meta/<?php echo $xIco; ?>" />
    
    <?php mysqli_free_result($resultadoMet); ?>
	
    <!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,600,700,800" rel="stylesheet">

	<!-- Plugins -->
	<link rel="stylesheet" href="css/plugins.css" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/custom.css" />
</head>