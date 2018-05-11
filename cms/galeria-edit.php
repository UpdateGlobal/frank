<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$cod_galeria = $_REQUEST['cod_galeria'];
if (isset($_REQUEST['proceso'])) {
  $proceso  = $_POST['proceso'];
} else {
  $proceso  = "";
}
if($proceso == ""){
  $consultaGal = "SELECT * FROM galerias WHERE cod_galeria='$cod_galeria'";
  $resultadoGal = mysqli_query($enlaces,$consultaGal);
  $filaGal = mysqli_fetch_array($resultadoGal);
  $cod_galeria    = $filaGal['cod_galeria'];
  $cod_categoria  = $filaGal['cod_categoria'];
  $titulo         = htmlspecialchars(utf8_encode($filaGal['titulo']));
  $descripcion    = htmlspecialchars(utf8_encode($filaGal['descripcion']));
  $imagen         = $filaGal['imagen'];
  $video          = $filaGal['video'];
  $orden          = $filaGal['orden'];
  $estado         = $filaGal['estado'];
}
if($proceso == "Actualizar"){
  $cod_galeria    = $_POST['cod_galeria'];
  $cod_categoria  = $_POST['cod_categoria'];
  $titulo         = mysqli_real_escape_string($enlaces, utf8_decode($_POST['titulo']));
  $descripcion    = mysqli_real_escape_string($enlaces, utf8_decode($_POST['descripcion']));
  $imagen         = $_POST['imagen'];
  $video          = $_POST['video'];
  $orden          = $_POST['orden'];
  $estado         = $_POST['estado'];
  
  //Validar si el registro existe
  $actualizarGalerias = "UPDATE galerias SET
    cod_galeria='$cod_galeria', 
    cod_categoria='$cod_categoria', 
    titulo='$titulo', 
    descripcion='$descripcion', 
    imagen='$imagen', 
    video='$video', 
    orden='$orden', 
    estado='$estado' 
    WHERE cod_galeria='$cod_galeria'";
  
  $resultadoActualizar = mysqli_query($enlaces,$actualizarGalerias);
  header("Location:galeria.php");
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("module/head.php"); ?>
    <script type="text/javascript" src="assets/js/rutinas.js"></script>
    <script>
      function Validar(){
        if(document.fcms.imagen.value==""){
          alert("Debe subir una imagen principal para el album");
          document.fcms.imagen.focus();
          return; 
        }
      
        document.fcms.action = "galeria-edit.php";
        document.fcms.proceso.value="Actualizar";
        document.fcms.submit();
      }
      function Imagen(codigo){
        url = "agregar-foto.php?id=" + codigo;
        AbrirCentro(url,'Agregar', 475, 180, 'no', 'no');
      }
      function soloNumeros(e){
        var key = window.Event ? e.which : e.keyCode
        return ((key >= 48 && key <= 57) || (key==8))
      }
    </script>
    <link href="assets/jackbox/css/jackbox.css" rel="stylesheet" type="text/css" />
    <link href="assets/jackbox/css/jackbox_hovers.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <!-- Preloader -->
    <div class="preloader">
      <div class="spinner-dots">
        <span class="dot1"></span>
        <span class="dot2"></span>
        <span class="dot3"></span>
      </div>
    </div>
    <?php $menu="galeria"; include("module/menu.php"); ?>
    <?php include("module/header.php"); ?>
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Galería</strong>
            <small></small>
          </h1>
        </div>
        <?php $page="galeria"; include("module/menu-galeria.php"); ?>
      </header><!--/.header -->
      <div class="main-content">
        <div class="card">
          <h4 class="card-title"><strong>Registrar Album</strong></h4>
          <form class="fcms" name="fcms" method="post" action="" data-provide="validation" data-disable="false">
            <div class="card-body">
              <?php if(isset($mensaje)){ echo $mensaje; } else {}; ?>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="categoria">Categor&iacute;as:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <select class="form-control" id="categoria" name="cod_categoria">
                    <?php
                      $consultaCat = "SELECT * FROM galerias_categorias WHERE cod_categoria='$cod_categoria'";
                      $resultadoCat = mysqli_query($enlaces, $consultaCat);
                      while($filaCat = mysqli_fetch_array($resultadoCat)){
                        $xCodcate = $filaCat['cod_categoria'];
                        $xCategoria = $filaCat['categoria'];
                      ?>
                      <option value="<?php echo $xCodcate; ?>"><?php echo $xCategoria; ?> (Actual)</option>
                      <?php } ?>
                      <?php
                        $consultaCat = "SELECT * FROM galerias_categorias WHERE cod_categoria!='$cod_categoria'";
                        $resultadoCat = mysqli_query($enlaces, $consultaCat);
                        while($filaCat = mysqli_fetch_array($resultadoCat)){
                          $xCodcate = $filaCat['cod_categoria'];
                          $xCategoria = $filaCat['categoria'];
                      ?>
                      <option value="<?php echo $xCodcate; ?>"><?php echo $xCategoria; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="titulo">T&iacute;tulo:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="titulo" type="text" id="titulo" value="<?php echo $titulo; ?>" />
                  <div class="invalid-feedback"></div>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="descripcion">Descripci&oacute;n:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="descripcion" type="text" id="descripcion" value="<?php echo $descripcion; ?>" required>
                  <div class="invalid-feedback"></div>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label require" for="imagen">Imagen Principal:</label><br>
                  <small>(640px x 500px)</small>
                </div>
                <div class="col-4 col-lg-8">
                  <?php if($xVisitante=="1"){ ?><p><?php echo $imagen; ?></p><?php } ?>
                  <input class="form-control" name="imagen" type="<?php if($xVisitante=="1"){ ?>hidden<?php }else{?>text<?php } ?>" id="imagen" value="<?php echo $imagen; ?>" required />
                  <div class="invalid-feedback"></div>
                </div>
                <div class="col-4 col-lg-2">
                  <?php if($xVisitante=="0"){ ?>
                  <button class="btn btn-info" type="button" name="boton2" onClick="javascript:Imagen('GAL');" /><i class="fa fa-save"></i> Examinar</button>
                  <?php } ?>
                </div>
              </div>

              <?php if($video!=""){ ?>
              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label">Vista previa del v&iacute;deo:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <a class="jackbox btn btn-outline btn-secondary" data-group="video" href="<?php echo $video; ?>" style="padding-top:10px; padding-bottom:10px;">
                    <i class="fa fa-play-circle" aria-hidden="true"></i> Reproducir
                  </a>
                </div>
              </div>
              <?php }else{ ?>
              <?php } ?>
              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="video">V&iacute;deo:</label><br>
                  <small>(Pegue en enlace del navegador)</small>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="video" type="text" id="video" value="<?php echo $video; ?>" />
                  <small>(El v&iacute;deo anula la vista previa de la imagen)</small>
                  <div class="invalid-feedback"></div>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="orden">Orden:</label>
                </div>
                <div class="col-2 col-lg-1">
                  <input class="form-control" name="orden" type="text" onKeyPress="return soloNumeros(event)" value="<?php echo $orden; ?>" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="estado">Estado:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input type="checkbox" name="estado" data-size="small" data-provide="switchery" value="1" <?php if($estado="1"){echo "checked";} ?>>
                </div>
              </div>
            </div>

            <footer class="card-footer">
              <a href="galeria.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i> Actualizar Galer&iacute;a</button>
              <input type="hidden" name="proceso">
              <input type="hidden" name="cod_galeria" value="<?php echo $cod_galeria; ?>">
            </footer>

          </form>
        </div>
      </div><!--/.main-content -->
      <?php include("module/footer_int.php"); ?>
      <script type="text/javascript" src="assets/jackbox/js/libs/jquery.address-1.5.min.js"></script>
      <script type="text/javascript" src="assets/jackbox/js/libs/Jacked.js"></script>
      <script type="text/javascript" src="assets/jackbox/js/jackbox-swipe.js"></script>
      <script type="text/javascript" src="assets/jackbox/js/jackbox.js"></script>
      <script type="text/javascript" src="assets/jackbox/js/libs/StackBlur.js"></script>
      <script type="text/javascript">
        jQuery(document).ready(function() {
  //        jQuery(".jackbox[data-group]").jackBox("init");
          jQuery(".jackbox[data-group]").jackBox("init", {
            deepLinking: false,
            showInfoByDefault: false,       // show item info automatically when content loads, true/false
            preloadGraphics: true,          // preload the jackbox graphics for a faster jackbox
            fullscreenScalesContent: false,  // choose to always scale content up in fullscreen mode, true/false
   
            autoPlayVideo: false,           // video autoplay default, this can also be set per video in the data-attributes, true/false
            flashVideoFirst: false,         // choose which technology has first priority for video, HTML5 or Flash, true/false
       
            useThumbs: false,                // choose to use thumbnails, true/false
            thumbsStartHidden: false,       // choose to initially hide the thumbnail strip, true/false
            useThumbTooltips: false
          });
        });
      </script>
    </main>
    <!-- END Main container -->
  </body>
</html>