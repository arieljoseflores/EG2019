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

<form class="form-input" action="bajatitular2.php" method="post">

	<h2 class="mb-3 bd-text-purple-bright">Baja de Titular - Matricula <?=$matricula?></h2>

	<div class="text-white">
	<a class="btn btn-success" href="abmtitulares.php?idProp=<?=$idProp?>&matricula=<?=$matricula?>" role="button">Consulta</a>
	<a class="btn btn-success" href="altatitular.php?idProp=<?=$idProp?>&matricula=<?=$matricula?>" role="button">Alta</a>
	</div>

	<br/>

	<input type="hidden" name="idProp" value="<?=$idProp?>">
	<input type="hidden" name="matricula" value="<?=$matricula?>">
	<input type="hidden" name="id" value="<?=$id?>">

<?php include('inc/camposdetitular.php'); ?>

	<input type="submit" class="btn btn-danger" value="Borrar">
</form>

<?php include ('inc/footer.php'); ?>

</body>
</html>

<?php
mysqli_close($conn);
?>
