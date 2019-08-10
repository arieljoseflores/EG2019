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

$sql="INSERT INTO titulares(id,idpropiedad,persona,nrocuit,calle,nrocalle,idprovincia,idlocalidad,porcentaje) VALUES ('0','$idProp','$persona','$nrocuit','$calle','$nrocalle','$idprovincia','$idlocalidad','$porcentaje')";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
$idTitular=mysqli_insert_id($conn);

if ($persona=='F') {
	$sql="INSERT INTO titfisicos(idtitular,sexo,apellido,nombres,idnacionalidad,idtipodocumento,nrodocumento,fechanac,idestcivil,nupcias,conyuge) VALUES ('$idTitular','$sexo','$apellido','$nombres','$idnacionalidad','$idtipodocumento','$nrodocumento','$fechanac','$idestcivil',NULLIF('$nupcias',''),'$conyuge')";
	mysqli_query($conn,$sql) or die(mysqli_error($conn));
} else {
	$sql="INSERT INTO titjuridicos(idtitular,razonsocial,tomorpc,foliorpc,nrorpc,fecharpc) VALUES ('$idTitular','$razonsocial','$tomorpc','$foliorpc',NULLIF('$nrorpc',''),NULLIF('$fecharpc',''))";
	mysqli_query($conn,$sql) or die(mysqli_error($conn));
}

mysqli_close($conn);
header("Location: abmtitulares.php?idProp=$idProp&matricula=$matricula");
?>
