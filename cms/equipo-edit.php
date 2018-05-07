<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$cod_equipo   = $_REQUEST['cod_equipo'];
if (isset($_REQUEST['proceso'])) {
  $proceso  = $_POST['proceso'];
} else {
  $proceso  = "";
}
if($proceso == ""){
  $consultaEquipo = "SELECT * FROM equipo WHERE cod_equipo='$cod_equipo'";
  $ejecutarEquipo = mysqli_query($enlaces,$consultaEquipo) or die('Consulta fallida: ' . mysqli_error($enlaces));
  $filaEqu = mysqli_fetch_array($ejecutarEquipo);
  $cod_equipo   = $filaEqu['cod_equipo'];
  $nombre       = $filaEqu['nombre'];
  $cargo        = $filaEqu['cargo'];
  $imagen       = $filaEqu['imagen'];
  $orden        = $filaEqu['orden'];
  $estado       = $filaEqu['estado'];
}

if($proceso=="Actualizar"){
  $cod_equipo       = $_POST['cod_equipo'];
  $nombre           = mysqli_real_escape_string($enlaces, $_POST['nombre']);
  $cargo            = mysqli_real_escape_string($enlaces, $_POST['cargo']);
  $imagen           = $_POST['imagen'];
  if(isset($_POST['orden'])){$orden = $_POST['orden'];}else{$orden = 0;}
  if(isset($_POST['estado'])){$estado = $_POST['estado'];}else{$estado = 0;}
  $actualizarEquipo  = "UPDATE equipo SET cod_equipo='$cod_equipo', nombre='$nombre', cargo='$cargo', imagen='$imagen', orden='$orden', estado='$estado' WHERE cod_equipo='$cod_equipo'";
  $resultadoActualizar = mysqli_query($enlaces,$actualizarEquipo) or die('Consulta fallida: ' . mysqli_error($enlaces));
  header("Location:equipos.php");
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
      if(document.fcms.nombre.value==""){
        alert("Debe escribir un título");
        document.fcms.nombre.focus();
        return;
      }
      document.fcms.action = "equipo-edit.php";
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
    <?php $menu="equipo"; include("module/menu.php"); ?>
    <?php include("module/header.php"); ?>
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Equipos</strong>
            <small></small>
          </h1>
        </div>
      </header><!--/.header -->
      <div class="main-content">
        <div class="card">
          <h4 class="card-title"><strong>Editar Miembro</strong></h4>
          <form class="fcms" name="fcms" method="post" action="" data-provide="validation" data-disable="false">
            <div class="card-body">

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label required" for="nombre">Nombre:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="nombre" type="text" id="nombre" value="<?php echo $nombre; ?>" required />
                  <div class="invalid-feedback"></div>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="cargo">Cargo:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="cargo" type="text" id="cargo" value="<?php echo $cargo; ?>" />
                  <div class="invalid-feedback"></div>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="imagen">Foto:</label><br>
                  <small>(800px x 876px)</small>
                </div>
                <div class="col-4 col-lg-8">
                  <input class="form-control" id="imagen" name="imagen" type="text" value="<?php echo $imagen; ?>" />
                </div>
                <div class="col-4 col-lg-2">
                  <button class="btn btn-info" type="button" name="boton2" onClick="javascript:Imagen('EQP');" /><i class="fa fa-save"></i> Examinar</button>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="orden">Orden:</label>
                </div>
                <div class="col-2 col-lg-1">
                  <input class="form-control" name="orden" type="text" id="orden" value="<?php echo $orden; ?>" onKeyPress="return soloNumeros(event)" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="estado">Estado:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input type="checkbox" name="estado" data-size="small" data-provide="switchery" value="1" <?php if($estado=="1"){echo "checked";} ?> />
                </div>
              </div>

            </div>

            <footer class="card-footer">
              <a href="equipos.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i> Guardar Cambios</button>
              <input type="hidden" name="proceso">
              <input type="hidden" name="cod_equipo" value="<?php echo $cod_equipo; ?>">
            </footer>

          </form>
        </div>
      </div><!--/.main-content -->
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>