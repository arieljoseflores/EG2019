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
$idProp=$_GET['idProp'];
$matricula=$_GET['matricula'];
?>

<div class="container">

<h2 class="mb-3 bd-text-purple-bright">Titulares - Matricula: <?=$matricula?></h2>

<div class="text-white">
<a class="btn btn-success" href="abmtitulares.php?idProp=<?=$idProp?>&matricula=<?=$matricula?>" role="button">Consulta</a>
<a class="btn btn-success" href="altatitular.php?idProp=<?=$idProp?>&matricula=<?=$matricula?>" role="button">Alta</a>
</div>

<table class="table table-bordered table-striped table-hover">
<thead class="table-primary">
<tr>
	<th>Nro</th>
	<th>Nombre / Raz&oacute;n Social</th>
	<th>Documento</th>
	<th>CUIT</th>
	<th>Domicilio</th>
	<th>Porcentaje</th>
	<th>Acciones</th>
</tr>	

</thead>
<tbody>

<?php
$sql = "SELECT * FROM titulares AS tit LEFT JOIN titfisicos AS tf ON tf.idtitular = tit.id LEFT JOIN titjuridicos AS tj ON tj.idtitular = tit.id WHERE tit.idpropiedad='$idProp' ORDER BY tit.id";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
if (mysqli_num_rows($result)==0) {
?>

<tr>
	<td colspan=7>No hay registros</td>
</tr>	

<?php
} else {
	$nro=0;
	while ($datos=mysqli_fetch_assoc($result)) {
		++$nro;
		$id=$datos['id'];
		$persona=$datos['persona'];
		$apellido=$datos['apellido'];
		$nombres=$datos['nombres'];
		$idtipodocumento=$datos['idtipodocumento'];
		$nrodocumento=$datos['nrodocumento'];
		$razonsocial=$datos['razonsocial'];
		$calle=$datos['calle'];
		$nrocalle=$datos['nrocalle'];
		$idlocalidad=$datos['idlocalidad'];

		if ($datos['persona']=='F') {
			$nombrecompleto=$apellido.", ".$nombres;
			$sql="SELECT nomdocumento FROM tipodocumentos WHERE id='$idtipodocumento'";
			$result_doc=mysqli_query($conn,$sql) or die(mysqli_error($conn));
			$datos_doc=mysqli_fetch_array($result_doc);
			$documentocompleto=$datos_doc['nomdocumento']." ".$nrodocumento;
		} else {
			$nombrecompleto=$razonsocial;
			$documentocompleto="";
		}
		$sql="SELECT nomlocalidad FROM localidades WHERE id='$idlocalidad'";
		$result_loc=mysqli_query($conn,$sql) or die(mysqli_error($conn));
		$datos_loc=mysqli_fetch_array($result_loc);
		$domiciliocompleto=$calle." ".$nrocalle." - ".$datos_loc['nomlocalidad'];
?>

<tr>
	<td><?=$nro?></td>
	<td><?=$nombrecompleto?></td>
	<td><?=$documentocompleto?></td>
	<td><?=$datos['nrocuit']?></td>
	<td><?=$domiciliocompleto?></td>
	<td><?=$datos['porcentaje']?></td>
	<td>
		<a href="modificartitular.php?idProp=<?=$idProp?>&matricula=<?=$matricula?>&id=<?=$id?>" class="btn btn-primary btn-sm">Modificar</a>
		<a href="bajatitular.php?idProp=<?=$idProp?>&matricula=<?=$matricula?>&id=<?=$id?>" class="btn btn-danger btn-sm">Baja</a>
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
