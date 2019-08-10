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

<h2 class="mb-3 bd-text-purple-bright">Listado de Propiedades</h2>

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

$opcion=$_POST['opcion'];
$iddepartamento=$_POST['iddepartamento'];
$matricula=$_POST['matricula'];
$submatricula=$_POST['submatricula'];
$partida=$_POST['partida'];
$idlocalidad=$_POST['idlocalidad'];
$idzona=$_POST['idzona'];
$calle=$_POST['calle'];
$nrocalle=$_POST['nrocalle'];
$nroplano=$_POST['nroplano'];
$anioplano=$_POST['anioplano'];
$lote=$_POST['lote'];
$manzana=$_POST['manzana'];

$sql = "SELECT p.*,l.nomlocalidad FROM propiedades AS p LEFT JOIN localidades AS l ON l.id = p.idlocalidad where 1=1";
if ($opcion=='xmatricula') {
	if (!empty($iddepartamento)) $sql = $sql." AND p.iddepartamento='$iddepartamento'";
	if (!empty($matricula))      $sql = $sql." AND p.matricula     ='$matricula'";
	if (!empty($submatricula))   $sql = $sql." AND p.submatricula  ='$submatricula'";
}
if ($opcion=='xpartida') {
	if (!empty($partida))        $sql = $sql." AND p.pinmobiliaria ='$partida'";
}
if ($opcion=='xdireccion') {
	if (!empty($idlocalidad))    $sql = $sql." AND p.idlocalidad   ='$idlocalidad'";
	if (!empty($idzona))         $sql = $sql." AND p.idzona        ='$idzona'";
	if (!empty($calle))          $sql = $sql." AND p.calle         ='$calle'";
	if (!empty($nrocalle))       $sql = $sql." AND p.nrocalle      ='$nrocalle'";
}
if ($opcion=='xplano') {
	if (!empty($nroplano))       $sql = $sql." AND p.nroplano      ='$nroplano'";
	if (!empty($anioplano))      $sql = $sql." AND p.anioplano     ='$anioplano'";
	if (!empty($lote))           $sql = $sql." AND p.lote          ='$lote'";
	if (!empty($manzana))        $sql = $sql." AND p.manzana       ='$manzana'";
}
$sql = $sql." ORDER BY iddepartamento,matricula,submatricula";

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
		<a href="detallepropiedadtitulares.php?id=<?=$id?>" class="btn btn-success btn-sm">Detalle</a>
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
