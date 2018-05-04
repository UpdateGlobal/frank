<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$cod_contenido  = $_REQUEST['cod_contenido'];
if (isset($_REQUEST['proceso'])) {
  $proceso  = $_POST['proceso'];
} else {
  $proceso  = "";
}
if($proceso==""){
  $consultaCon = "SELECT * FROM contenidos WHERE cod_contenido='$cod_contenido'";
  $ejecutarCon = mysqli_query($enlaces,$consultaCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
  $filaCon = mysqli_fetch_array($ejecutarCon);
  $cod_contenido    = $filaCon['cod_contenido'];
  $contenido        = $filaCon['contenido'];
  $estado           = $filaCon['estado'];
}

if($proceso == "Actualizar"){
  $cod_contenido    = $_POST['cod_contenido'];
  $contenido        = mysqli_real_escape_string($enlaces, $_POST['contenido']);
  $estado           = $_POST['estado'];

  $ActualizarCon = "UPDATE contenidos SET cod_contenido='$cod_contenido', contenido='$contenido', estado='$estado' WHERE cod_contenido='$cod_contenido'";
  $resultadoActualizar = mysqli_query($enlaces,$ActualizarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
  header("Location:servicios.php");
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <?php include("module/head.php"); ?>
    <script type="text/javascript" src="assets/js/rutinas.js"></script>
    <script>
    function Validar(){
      document.fcms.action = "servicio-texto-edit.php";
      document.fcms.proceso.value="Actualizar";
      document.fcms.submit();
    }
    </script>
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
    <?php $menu="servicios"; include("module/menu.php"); ?>
    <?php include("module/header.php"); ?>
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Que hacemos</strong>
            <small></small>
          </h1>
        </div>
      </header><!--/.header -->
      <div class="main-content">
        <div class="card">
          <h4 class="card-title"><strong>Editar Que hacemos (Descripci&oacute;n)</strong></h4>
          <form class="fcms" name="fcms" method="post" action="" data-provide="validation" data-disable="false">
            <div class="card-body">

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="descripcion">Descripci&oacute;n:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <?php if($xVisitante=="1"){ ?><p><?php echo $contenido; ?></p><?php } ?>
                  <textarea name="contenido" class="form-control" <?php if($xVisitante=="1"){ ?> style="display:none;" <?php }else{ ?> <?php } ?> ><?php echo $contenido; ?></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="description">Estado:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <?php if($xVisitante=="1"){ ?><p><?php if($estado=="1"){ echo "[Activo]";}else{ echo "[Inactivo]"; } ?></p><?php }else{ ?>
                  <input type="checkbox" name="estado" data-size="small" data-provide="switchery" value="1" <?php if($estado=="1"){echo "checked";} ?>>
                  <?php } ?>
                </div>
              </div>

            </div>
            <footer class="card-footer">
              <a href="servicios.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i> Guardar Cambios</button>
              <input type="hidden" name="proceso">
              <input type="hidden" name="cod_contenido" value="<?php echo $cod_contenido; ?>">
            </footer>
          </form>
        </div>
      </div><!--/.main-content -->
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>