<?php include ("module/conexion.php"); ?>
<?php include ("module/verificar.php"); ?>
<?php 
$cod_equipo = $_REQUEST['cod_equipo'];
$eliminar = "DELETE FROM equipo WHERE cod_equipo='$cod_equipo'";
$resultado = mysqli_query($enlaces,$eliminar);
header("Location:equipos.php");
?>