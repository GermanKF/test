<?php
session_start();
          $t=time();
          if (isset($_SESSION['logged']) && ($t - $_SESSION['logged'] >2)) {
            session_destroy();
            session_unset();
            header('location: index.php');
          }else {$_SESSION['logged'] = time();}

#dependiendo que link aprieta del navbar
if (!isset($_SESSION['boton'])):
  $_SESSION['boton'] ="Home";
  echo("primera vez creado");
else:
  if (isset($_GET['boton'])):
    $_SESSION['boton'] = $_GET['boton'];
  else:
    echo("no pasa ningun parametro desde index");
  endif;
endif;


#seleccion de tabla a mostrar
if (!isset($_SESSION['tabla_seleccion'])):
      $_SESSION['tabla_seleccion'] = 1; // store session data
    else:
          if (isset($_GET['tablename'])):
            $_SESSION['tabla_seleccion'] = $_GET['tablename'];
          else:
            echo("no pasa ningun parametro desde index");
          endif;
endif;
