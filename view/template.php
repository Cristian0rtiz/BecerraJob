<?php

  include_once 'view/module/head.php';
  include_once 'view/module/header.php';
  include_once 'view/module/menu.php';
  

  if (isset($_GET['ruta'])){ //Si variable ruta existe
    switch ($_GET['ruta']) {
      case 'usuario':
        include_once 'view/module/user.php';
      break;
      case 'erase':
        include_once 'view/module/erase.php';
      break;
      case 'matricula':
        include_once 'view/module/Matricula.php';
      break;
      case 'aprendiz':
        include_once 'view/module/Aprendiz.php';
      break;
      case 'eraseA':
        include_once "view/module/eraseA.php";
        break;
        case 'eraseM':
          include_once "view/module/eraseM.php";
          break;
      default:
        include_once 'view/module/presentation.php';
      break;
    }
  } else {
    include_once 'view/module/presentation.php';
  }
  include_once 'view/module/footer.php';
?> 