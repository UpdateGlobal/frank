<?php include("cms/module/conexion.php"); ?>
<?php 
/*--- Enviar datos al email ----*/
$consultarCot = 'SELECT * FROM contacto';
$resultadoCot = mysqli_query($enlaces,$consultarCot) or die('Consulta fallida: ' . mysqli_error($enlaces));
$filaCot = mysqli_fetch_array($resultadoCot);
	$xDesemail = $filaCot['form_mail'];

$consultarMet = 'SELECT * FROM metatags';
$resultadoMet = mysqli_query($enlaces,$consultarMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
$filaMet = mysqli_fetch_array($resultadoMet);
	$xUrl     = $filaMet['url'];

$toEmail = $xDesemail;
$subject = "Consulta enviada desde ".$xUrl;
$mailHeaders = 'From: '.$_POST["email"]."\r\n".
'Reply-To: '.$_POST["email"]."\r\n" .
'X-Mailer: PHP/' . phpversion();

/* ---- o ---- */

$xNombre		= $_POST["nombre"];
$xTelefono 		= $_POST["phone"];
$xEmail 		= $_POST["email"];
$xMensaje 		= $_POST["mensaje"];
$xFecha 		= $_POST["fecha"];

$mensaje = "Informacion de Contacto\n";
$mensaje .= "------------------------\n";
$mensaje .= "Nombres: ".$_POST["nombre"]."\n";
$mensaje .= "Telefono: ".$_POST["phone"]."\n";
$mensaje .= "Email: ".$_POST["email"]."\n";
$mensaje .= "Mensaje: ".$_POST["mensaje"]."\n";

/* ---- o ---- */

$contacto = "INSERT INTO formulario(nombre, phone, email, mensaje, fecha)VALUES('$xNombre', '$xTelefono', '$xEmail', '$xMensaje', '$xFecha')";
$result=mysqli_query($enlaces, $contacto) or die('Consulta fallida: ' . mysqli_error($enlaces));

if(mail($toEmail, $subject, $mensaje, $mailHeaders)) {
	print "<div class='alert alert-success' role='alert'>Mensaje Enviado Exitosamente.</div>";
} else {
	print "<div class='alert alert-danger' role='alert'>Problema al enviar el mensaje, intentelo m&aacute;s tarde.</div>";
}

?>