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
			$('#apellido').attr("required","true");
			$('#nombres').attr("required","true");
			$('#nrodocumento').attr("required","true");
			$('#fechanac').attr("required","true");
			document.getElementById("juridica1").style.display='none';
			document.getElementById("juridica2").style.display='none';
			$('#razonsocial').removeAttr("required");
		} else {
			document.getElementById("fisica1").style.display='none';
			document.getElementById("fisica2").style.display='none';
			$('#apellido').removeAttr("required");
			$('#nombres').removeAttr("required");
			$('#nrodocumento').removeAttr("required");
			$('#fechanac').removeAttr("required");
			document.getElementById("juridica1").style.display='block';
			document.getElementById("juridica2").style.display='block';
			$('#razonsocial').attr("required","true");
		}
        }
</script>

</head>   

<body onload="cambioPersona()">

<?php include 'inc/menuadministrador.php'; ?>

<?php
$idProp=$_GET['idProp'];
$matricula=$_GET['matricula'];
$id=$_GET['id'];
?>

<?php
$sql="SELECT * FROM titulares AS tit LEFT JOIN titfisicos AS tf ON tf.idtitular = tit.id LEFT JOIN titjuridicos AS tj ON tj.idtitular = tit.id WHERE tit.id='$id'";
$result=mysqli_query($conn,$sql);
$datos=mysqli_fetch_assoc($result);

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

