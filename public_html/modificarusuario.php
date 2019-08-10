<?php
session_start();
include ('inc/abreconexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>

<?php include ('inc/cabecera.php'); ?>

</head>   

<body>

<?php include 'inc/menuadministrador.php'; ?>

<?php
$id=$_GET['id'];
$sql="SELECT * FROM usuarios WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$datos=mysqli_fetch_assoc($result);
$nombre=$datos['nombre'];
$categoria=$datos['categoria'];
$correo=$datos['correo'];
$contrasenia=$datos['contrasenia'];
?>

<form class="form-input" action="modificarusuario2.php" method="post">

	<h2 class="mb-3 bd-text-purple-bright">Modificar Usuario</h2>

	<div class="text-white">
	<a class="btn btn-success" href="abmusuarios.php" role="button">Consulta</a>
	<a class="btn btn-success" href="altausuario.php" role="button">Alta</a>
	</div>

	<br/>

	<div class="form-group">
	<label for="id">Id</label>
	<input type="text" id="id" name="id" class="form-control form-control-sm" value="<?=$id?>" readonly>
	</div>

	<div class="form-group">
	<label for="nombre">Nombre (*)</label>
	<input type="text" id="nombre" name="nombre" class="form-control form-control-sm" value="<?=$nombre?>" required>
	</div>

	<div class="form-group">
	<label for="categoria">Categoria (*)</label>
	<select id="categoria" name="categoria" class="form-control">
		<option value="1"<?=$categoria==1?" selected":""?>>Profesional</option>
		<option value="2"<?=$categoria==2?" selected":""?>>Administrador</option>
	</select>
	</div>

	<div class="form-group">
	<label for="correo">Correo (*)</label>
	<input type="text" id="correo" name="correo" class="form-control form-control-sm" value="<?=$correo?>" required>
	</div>

	<div class="form-group">
	<label for="contrasenia">Contrase&ntilde;a (*)</label>
	<input type="text" id="contrasenia" name="contrasenia" class="form-control form-control-sm" value="<?=$contrasenia?>" required>
	</div>

	<input type="submit" class="btn btn-primary" value="Modificar">
</form>

<?php include ('inc/footer.php'); ?>

</body>
</html>

<?php
mysqli_close($conn);
?>
