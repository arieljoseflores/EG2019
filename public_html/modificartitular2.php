<?php
include ('inc/abreconexion.php');

$idProp=$_POST['idProp'];
$matricula=$_POST['matricula'];
$id=$_POST['id'];
$persona=$_POST['persona'];
$sexo=$_POST['sexo'];
$apellido=$_POST['apellido'];
$nombres=$_POST['nombres'];
$idnacionalidad=$_POST['idnacionalidad'];
$idtipodocumento=$_POST['idtipodocumento'];
$nrodocumento=$_POST['nrodocumento'];
$razonsocial=$_POST['razonsocial'];
$nrocuit=$_POST['nrocuit'];
$fechanac=$_POST['fechanac'];
$idestcivil=$_POST['idestcivil'];
$nupcias=$_POST['nupcias'];
$conyuge=$_POST['conyuge'];
$tomorpc=$_POST['tomorpc'];
$foliorpc=$_POST['foliorpc'];
$nrorpc=$_POST['nrorpc'];
$fecharpc=$_POST['fecharpc'];
$calle=$_POST['calle'];
$nrocalle=$_POST['nrocalle'];
$idprovincia=$_POST['idprovincia'];
$idlocalidad=$_POST['idlocalidad'];
$porcentaje=$_POST['porcentaje'];

$sql="UPDATE titulares SET nrocuit='$nrocuit',calle='$calle',nrocalle='$nrocalle',idprovincia='$idprovincia',idlocalidad='$idlocalidad',porcentaje='$porcentaje' WHERE id='$id'";
mysqli_query($conn,$sql) or die(mysqli_error($conn));

if ($persona=='F') {
	$sql="UPDATE titfisicos SET sexo='$sexo',apellido='$apellido',nombres='$nombres',idnacionalidad='$idnacionalidad',idtipodocumento='$idtipodocumento',nrodocumento='$nrodocumento',fechanac='$fechanac',idestcivil='$idestcivil',nupcias=NULLIF('$nupcias',''),conyuge='$conyuge' WHERE idtitular='$id'";
	mysqli_query($conn,$sql) or die(mysqli_error($conn));
} else {
	$sql="UPDATE titjuridicos SET razonsocial='$razonsocial',tomorpc='$tomorpc',foliorpc='$foliorpc',nrorpc=NULLIF('$nrorpc',''),fecharpc=NULLIF('$fecharpc','') WHERE idtitular='$id'";
	mysqli_query($conn,$sql) or die(mysqli_error($conn));
}
mysqli_close($conn);

header("Location: abmtitulares.php?idProp=$idProp&matricula=$matricula");
?>
