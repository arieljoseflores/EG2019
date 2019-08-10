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
		document.getElementById("xmatricula").style.display='none';
		document.getElementById("xpartida").style.display='none';
		document.getElementById("xdireccion").style.display='none';
		document.getElementById("xplano").style.display='none';
		if (opcion=='xmatricula') {
			document.getElementById("xmatricula").style.display='block';
		}
		if (opcion=='xpartida') {
			document.getElementById("xpartida").style.display='block';
		}
		if (opcion=='xdireccion') {
			document.getElementById("xdireccion").style.display='block';
		}
		if (opcion=='xplano') {
			document.getElementById("xplano").style.display='block';
		}
	}
</script>

</head>   

<body onload="cambioOpcion()">

<?php include 'inc/menuprofesional.php'; ?>

<form class="form-busqueda" action="listadopropiedades.php" method="post">

	<h2 class="mb-3 bd-text-purple-bright">Consulta de propiedades</h2>

	<div class="form-group">
	<label for="opcion">Opci&oacute;n</label>
	<select class="form-control" id="opcion" name="opcion" onchange="cambioOpcion()">
		<option value="xmatricula">Por Matr&iacute;cula</option>
		<option value="xpartida">Por Partida</option>
		<option value="xdireccion">Por Direcci&oacute;n</option>
		<option value="xplano">Por Plano</option>
	</select>
	</div>
	<br/>
<!-- Opcion x matricula -->

	<div id="xmatricula">
	
	<div class="form-group">
	<label for="iddepartamento">Departamento</label>
	<select class="form-control" id="iddepartamento" name="iddepartamento">
	<?php
	$sql="SELECT * FROM departamentos ORDER BY 1";
	$result=mysqli_query($conn,$sql);
	while ($data=mysqli_fetch_array($result)) {
		$id=$data['id'];
		$nomdepartamento=$data['nomdepartamento'];
		echo "<option value='$id'>$id - $nomdepartamento</option>";
	}
	mysqli_free_result($result);
	?>
	</select>
	</div>

	<div class="form-group">
	<label for="matricula">Matr&iacute;cula</label>
	<input type="text" id="matricula" class="form-control form-control-sm" name="matricula">
	</div>

	<div class="form-group">
	<label for="submatricula">Submatr&iacute;cula</label>
	<input type="text" id="submatricula" class="form-control form-control-sm" name="submatricula">
	</div>
	</div>

<!-- Opcion x partida inmobiliaria -->

	<div id="xpartida" class="form-group">
	<label for="partida">Partida inmobiliaria</label>
	<input type="text" id="partida" class="form-control" name="partida">
	</div>

<!-- Opcion x direccion -->

	<div id="xdireccion">

	<div class="form-group">
	<label for="idlocalidad">Localidad</label>
	<select id="idlocalidad" name="idlocalidad" class="form-control">
	<?php
	$sql="SELECT * FROM localidades WHERE idprovincia='S' ORDER BY nomlocalidad";
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

	<div class="form-group">
	<label for="idzona">Zona</label>
	<select id="idzona" name="idzona" class="form-control">
	<?php
	$sql="SELECT * FROM zonas ORDER BY 1";
	$result=mysqli_query($conn,$sql);
	while ($data=mysqli_fetch_array($result)) {
		$id=$data['id'];
		$nomzona=$data['nomzona'];
		echo "<option value='$id'>$nomzona</option>";
	}
	mysqli_free_result($result);
	?>
	</select>
	</div>

	<div class="form-group">
	<label for="calle">Calle</label> 
	<input type="text" id="calle" name="calle" class="form-control">
	</div>

	<div class="form-group">
	<label for="nrocalle">N&uacute;mero</label> 
	<input type="text" id="nrocalle" name="nrocalle" class="form-control">
	</div>

	</div>

<!-- Opcion x plano -->

	<div id="xplano">

	<div class="form-group">
	<label for="nroplano">N&uacute;mero plano</label> 
	<input type="text" id="nroplano" name="nroplano" class="form-control">
	</div>

	<div class="form-group">
	<label for="anioplano">A&ntilde;o plano</label> 
	<input type="text" id="anioplano" name="anioplano" class="form-control">
	</div>

	<div class="form-group">
	<label for="lote">Lote</label> 
	<input type="text" id="lote" name="lote" class="form-control">
	</div>

	<div class="form-group">
	<label for="manzana">Manzana</label> 
	<input type="text" id="manzana" name="manzana" class="form-control">
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
