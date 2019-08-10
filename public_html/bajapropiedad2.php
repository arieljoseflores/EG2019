<?php
include ('inc/abreconexion.php');
$id=$_POST['id'];
$sql="DELETE FROM propiedades WHERE id='$id'";
mysqli_query($conn,$sql) or die(mysqli_error());
mysqli_close($conn);
header("Location: abmpropiedades.php");
?>