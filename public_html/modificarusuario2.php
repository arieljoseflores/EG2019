<?php
include ('inc/abreconexion.php');
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$categoria=$_POST['categoria'];
$correo=$_POST['correo'];
$contrasenia=$_POST['contrasenia'];
$sql="UPDATE usuarios SET nombre='$nombre',categoria='$categoria',correo='$correo',contrasenia='$contrasenia' WHERE id='$id'";
mysqli_query($conn,$sql) or die(mysqli_error());
mysqli_close($conn);
header("Location: abmusuarios.php");
?>