<form class="form-input" action="modificartitular2.php" method="post">

	<h2 class="mb-3 bd-text-purple-bright">Modificar Titular - Matricula <?=$matricula?></h2>

	<div class="text-white">
	<a class="btn btn-success" href="abmtitulares.php?idProp=<?=$idProp?>&matricula=<?=$matricula?>" role="button">Consulta</a>
	<a class="btn btn-success" href="altatitular.php?idProp=<?=$idProp?>&matricula=<?=$matricula?>" role="button">Alta</a>
	</div>

	<br/>

	<input type="hidden" name="idProp" value="<?=$idProp?>">
	<input type="hidden" name="matricula" value="<?=$matricula?>">
	<input type="hidden" name="id" value="<?=$id?>">

	<div class="form-group">
	<label for="persona">Persona (*)</label>
	<select id="persona" name="persona" class="form-control" onchange="cambioPersona()">
		<option value="F"<?=$persona=="F"?" selected":" disabled"?>>Fisica</option>
		<option value="J"<?=$persona=="J"?" selected":" disabled"?>>Juridica</option>
	</select>
	</div>

	<div id="fisica1">

	<div class="form-group">
	<label for="sexo">Sexo (*)</label>
	<select id="sexo" name="sexo" class="form-control">
		<option value="F"<?=$sexo=="F"?" selected":""?>>Femenino</option>
		<option value="M"<?=$sexo=="M"?" selected":""?>>Masculino</option>
	</select>
	</div>

	<div class="form-group">
	<label for="apellido">Apellido (*)</label>
	<input type="text" id="apellido" name="apellido" class="form-control form-control-sm" value="<?=$apellido?>">
	</div>

	<div class="form-group">
	<label for="nombres">Nombres (*)</label>
	<input type="text" id="nombres" name="nombres" class="form-control form-control-sm" value="<?=$nombres?>">
	</div>

	<div class="form-group">
	<label for="nacionalidad">Nacionalidad (*)</label>
	<select id="idnacionalidad" name="idnacionalidad" class="form-control">
	<?php
	$sql="SELECT * FROM nacionalidades ORDER BY nacionalidad";
	$result=mysqli_query($conn,$sql);
	while ($data=mysqli_fetch_array($result)) {
		$id=$data['id'];
		$nacionalidad=$data['nacionalidad'];
		$opcion=($id==$idnacionalidad ? "selected" : "");
		echo "<option value='$id' $opcion>$nacionalidad</option>";
	}
	mysqli_free_result($result);
	?>
	</select>
	</div>

	<div class="form-group">
	<label for="idtipodocumento">Tipo documento (*)</label>
	<select id="idtipodocumento" name="idtipodocumento" class="form-control">
	<?php
	$sql="SELECT * FROM tipodocumentos ORDER BY nomdocumento";
	$result=mysqli_query($conn,$sql);
	while ($data=mysqli_fetch_array($result)) {
		$id=$data['id'];
		$nomdocumento=$data['nomdocumento'];
		$opcion=($id==$idtipodocumento ? "selected" : "");
		echo "<option value='$id' $opcion>$nomdocumento</option>";
	}
	mysqli_free_result($result);
	?>
	</select>
	</div>

	<div class="form-group">
	<label for="nrodocumento">Nro documento (*)</label>
	<input type="number" id="nrodocumento" name="nrodocumento" class="form-control form-control-sm" value="<?=$nrodocumento?>">
	</div>

	</div>

	<div id="juridica1">

	<div class="form-group">
	<label for="razonsocial">Razon social (*)</label>
	<input type="text" id="razonsocial" name="razonsocial" class="form-control form-control-sm" value="<?=$razonsocial?>">
	</div>

	</div>

	<div class="form-group">
	<label for="nrocuit">CUIT (*)</label>
	<input type="text" id="nrocuit" name="nrocuit" class="form-control form-control-sm" value="<?=$nrocuit?>" required>
	</div>

	<div id="fisica2">

	<div class="form-group">
	<label for="fechanac">Fecha nacimiento (*)</label>
	<input type="text" id="fechanac" name="fechanac" class="form-control form-control-sm" placeholder="Ej: 2000-01-01" value="<?=$fechanac?>">
	</div>

	<div class="form-group">
	<label for="idestcivil">Estado civil (*)</label>
	<select id="idestcivil" name="idestcivil" class="form-control">
	<?php
	$sql="SELECT * FROM estciviles ORDER BY nomcivil";
	$result=mysqli_query($conn,$sql);
	while ($data=mysqli_fetch_array($result)) {
		$id=$data['id'];
		$nomcivil=$data['nomcivil'];
		$opcion=($id==$idestcivil ? "selected" : "");
		echo "<option value='$id' $opcion>$nomcivil</option>";
	}
	mysqli_free_result($result);
	?>
	</select>
	</div>

	<div class="form-group">
	<label for="nupcias">Nupcias</label>
	<input type="number" id="nupcias" name="nupcias" class="form-control form-control-sm" value="<?=$nupcias?>">
	</div>

	<div class="form-group">
	<label for="conyuge">Conyuge</label>
	<input type="text" id="conyuge" name="conyuge" class="form-control form-control-sm" value="<?=$conyuge?>">
	</div>

	</div>

	<div id="juridica2">

	<div class="form-group">
	<label for="tomorpc">Tomo R.P.C.</label>
	<input type="text" id="tomorpc" name="tomorpc" class="form-control form-control-sm" value="<?=$tomorpc?>">
	</div>

	<div class="form-group">
	<label for="foliorpc">Folio R.P.C.</label>
	<input type="text" id="foliorpc" name="foliorpc" class="form-control form-control-sm" value="<?=$foliorpc?>">
	</div>

	<div class="form-group">
	<label for="nrorpc">Nro R.P.C.</label>
	<input type="number" id="nrorpc" name="nrorpc" class="form-control form-control-sm" value="<?=$nrorpc?>">
	</div>

	<div class="form-group">
	<label for="fecharpc">Fecha R.P.C.</label>
	<input type="text" id="fecharpc" name="fecharpc" class="form-control form-control-sm" placeholder="Ej: 2000-01-01" value="<?=$fecharpc?>">
	</div>

	</div>

	<div class="form-group">
	<label for="calle">Calle (*)</label>
	<input type="text" id="calle" name="calle" class="form-control form-control-sm" value="<?=$calle?>" required>
	</div>

	<div class="form-group">
	<label for="nrocalle">Nro calle (*)</label>
	<input type="number" id="nrocalle" name="nrocalle" class="form-control form-control-sm" value="<?=$nrocalle?>" required>
	</div>

	<div class="form-group">
	<label for="idprovincia">Provincia (*)</label>
	<select id="idprovincia" name="idprovincia" class="form-control">
	<?php
	$sql="SELECT * FROM provincias ORDER BY nomprovincia";
	$result=mysqli_query($conn,$sql);
	while ($data=mysqli_fetch_array($result)) {
		$id=$data['id'];
		$nomprovincia=$data['nomprovincia'];
		$opcion=($id==$idprovincia ? "selected" : "");
		echo "<option value='$id' $opcion>$nomprovincia</option>";
	}
	mysqli_free_result($result);
	?>
	</select>
	</div>

	<div class="form-group">
	<label for="idlocalidad">Localidad (*)</label>
	<select id="idlocalidad" name="idlocalidad" class="form-control">
	<?php
	$sql="SELECT * FROM localidades ORDER BY nomlocalidad";
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
	<label for="porcentaje">Porcentaje (*)</label>
	<input type="text" id="porcentaje" name="porcentaje" class="form-control form-control-sm" value="<?=$porcentaje?>" placeholder="Ej: 12.34" required>
	</div>

	<input type="submit" class="btn btn-primary" value="Modificar">
</form>

<?php include ('inc/footer.php'); ?>

</body>
</html>

<?php
mysqli_close($conn);
?>
