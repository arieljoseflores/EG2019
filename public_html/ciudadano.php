<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

<?php include ('inc/cabecera.php'); ?>

</head>   

<body>

<?php include 'inc/menu.php'; ?>

<form class="form-signin" action="ciudadano2.php" method="post">

	<h2 class="mb-3 bd-text-purple-bright">Consulta de inmueble</h2>

	<div class="form-group">
	<label for="partida">Partida inmobiliaria</label>
	<input type="text" id="partida" class="form-control" name="partida" required>
	</div>

	<button class="btn btn-lg btn-primary btn-block" type="submit">Consultar</button>

</form>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<?php include ('inc/footer.php'); ?>

</body>

</html>
