<?php
session_start();
include ('inc/abreconexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>

<?php include ('inc/cabecera.php'); ?>

<script type="text/javascript">
        function cambioPersona() {
                var persona=document.getElementById("persona").value;
		if (persona=='F') {
			document.getElementById("fisica1").style.display='block';
			document.getElementById("fisica2").style.display='block';
			document.getElementById("juridica1").style.display='none';
			document.getElementById("juridica2").style.display='none';
		} else {
			document.getElementById("fisica1").style.display='none';
			document.getElementById("fisica2").style.display='none';
			document.getElementById("juridica1").style.display='block';
			document.getElementById("juridica2").style.display='block';
		}
        }
</script>

</head>   

<body onload="cambioPersona()">

<?php include 'inc/menuprofesional.php'; ?>

<h2 class="mb-3 bd-text-purple-bright">Detalle de titular</h2>

<?php
$id=$_GET['id'];
$sql="SELECT * FROM titulares AS tit LEFT JOIN titfisicos AS tf ON tf.idtitular = tit.id LEFT JOIN titjuridicos AS tj ON tj.idtitular = tit.id WHERE tit.id='$id'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)==0) {
?>

No existe el titular ingresado<br/>

<?php
} else {
	$datos=mysqli_fetch_assoc($result);
	$idProp=$datos['idpropiedad'];
$persona=$datos['persona'];
$sexo=$datos['sexo'];
$apellido=$datos['apellido'];
$nombres=$datos['nombres'];
$idnacionalidad=$datos['idnacionalidad'];
$idtipodocumento=$datos['idtipodocumento'];
$nrodocumento=$datos['nrodocumento'];
$razonsocial=$datos['razonsocial'];
$nrocuit=$datos['nrocuit'];
$fechanac=$datos['fechanac'];
$idestcivil=$datos['idestcivil'];
$nupcias=$datos['nupcias'];
$conyuge=$datos['conyuge'];
$tomorpc=$datos['tomorpc'];
$foliorpc=$datos['foliorpc'];
$nrorpc=$datos['nrorpc'];
$fecharpc=$datos['fecharpc'];
$calle=$datos['calle'];
$nrocalle=$datos['nrocalle'];
$idprovincia=$datos['idprovincia'];
$idlocalidad=$datos['idlocalidad'];
$porcentaje=$datos['porcentaje'];
?>

<form class="form-consulta">

<?php include('inc/camposdetitular.php'); ?>

</form>

<br/>

<div class="container">

<h2 class="mb-3 bd-text-purple-bright">Propiedades</h2>

<table class="table table-bordered table-striped table-hover">
<thead class="table-primary">
<tr>
	<th>Matricula</th>
	<th>Partida</th>
	<th>Direccion</th>
	<th>Plano</th>
	<th>Lote</th>
	<th>Manzana</th>
</tr>

</thead>
<tbody>

<?php
$sql = "SELECT p.*,l.nomlocalidad FROM propiedades AS p LEFT JOIN localidades AS l ON l.id = p.idlocalidad where p.id = '$idProp'";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
if (mysqli_num_rows($result)==0) {
?>

<tr>
	<td colspan=6>No hay registros</td>
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

<a class="btn btn-success" href="consultatitulares.php" role="button">Continuar consulta</a>

</body>

</html>
