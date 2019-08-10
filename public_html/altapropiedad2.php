<?php
session_start();
include ('inc/abreconexion.php');
$id='0';
$iddepartamento=$_POST['iddepartamento'];
$matricula=$_POST['matricula'];
$submatricula=$_POST['submatricula'];
$idlocalidad=$_POST['idlocalidad'];
$idzona=$_POST['idzona'];
$ncatastral=$_POST['ncatastral'];
$pinmobiliaria=$_POST['pinmobiliaria'];
$calle=$_POST['calle'];
$nrocalle=$_POST['nrocalle'];
$lote=$_POST['lote'];
$manzana=$_POST['manzana'];
$superficie=$_POST['superficie'];
$nroplano=$_POST['nroplano'];
$anioplano=$_POST['anioplano'];
$ecalles=$_POST['ecalles'];
$arranque=$_POST['arranque'];
$rumbos=$_POST['rumbos'];
$unidad=$_POST['unidad'];
$parcela=$_POST['parcela'];
$supexclu=$_POST['supexclu'];
$supcomun=$_POST['supcomun'];
$valorpro=$_POST['valorpro'];
$planta=$_POST['planta'];
$destino=$_POST['destino'];
$idusuario=$_SESSION['usuarioId'];
$sql="INSERT INTO propiedades(id,iddepartamento,matricula,submatricula,idlocalidad,idzona,ncatastral,pinmobiliaria,calle,nrocalle,lote,manzana,superficie,nroplano,anioplano,ecalles,arranque,rumbos,unidad,parcela,supexclu,supcomun,valorpro,planta,destino,idusuario)".
	" VALUES ('$id','$iddepartamento','$matricula',NULLIF('$submatricula',''),'$idlocalidad','$idzona','$ncatastral','$pinmobiliaria','$calle','$nrocalle','$lote','$manzana','$superficie','$nroplano','$anioplano','$ecalles','$arranque','$rumbos','$unidad','$parcela',NULLIF('$supexclu',''),NULLIF('$supcomun',''),NULLIF('$valorpro',''),'$planta','$destino','$idusuario')";
mysqli_query($conn,$sql) or die(mysqli_error($conn));
mysqli_close($conn);
header("Location: abmpropiedades.php");
?>
