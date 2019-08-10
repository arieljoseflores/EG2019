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
        <h2 class="mb-3 bd-text-purple-bright">Ubicaci&oacute;n</h2><br/>
        <p class="lead">Direcci&oacute;n:<br/>Av. Argentina 1172 - Rosario - C.P. 2000</p>
        <p class="lead">Tel&eacute;fonos:<br/>Conmutador: (0341) 472-1234</p>
        <p class="lead">Correo electr&oacute;nico:<br/><a href="mailto:rp@santafe.gob.ar">rp@santafe.gob.ar</a></p>
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
