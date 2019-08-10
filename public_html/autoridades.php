<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

<?php include ('inc/cabecera.php'); ?>

</head>   

<body>

<?php include 'inc/menu.php'; ?>

<main class="bd-masthead" id="content" role="main">

  <div class="container">

    <div class="row align-items-center">

      <div class="col-md-6 order-md-1 text-center text-md-left pr-md-5">
        <h2 class="mb-3 bd-text-purple-bright">Autoridades</h2>
        <p class="lead">Esc. Mar&iacute;a P&eacute;rez<br/>Directora General.</p>
        <p class="lead">Esc. Juan Jos&eacute; Gonzalez<br/>Subdirector General.</p>
        <p class="lead">Dr. Jose Garc&iacute;a<br/>Coordinador Tecnico-Registral.</p>
        <p class="lead">Dr. Carlos Garc&iacute;a<br/>Coordinador Registraciones Reales.</p>
        <p class="lead">Dra. Juana Jim&eacute;nez<br/>Coordinadora Publicidad Registral.</p>
        <p class="lead">Dra. Marta S&aacute;nchez<br/>Jefa de Presentaciones y Salidas.</p>
      </div>
      
      <div class="col-6 mx-auto col-md-6 order-md-2">
	<img src="img/mapa.jpg" width=490 height=450 style="margin:auto;display:block">
      </div>

    </div>

  </div>

</main>

<?php include ('inc/footer.php'); ?>

</body>

</html>
