<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

<?php include ('inc/cabecera.php'); ?>

</head>   

<body>

<?php include 'inc/menuadministrador.php'; ?>


<form class="form-input" action="altausuario2.php" method="post">

	<h2 class="mb-3 bd-text-purple-bright">Alta de Usuario</h2>

	<div class="text-white">
	<a class="btn btn-success" href="abmusuarios.php" role="button">Consulta</a>
	<a class="btn btn-success" href="altausuario.php" role="button">Alta</a>
	</div>

	<br/>

	<div class="form-group">
	<label for="id">Id</label>
	<input type="text" id="id" name="id" class="form-control form-control-sm" readonly>
	</div>

	<div class="form-group">
	<label for="nombre">Nombre (*)</label>
	<input type="text" id="nombre" name="nombre" class="form-control form-control-sm" required>
	</div>

	<div class="form-group">
	<label for="categoria">Categoria (*)</label>
	<select id="categoria" name="categoria" class="form-control">
		<option value="1">Profesional</option>
		<option value="2">Administrador</option>
	</select>
	</div>

	<div class="form-group">
	<label for="correo">Correo (*)</label>
	<input type="text" id="correo" name="correo" class="form-control form-control-sm" required>
	</div>

	<div class="form-group">
	<label for="contrasenia">Contrase&ntilde;a (*)</label>
	<input type="text" id="contrasenia" name="contrasenia" class="form-control form-control-sm" required>
	</div>

	<input type="submit" class="btn btn-primary" value="Grabar">

</form>

<?php include ('inc/footer.php'); ?>

</body>
</html>
