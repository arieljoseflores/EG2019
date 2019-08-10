<? php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

<?php include ('inc/cabecera.php'); ?>

</head>

<body>

<?php include ('inc/menu.php'); ?>

<form class="form-signin" name=pantalla action="login2.php" method="post">

	<h2 class="form-signin-heading">Acceso al sistema</h2>

	<label for="inputEmail" class="sr-only">Correo electr&oacute;nico</label>
	<input type="email" id="inputEmail" class="form-control" name="correo" placeholder="Correo electr&oacute;nico" required>

	<label for="inputPassword" class="sr-only">Contrase&ntilde;a</label>
	<input type="password" id="inputPassword" class="form-control" name="contrasenia" placeholder="Contrase&ntilde;a" required>

	<button class="btn btn-lg btn-primary btn-block" type="submit">Ingreso</button>

<?php
	if (isset($_GET['error']) && ($_GET['error']=='1')) {
?>
	<br/><h6>Correo electr&oacute;nico o Contrase&ntilde;a incorrectos</h6>
<?php
	}
	if (isset($_GET['error']) && ($_GET['error']=='2')) {
?>
	<br/><h6>Debe autenticarse en el sistema</h6>
<?php
	}
?>
</form>

<br/>
<br/>
<br/>
<br/>
<br/>
<?php include ('inc/footer.php'); ?>

</body>
</html>
