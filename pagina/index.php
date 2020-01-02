<?php
  include 'includes/session.inc.php';
  include 'includes/class-autoload.inc.php';
  include 'includes/header.inc.php';
  include 'includes/body.inc.php';
  include 'includes/footer.inc.php';
  if(!isset($_SESSION['tabla'])):
    echo("no hay tabla");
  else:
    echo("--->Conectado en sesion<-----");?> <br>
    <?php
  endif;
  echo("--->boton apretado:".$_SESSION['boton']."<----");
?><br>
