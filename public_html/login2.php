<?php
session_start();
include ('inc/abreconexion.php');
$correo = $_POST['correo'];
$contrasenia = $_POST['contrasenia'];
$sql = "SELECT * FROM usuarios WHERE correo='$correo' AND contrasenia='$contrasenia'";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
$datos=mysqli_fetch_assoc($result);
if ($datos) {
	$_SESSION['usuarioId']=$datos['id'];
	$_SESSION['usuarioNombre']=$datos['nombre'];
	$_SESSION['usuarioCategoria']=$datos['categoria'];
	$status=true;
} else {
	$status=false;
}
mysqli_free_result($result);
mysqli_close($conn);
if ($status) {
	header("Location: index.php");
} else {
	header("Location: login.php?error=1");
}
?>