<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$mensaje = "";
if (isset($_REQUEST['proceso'])) {
  $proceso  = $_POST['proceso'];
} else {
  $proceso  = "";
}
if($proceso == "Registrar"){
  $titulo       = mysqli_real_escape_string($enlaces, $_POST['titulo']);
  $icon         = $_POST['icon'];
  $descripcion  = mysqli_real_escape_string($enlaces, $_POST['descripcion']);
  if(isset($_POST['orden'])){$orden = $_POST['orden'];}else{$orden = 0;}
  if(isset($_POST['estado'])){$estado = $_POST['estado'];}else{$estado = 0;}
    
  $insertarServicio = "INSERT INTO servicios(titulo, icon, descripcion, orden, estado)VALUE('$titulo', '$icon', '$descripcion', '$orden', '$estado')";
  $resultadoInsertar = mysqli_query($enlaces,$insertarServicio);
  $mensaje = "<div class='alert alert-success' role='alert'>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
          <strong>Nota:</strong> El servicio se registr&oacute; con exitosamente. <a href='servicios.php'>Ir a servicios</a>
        </div>";
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <?php include("module/head.php"); ?>
    <script type="text/javascript" src="assets/js/rutinas.js"></script>
    <script>
    function Validar(){
      if(document.fcms.titulo.value==""){
        alert("Debe escribir un título");
        document.fcms.titulo.focus();
        return;
      }
      document.fcms.action = "servicio-nuevo.php";
      document.fcms.proceso.value="Registrar";
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
          <h4 class="card-title"><strong>Servicio Nuevo</strong></h4>
          <form class="fcms" name="fcms" method="post" action="" data-provide="validation" data-disable="false">
            <div class="card-body">
              <?php if(isset($mensaje)){ echo $mensaje; } else {}; ?>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="icon">&Iacute;cono:</label>
                </div>
                <div class="col-8 col-lg-4">
                  <style>
                    .select-font{
                      font-family: 'FontAwesome', 'Helvetica';
                    }
                  </style>
                  <select class="form-control select-font" name="icon" id="icon">
                    <option value="fa-chart-pie">&#xf200 Chart pie</option>
                    <option value="fa-edit">&#xf044 Editar</option>
                    <option value="fa-comments">&#xf086 Comentarios</option>
                    <option value="fa-images">&#xf302 Im&aacute;genes</option>
                    <option value="fa-tablet-alt">&#xf3fa Tableta</option>
                    <option value="fa-heart">&#xf004 Corazón</option>
                    <option value="fa-cogs">&#xf085 Engrane</option>
                    <option value="fa-bug">&#xf188 Bicho</option>
                    <option value="fa-address-book">&#xf2b9 Libreta</option>
                    <option value="fa-gavel">&#xf0e3 Martillo</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label required" for="titulo">T&iacute;tulo:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="titulo" type="text" id="titulo" required/>
                  <div class="invalid-feedback"></div>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="descripcion">Texto:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <textarea id="descripcion" name="descripcion" class="form-control"></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="orden">Orden:</label>
                </div>
                <div class="col-2 col-lg-1">
                  <input class="form-control" name="orden" type="text" id="orden" onKeyPress="return soloNumeros(event)" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="estado">Estado:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input type="checkbox" name="estado" data-size="small" data-provide="switchery" value="1" checked>
                </div>
              </div>

            </div>

            <footer class="card-footer">
              <a href="servicios.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-chevron-circle-right"></i> Registrar Servicio</button>
              <input type="hidden" name="proceso">
            </footer>

          </form>
        </div>
      </div><!--/.main-content -->
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>