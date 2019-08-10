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

    <h2 class="mb-3 bd-text-purple-bright">Mapa del sitio</h2>

    <div class="row align-items-center">

    <ul>
    <li><a href="index.php">Inicio</a>
      <ul>
      <li><a href="index.php">Institucional</a>
        <ul>
        <li><a href="autoridades.php">Autoridades</a>
        </li>
        <li><a href="ubicacion.php">Ubicaci&oacute;n</a>
        </li>
        </ul>
      </li>
      <li><a href="tramites.php">Tr&aacute;mites</a>
      </li>
      <li><a href="novedades.php">Novedades</a>
      </li>
      <li><a href="contacto.php">Contacto</a>
      </li>
      <li><a href="ciudadano.php">Servicio al ciudadano</a>
      </li>

<?php
//echo $esProfesional;
//echo $esAdministrador;
?>

<?php if ($login&&$esProfesional) { ?>
      <li><a href="profesional.php">Servicio al profesional</a>
        <ul>
        <li><a href="consultapropiedades.php">Consulta de propiedades</a>
        </li>
        <li><a href="consultatitulares.php">Consulta de titulares</a>
        </li>
        </ul>
      </li>
<?php } ?>

<?php if ($login&&$esAdministrador) { ?>
      <li><a href="administrador.php">Men&uacute; del administrador</a>
        <ul>
        <li><a href="abmpropiedades.php">ABM de propiedades</a>
        </li>
        <li><a href="abmusuarios.php">ABM de usuarios</a>
        </li>
        </ul>
      </li>
<?php } ?>
      </ul>
    </li>

<?php if (!$login) { ?>
    <li><a href="login.php">Acceder</a>
    </li>
<?php } ?>

<?php if ($login) { ?>
    <li><a href="logout.php">Salir</a>
    </li>
<?php } ?>

    <li><a href="https://github.com">GitHub</a>
    </li>
    <li><a href="https://twitter.com">Twitter</a>
    </li>
    <li><a href="https://www.facebook.com">Facebook</a>
    </li>
    <li><a href="https://www.instagram.com">Instagram</a>
    </li>
    <li><a href="https://www.youtube.com">Youtube</a>
    </li>
    <li><a href="mapa.php">Mapa del sitio</a>
    </li>
    </ul>      

    </div>

  </div>

</main>

<?php include ('inc/footer.php'); ?>

</body>

</html>
