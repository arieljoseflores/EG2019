<?php
if (!isset($_SESSION['usuarioId'])) {
	$login=false;
	$etiquetaBoton="Acceder";
	$linkBoton="login.php";
} else {
	$login=true;
	if ($_SESSION['usuarioCategoria']=='1') {
		$tipoUsuario='Profesional';
		$esProfesional=true;
		$esAdministrador=false;
	} else {
		$tipoUsuario='Administrador';
		$esProfesional=false;
		$esAdministrador=true;
	}
	$nombre=$_SESSION['usuarioNombre'];
	$etiquetaBoton="Salir";
	$linkBoton="logout.php";
}
?>

<header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">

<div class="navbar-nav-scroll">
<ul class="navbar-nav bd-navbar-nav flex-row">

<li class="nav-item"><a class="nav-link" href="index.php"><h4 style="color:white;text-decoration:underline">RP</h4></a></li>

<li class="nav-item"><a class="nav-link" href="consultapropiedades.php">Consulta de Propiedades</a></li>

<li class="nav-item"><a class="nav-link" href="consultatitulares.php">Consulta de Titulares</a></li>

</ul>
</div>

<ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">

<?php if ($login) { ?>
<li style="color:white;margin-left:10px" class="nav-item"><?=$tipoUsuario?><br/><?=$nombre?></li>
<?php } ?>

</ul>

<a class="btn btn-bd-download d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3" href="<?=$linkBoton?>"><?=$etiquetaBoton?></a> 

</header>
