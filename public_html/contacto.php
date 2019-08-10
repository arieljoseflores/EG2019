<?php
session_start();
?>

<!DOCTYPE HTML>
<HTML lang="en">
<head>

<?php include ('inc/cabecera.php'); ?>

</head>   

<body>

<?php include ('inc/menu.php'); ?>

<?php
$enviado=false;
if (isset($_POST["nombre"])) {
	$cuerpo="Nombre: ".$_POST["nombre"]."\r\n";
	$cuerpo.="Correo: ".$_POST["correo"]."\r\n";
	$cuerpo.="Asunto: ".$_POST["asunto"]."\r\n";
	$cuerpo.="Mensaje: ".$_POST["mensaje"]."\r\n";
	$enviado=mail("arielflores@hotmail.com","Contacto desde sitio Web",$cuerpo);
}
?>

<form class="form-signin" name=pantalla action="contacto.php" method="post">

	<h2 class="mb-3 bd-text-purple-bright">Formulario de Contacto</h2>

	<div class="form-group">
	<label for="inputNombre" class="sr-only">Nombre</label>
	<input type="text" id="inputNombre" class="form-control" name="nombre" placeholder="Nombre" required>
	</div>

	<div class="form-group">
	<label for="inputCorreo" class="sr-only">Correo electr&oacute;nico</label>
	<input type="email" id="inputCorreo" class="form-control" name="correo" placeholder="Correo electr&oacute;nico" required>
	</div>

	<div class="form-group">
	<label for="inputAsunto" class="sr-only">Asunto</label>
	<input type="text" id="inputAsunto" class="form-control" name="asunto" placeholder="Asunto">
	</div>

	<div class="form-group">
	<label for="inputMensaje" class="sr-only">Mensaje</label>
	<textarea id="inputMensaje" class="form-control" name="mensaje" placeholder="Mensaje" rows="4"></textarea>
	</div>

	<button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>

<?php
	if ($enviado) {
?>
	<br/><h6>Mensaje enviado correctamente</h6>
<?php
	}
?>

</form>

<?php include ('inc/footer.php'); ?>

</body>
</html>