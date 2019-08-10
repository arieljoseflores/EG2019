<?php
include ('inc/abreconexion.php');
$nombre=$_POST['nombre'];
$categoria=$_POST['categoria'];
$correo=$_POST['correo'];
$contrasenia=$_POST['contrasenia'];
$sql="INSERT INTO usuarios VALUES ('0','$nombre','$categoria','$correo','$contrasenia')";
mysqli_query($conn,$sql) or die(mysqli_error());
mysqli_close($conn);
header("Location: abmusuarios.php");
?>