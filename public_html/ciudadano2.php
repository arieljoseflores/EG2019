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

<?php include 'inc/menu.php'; ?>

<h2 class="mb-3 bd-text-purple-bright">Consulta de inmueble</h2>

<?php
$partida=$_POST['partida'];
$sql="SELECT p.*,l.nomlocalidad FROM propiedades AS p LEFT JOIN localidades AS l ON l.id = p.idlocalidad WHERE pinmobiliaria='$partida'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)==0) {
?>

No existe la partida ingresada<br/>

<?php
} else {
	$datos=mysqli_fetch_assoc($result);
	$idProp=$datos['id'];
	$iddepartamento=$datos['iddepartamento'];
	$matricula=$datos['matricula'];
	$submatricula=$datos['submatricula'];
	$idlocalidad=$datos['idlocalidad'];
	$idzona=$datos['idzona'];
	$ncatastral=$datos['ncatastral'];
	$pinmobiliaria=$datos['pinmobiliaria'];
	$calle=$datos['calle'];
	$nrocalle=$datos['nrocalle'];
	$lote=$datos['lote'];
	$manzana=$datos['manzana'];
	$superficie=$datos['superficie'];
	$nroplano=$datos['nroplano'];
	$anioplano=$datos['anioplano'];
	$ecalles=$datos['ecalles'];
	$arranque=$datos['arranque'];
	$rumbos=$datos['rumbos'];
	$unidad=$datos['unidad'];
	$parcela=$datos['parcela'];
	$supexclu=$datos['supexclu'];
	$supcomun=$datos['supcomun'];
	$valorpro=$datos['valorpro'];
	$planta=$datos['planta'];
	$destino=$datos['destino'];
?>

<form class="form-consulta">

<?php include('inc/camposdepropiedad.php'); ?>

</form>

<br/>

<div class="container">

<h2 class="mb-3 bd-text-purple-bright">Titulares</h2>

<table class="table table-bordered table-striped table-hover">
<thead class="table-primary">
<tr>
	<th>Nro</th>
	<th>Nombre / Raz&oacute;n Social</th>
	<th>Documento</th>
	<th>CUIT</th>
	<th>Domicilio</th>
	<th>Porcentaje</th>
</tr>	

</thead>
<tbody>

<?php
$sql = "SELECT * FROM titulares AS tit LEFT JOIN titfisicos AS tf ON tf.idtitular = tit.id LEFT JOIN titjuridicos AS tj ON tj.idtitular = tit.id WHERE tit.idpropiedad='$idProp' ORDER BY tit.id";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
if (mysqli_num_rows($result)==0) {
?>

<tr>
	<td colspan=6>No hay registros</td>
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

<?php
}
?>

<a class="btn btn-success" href="ciudadano.php" role="button">Continuar consulta</a>

</body>

</html>
