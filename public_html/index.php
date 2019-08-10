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
        <h2 class="mb-3 bd-text-purple-bright">Registro de la Propiedad</h2>
        <p class="lead">
El Registro General de la Propiedad Inmueble garantiza la seguridad jur&iacute;dica en tanto se refiere a la registraci&oacute;n y publicidad de derechos inmobiliarios de los ciudadanos.
        </p>
        <p class="lead mb-4">
Tiene competencia respecto de los inmuebles ubicados en la segunda circunscripci&oacute;n del territorio de la provincia de Santa Fe.
        </p>
        <br/>
        <br/>
        <div class="row mx-n2">
          <div class="col-md px-2">
            <a href="autoridades.php" class="btn btn-lg btn-bd-primary w-100 mb-3" onclick="ga('send', 'event', 'Jumbotron actions', '', '');">Autoridades</a>
          </div>
          <div class="col-md px-2">
            <a href="ubicacion.php" class="btn btn-lg btn-bd-primary w-100 mb-3" onclick="ga('send', 'event', 'Jumbotron actions', '', '');">Ubicaci&oacute;n</a>
          </div>
        </div>
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
