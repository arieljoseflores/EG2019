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

<?php include 'inc/menuprofesional.php'; ?>

<div class="container">

<h2 class="mb-3 bd-text-purple-bright">Listado de Titulares</h2>

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

$opcion=$_POST['opcion'];

// Opcion x Nombre
$apellido=$_POST['apellido'];
$nombres=$_POST['nombres'];

// Opcion x Documento
$idtipodocumento=$_POST['idtipodocumento'];
$nrodocumento=$_POST['nrodocumento'];

// Opcion x Razon Social
$razonsocial=$_POST['razonsocial'];

// Opcion x Cuit
$nrocuit=$_POST['nrocuit'];

// Opcion x Domicilio
$calle=$_POST['calle'];
$nrocalle=$_POST['nrocalle'];
$idprovincia=$_POST['idprovincia'];
$idlocalidad=$_POST['idlocalidad'];

if ($opcion=='xnombre') {
	$sql = "SELECT * FROM titulares AS tit INNER JOIN titfisicos AS tf ON tf.idtitular = tit.id WHERE 1=1";
	if (!empty($apellido)) $sql = $sql." AND tf.apellido LIKE '%$apellido%'";
	if (!empty($nombres)) $sql = $sql." AND tf.nombres LIKE '%$nombres%'";
}
if ($opcion=='xdocumento') {
	$sql = "SELECT * FROM titulares AS tit INNER JOIN titfisicos AS tf ON tf.idtitular = tit.id WHERE 1=1";
	if (!empty($idtipodocumento)) $sql = $sql." AND tf.idtipodocumento = '$idtipodocumento'";
	if (!empty($nrodocumento)) $sql = $sql." AND tf.nrodocumento = '$nrodocumento'";
}
if ($opcion=='xrazonsocial') {
	$sql = "SELECT * FROM titulares AS tit INNER JOIN titjuridicos AS tj ON tj.idtitular = tit.id WHERE 1=1";
	if (!empty($razonsocial)) $sql = $sql." AND tj.razonsocial LIKE '%$razonsocial%'";
}
if ($opcion=='xcuit') {
	$sql = "SELECT * FROM titulares AS tit LEFT JOIN titfisicos AS tf ON tf.idtitular = tit.id LEFT JOIN titjuridicos AS tj ON tj.idtitular = tit.id WHERE 1=1";
	if (!empty($nrocuit)) $sql = $sql." AND tit.nrocuit = '$nrocuit'";
}
if ($opcion=='xdomicilio') {
	$sql = "SELECT * FROM titulares AS tit LEFT JOIN titfisicos AS tf ON tf.idtitular = tit.id LEFT JOIN titjuridicos AS tj ON tj.idtitular = tit.id WHERE 1=1";
	if (!empty($calle)) $sql = $sql." AND tit.calle LIKE '%$calle%'";
	if (!empty($nrocalle)) $sql = $sql." AND tit.calle = '$calle'";
	if (!empty($idprovincia)) $sql = $sql." AND tit.idprovincia = '$idprovincia'";
	if (!empty($idlocalidad)) $sql = $sql." AND tit.idlocalidad = '$idlocalidad'";
}
$sql = $sql." ORDER BY tit.id";

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
		$calle=$datos['calle'];
		$nrocalle=$datos['nrocalle'];
		$idlocalidad=$datos['idlocalidad'];
		if ($datos['persona']=='F') {
			$apellido=$datos['apellido'];
			$nombres=$datos['nombres'];
			$idtipodocumento=$datos['idtipodocumento'];
			$nrodocumento=$datos['nrodocumento'];
			$nombrecompleto=$apellido.", ".$nombres;
			$sql="SELECT nomdocumento FROM tipodocumentos WHERE id='$idtipodocumento'";
			$result_doc=mysqli_query($conn,$sql) or die(mysqli_error($conn));
			$datos_doc=mysqli_fetch_array($result_doc);
			$documentocompleto=$datos_doc['nomdocumento']." ".$nrodocumento;
		} else {
			$razonsocial=$datos['razonsocial'];
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
		<a href="detalletitularpropiedades.php?id=<?=$id?>" class="btn btn-success btn-sm">Detalle</a>
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
