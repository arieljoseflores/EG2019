<?php
session_start();
include ('inc/abreconexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>

<?php include ('inc/cabecera.php'); ?>

<script type="text/javascript">
	function cambioOpcion() {
		var opcion=document.getElementById("opcion").value;
		document.getElementById("xnombre").style.display='none';
		document.getElementById("xdocumento").style.display='none';
		document.getElementById("xrazonsocial").style.display='none';
		document.getElementById("xcuit").style.display='none';
		document.getElementById("xdomicilio").style.display='none';
		if (opcion=='xnombre') {
			document.getElementById("xnombre").style.display='block';
		}
		if (opcion=='xdocumento') {
			document.getElementById("xdocumento").style.display='block';
		}
		if (opcion=='xrazonsocial') {
			document.getElementById("xrazonsocial").style.display='block';
		}
		if (opcion=='xcuit') {
			document.getElementById("xcuit").style.display='block';
		}
		if (opcion=='xdomicilio') {
			document.getElementById("xdomicilio").style.display='block';
		}
	}
</script>

</head>   

<body onload="cambioOpcion()">

<?php include 'inc/menuprofesional.php'; ?>

<form class="form-busqueda" action="listadotitulares.php" method="post">

	<h2 class="mb-3 bd-text-purple-bright">Consulta de titulares</h2>

	<div class="form-group">
	<label for="opcion">Opci&oacute;n</label>
	<select class="form-control" id="opcion" name="opcion" onchange="cambioOpcion()">
		<option value="xnombre">Por Nombre</option>
		<option value="xdocumento">Por Documento</option>
		<option value="xrazonsocial">Por Raz&oacute;n Social</option>
		<option value="xcuit">Por Cuit</option>
		<option value="xdomicilio">Por Domicilio</option>
	</select>
	</div>
	<br/>

<!-- Opcion x Nombre -->

	<div id="xnombre">

	<div class="form-group">
	<label for="apellido">Apellido</label>
	<input type="text" id="apellido" name="apellido" class="form-control form-control-sm">
	</div>

	<div class="form-group">
	<label for="nombres">Nombres</label>
	<input type="text" id="nombres" name="nombres" class="form-control form-control-sm">
	</div>

	</div>

<!-- Opcion x Documento -->

	<div id="xdocumento">

	<div class="form-group">
	<label for="idtipodocumento">Tipo documento</label>
	<select id="idtipodocumento" name="idtipodocumento" class="form-control">
	<?php
	$sql="SELECT * FROM tipodocumentos ORDER BY nomdocumento";
	$result=mysqli_query($conn,$sql);
	while ($data=mysqli_fetch_array($result)) {
		$id=$data['id'];
		$nomdocumento=$data['nomdocumento'];
		echo "<option value='$id'>$nomdocumento</option>";
	}
	mysqli_free_result($result);
	?>
	</select>
	</div>

	<div class="form-group">
	<label for="nrodocumento">Nro documento</label>
	<input type="text" id="nrodocumento" name="nrodocumento" class="form-control form-control-sm">
	</div>

	</div>

<!-- Opcion x Razon Social -->

	<div id="xrazonsocial" class="form-group">
	<label for="razonsocial">Razon social</label>
	<input type="text" id="razonsocial" name="razonsocial" class="form-control form-control-sm">
	</div>

<!-- Opcion x Cuit -->

	<div id="xcuit" class="form-group">
	<label for="nrocuit">CUIT</label>
	<input type="text" id="nrocuit" name="nrocuit" class="form-control form-control-sm">
	</div>

<!-- Opcion x Domicilio -->

	<div id="xdomicilio">

	<div class="form-group">
	<label for="calle">Calle</label>
	<input type="text" id="calle" name="calle" class="form-control form-control-sm">
	</div>

	<div class="form-group">
	<label for="nrocalle">Nro calle</label>
	<input type="text" id="nrocalle" name="nrocalle" class="form-control form-control-sm">
	</div>

	<div class="form-group">
	<label for="idprovincia">Provincia</label>
	<select id="idprovincia" name="idprovincia" class="form-control">
	<?php
	$sql="SELECT * FROM provincias ORDER BY nomprovincia";
	$result=mysqli_query($conn,$sql);
	while ($data=mysqli_fetch_array($result)) {
		$id=$data['id'];
		$nomprovincia=$data['nomprovincia'];
		echo "<option value='$id'>$nomprovincia</option>";
	}
	mysqli_free_result($result);
	?>
	</select>
	</div>

	<div class="form-group">
	<label for="idlocalidad">Localidad</label>
	<select id="idlocalidad" name="idlocalidad" class="form-control">
	<?php
	$sql="SELECT * FROM localidades ORDER BY nomlocalidad";
	$result=mysqli_query($conn,$sql);
	while ($data=mysqli_fetch_array($result)) {
		$id=$data['id'];
		$nomlocalidad=$data['nomlocalidad'];
		echo "<option value='$id'>$nomlocalidad</option>";
	}
	mysqli_free_result($result);
	?>
	</select>
	</div>

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
