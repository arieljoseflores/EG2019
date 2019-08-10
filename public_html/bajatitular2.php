<?php
include ('inc/abreconexion.php');
$idProp=$_POST['idProp'];
$matricula=$_POST['matricula'];
$id=$_POST['id'];

$sql="DELETE FROM titfisicos WHERE idtitular='$id'";
mysqli_query($conn,$sql) or die(mysqli_error($conn));

$sql="DELETE FROM titjuridicos WHERE idtitular='$id'";
mysqli_query($conn,$sql) or die(mysqli_error($conn));

$sql="DELETE FROM titulares WHERE id='$id'";
mysqli_query($conn,$sql) or die(mysqli_error($conn));

mysqli_close($conn);
header("Location: abmtitulares.php?idProp=$idProp&matricula=$matricula");
?>
