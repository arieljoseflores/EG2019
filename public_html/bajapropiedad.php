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
$sql="SELECT * FROM propiedades WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$datos=mysqli_fetch_assoc($result);
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
$idusuario=$datos['idusuario'];
?>

<form class="form-input" action="bajapropiedad2.php" method="post">

	<h2 class="mb-3 bd-text-purple-bright">Baja de Propiedad</h2>

	<div class="text-white">
	<a class="btn btn-success" href="abmpropiedades.php" role="button">Consulta</a>
	<a class="btn btn-success" href="altapropiedad.php" role="button">Alta</a>
	</div>

	<br/>

	<input type="hidden" name="id" value="<?=$id?>" readonly>

<?php include('inc/camposdepropiedad.php'); ?>

	<div class="form-group">
	<label for="idusuario">Usuario alta</label>
	<input type="text" id="idusuario" name="idusuario" class="form-control form-control-sm" value="<?=$idusuario?>" readonly>
	</div>

	<input type="submit" class="btn btn-danger" value="Borrar">

</form>

<?php include ('inc/footer.php'); ?>

</body>
</html>

<?php
mysqli_close($conn);
?>
