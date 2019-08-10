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

<div class="container">

<h2 class="mb-3 bd-text-purple-bright">ABM de Usuarios</h2>

<div class="text-white">
<a class="btn btn-success" href="abmusuarios.php" role="button">Consulta</a>
<a class="btn btn-success" href="altausuario.php" role="button">Alta</a>
</div>

<table class="table table-bordered table-striped table-hover">
<thead class="table-primary">
<tr>
	<th>Nro</th>
	<th>Nombre</th>
	<th>Categoria</th>
	<th>Correo electronico</th>
	<th>Acciones</th>
</tr>	

</thead>
<tbody>

<?php
$sql = "SELECT * FROM usuarios ORDER BY id";
$result=mysqli_query($conn,$sql) or die("Error en mysqli_query");
if (mysqli_num_rows($result)==0) {
?>

<tr>
	<td colspan=5>No hay registros</td>
</tr>	

<?php
} else {
	while ($datos=mysqli_fetch_assoc($result)) {
		$id=$datos['id'];
		$descCategoria=$datos['categoria']=='1' ? "1 - Profesional" : "2 - Administrador";
?>

<tr>
	<td><?=$id?></td>
	<td><?=$datos['nombre']?></td>
	<td><?=$descCategoria?></td>
	<td><?=$datos['correo']?></td>
	<td>
		<a href="modificarusuario.php?id=<?=$id?>" class="btn btn-primary btn-sm">Modificar</a>
		<a href="bajausuario.php?id=<?=$id?>" class="btn btn-danger btn-sm">Baja</a>
	</td>
</tr>	

<?php
	}
}
	mysqli_free_result($result);
	mysqli_close($conn);
?>

</tbody>
</table>

</div>

<br/>
<br/>
<br/>
<br/>
<br/>

<?php include ('inc/footer.php'); ?>

</body>

</html>
