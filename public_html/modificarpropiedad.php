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
$idProp=$_GET['id'];
$sql="SELECT * FROM propiedades WHERE id='$idProp'";
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

<form class="form-input" action="modificarpropiedad2.php" method="post">

	<h2 class="mb-3 bd-text-purple-bright">Modificar Propiedad</h2>

	<div class="text-white">
	<a class="btn btn-success" href="abmpropiedades.php" role="button">Consulta</a>
	<a class="btn btn-success" href="altapropiedad.php" role="button">Alta</a>
	<a class="btn btn-primary" href="abmtitulares.php?idProp=<?=$idProp?>&matricula=<?=$matricula?>">Editar Titulares</a>

	</div>

	<br/>

	<input type="hidden" name="id" value="<?=$idProp?>" required>

	<div class="form-group">
	<label for="iddepartamento">Departamento (*)</label>
	<select id="iddepartamento" name="iddepartamento" class="form-control">
	<?php
	$sql="SELECT * FROM departamentos ORDER BY 1";
	$result=mysqli_query($conn,$sql);
	while ($data=mysqli_fetch_array($result)) {
		$id=$data['id'];
		$nomdepartamento=$data['nomdepartamento'];
		$opcion=($id==$iddepartamento ? "selected" : "");
		echo "<option value='$id' $opcion>$id - $nomdepartamento</option>";
	}
	mysqli_free_result($result);
	?>
	</select>
	</div>

	<div class="form-group">
	<label for="matricula">Matricula (*)</label>
	<input type="number" id="matricula" name="matricula" class="form-control form-control-sm" value="<?=$matricula?>" required>
	</div>

	<div class="form-group">
	<label for="submatricula">Submatricula</label>
	<input type="number" id="submatricula" name="submatricula" class="form-control form-control-sm" value="<?=$submatricula?>">
	</div>

	<div class="form-group">
	<label for="idlocalidad">Localidad (*)</label>
	<select id="idlocalidad" name="idlocalidad" class="form-control">
	<?php
	$sql="SELECT * FROM localidades WHERE idprovincia='S' ORDER BY nomlocalidad";
	$result=mysqli_query($conn,$sql);
	while ($data=mysqli_fetch_array($result)) {
		$id=$data['id'];
		$nomlocalidad=$data['nomlocalidad'];
		$opcion=($id==$idlocalidad ? "selected" : "");
		echo "<option value='$id' $opcion>$nomlocalidad</option>";
	}
	mysqli_free_result($result);
	?>
	</select>
	</div>

	<div class="form-group">
	<label for="idzona">Zona (*)</label>
	<select id="idzona" name="idzona" class="form-control">
	<?php
	$sql="SELECT * FROM zonas ORDER BY 1";
	$result=mysqli_query($conn,$sql);
	while ($data=mysqli_fetch_array($result)) {
		$id=$data['id'];
		$nomzona=$data['nomzona'];
		$opcion=($id==$idzona ? "selected" : "");
		echo "<option value='$id' $opcion>$nomzona</option>";
	}
	mysqli_free_result($result);
	?>
	</select>
	</div>

	<div class="form-group">
	<label for="ncatastral">Nomenclatura Catastral (*)</label>
	<input type="text" id="ncatastral" name="ncatastral" class="form-control form-control-sm" value="<?=$ncatastral?>" required>
	</div>

	<div class="form-group">
	<label for="pinmobiliaria">Partida inmobiliaria (*)</label>
	<input type="text" id="pinmobiliaria" name="pinmobiliaria" class="form-control form-control-sm" value="<?=$pinmobiliaria?>" required>
	</div>

	<div class="form-group">
	<label for="calle">Calle (*)</label>
	<input type="text" id="calle" name="calle" class="form-control form-control-sm" value="<?=$calle?>" required>
	</div>

	<div class="form-group">
	<label for="nrocalle">Numero (*)</label>
	<input type="number" id="nrocalle" name="nrocalle" class="form-control form-control-sm" value="<?=$nrocalle?>" required>
	</div>

	<div class="form-group">
	<label for="lote">Lote (*)</label>
	<input type="text" id="lote" name="lote" class="form-control form-control-sm" value="<?=$lote?>" required>
	</div>

	<div class="form-group">
	<label for="manzana">Manzana (*)</label>
	<input type="text" id="manzana" name="manzana" class="form-control form-control-sm" value="<?=$manzana?>" required>
	</div>

	<div class="form-group">
	<label for="superficie">Superficie, en metros cuadrados (*)</label>
	<input type="text" id="superficie" name="superficie" class="form-control form-control-sm" placeholder="Ej: 123.45" value="<?=$superficie?>" required>
	</div>

	<div class="form-group">
	<label for="nroplano">Numero plano (*)</label>
	<input type="number" id="nroplano" name="nroplano" class="form-control form-control-sm" value="<?=$nroplano?>" required>
	</div>

	<div class="form-group">
	<label for="anioplano">Anio plano (*)</label>
	<input type="number" id="anioplano" name="anioplano" class="form-control form-control-sm" value="<?=$anioplano?>" required>
	</div>

	<div class="form-group">
	<label for="ecalles">Entre calles (*)</label>
	<input type="text" id="ecalles" name="ecalles" class="form-control form-control-sm" value="<?=$ecalles?>" required>
	</div>

	<div class="form-group">
	<label for="arranque">Arranque (*)</label>
	<input type="text" id="arranque" name="arranque" class="form-control form-control-sm" value="<?=$arranque?>" required>
	</div>

	<div class="form-group">
	<label for="rumbos">Rumbos (*)</label>
	<input type="text" id="rumbos" name="rumbos" class="form-control form-control-sm" value="<?=$rumbos?>" required>
	</div>

	<div class="form-group">
	<label for="unidad">Unidad</label>
	<input type="text" id="unidad" name="unidad" class="form-control form-control-sm" value="<?=$unidad?>">
	</div>

	<div class="form-group">
	<label for="parcela">Parcela</label>
	<input type="text" id="parcela" name="parcela" class="form-control form-control-sm" value="<?=$parcela?>">
	</div>

	<div class="form-group">
	<label for="supexclu">Superficie exclusiva, en metros cuadrados</label>
	<input type="text" id="supexclu" name="supexclu" class="form-control form-control-sm" placeholder="Ej: 123.45" value="<?=$supexclu?>">
	</div>

	<div class="form-group">
	<label for="supcomun">Superficie comun, en metros cuadrados</label>
	<input type="text" id="supcomun" name="supcomun" class="form-control form-control-sm" placeholder="Ej: 123.45" value="<?=$supcomun?>">
	</div>

	<div class="form-group">
	<label for="valorpro">Valor proporcional, en porcentaje</label>
	<input type="text" id="valorpro" name="valorpro" class="form-control form-control-sm" placeholder="Ej: 12.34" value="<?=$valorpro?>">
	</div>

	<div class="form-group">
	<label for="planta">Planta</label>
	<input type="text" id="planta" name="planta" class="form-control form-control-sm" value="<?=$planta?>">
	</div>

	<div class="form-group">
	<label for="destino">Destino</label>
	<input type="text" id="destino" name="destino" class="form-control form-control-sm" value="<?=$destino?>">
	</div>

	<div class="form-group">
	<label for="idusuario">Usuario alta</label>
	<input type="text" id="idusuario" name="idusuario" class="form-control form-control-sm" value="<?=$idusuario?>" readonly>
	</div>

	<input type="submit" class="btn btn-primary" value="Modificar">
</form>

<?php include ('inc/footer.php'); ?>

</body>
</html>

<?php
mysqli_close($conn);
?>
