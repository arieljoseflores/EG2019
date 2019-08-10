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

<h2 class="mb-3 bd-text-purple-bright">ABM de Propiedades</h2>

<div class="text-white">
<a class="btn btn-success" href="abmpropiedades.php" role="button">Consulta</a>
<a class="btn btn-success" href="altapropiedad.php" role="button">Alta</a>
</div>

<table class="table table-bordered table-striped table-hover">
<thead class="table-primary">
<tr>
	<th>Matricula</th>
	<th>Partida</th>
	<th>Direccion</th>
	<th>Plano</th>
	<th>Lote</th>
	<th>Manzana</th>
	<th>Acciones</th>
</tr>

</thead>
<tbody>

<?php
$sql = "SELECT p.*,l.nomlocalidad FROM propiedades AS p LEFT JOIN localidades AS l ON l.id = p.idlocalidad ORDER BY iddepartamento,matricula,submatricula";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
if (mysqli_num_rows($result)==0) {
?>

<tr>
	<td colspan=7>No hay registros</td>
</tr>	

<?php
} else {
	while ($datos=mysqli_fetch_assoc($result)) {
		$id=$datos['id'];
		$iddepartamento=$datos['iddepartamento'];
		$matricula=$datos['matricula'];
		$submatricula=$datos['submatricula'];
		if (isset($submatricula)) {
			$descmatricula=$iddepartamento."-".$matricula."/".$submatricula;
		} else {
			$descmatricula=$iddepartamento."-".$matricula;
		}
		$pinmobiliaria=$datos['pinmobiliaria'];
		$calle=$datos['calle'];
		$nrocalle=$datos['nrocalle'];
		$nomlocalidad=$datos['nomlocalidad'];
		$direccion=$calle." ".$nrocalle." - ".$nomlocalidad;
		$nroplano=$datos['nroplano'];
		$anioplano=$datos['anioplano'];
		$descplano=$nroplano."/".$anioplano;
		$lote=$datos['lote'];
		$manzana=$datos['manzana'];
?>

<tr>
	<td><?=$descmatricula?></td>
	<td><?=$pinmobiliaria?></td>
	<td><?=$direccion?></td>
	<td><?=$descplano?></td>
	<td><?=$lote?></td>
	<td><?=$manzana?></td>
	<td>
		<a href="modificarpropiedad.php?id=<?=$id?>" class="btn btn-primary btn-sm">Modificar</a>
		<a href="bajapropiedad.php?id=<?=$id?>" class="btn btn-danger btn-sm">Baja</a>
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
