<?php 

   session_start();
   $location = 'Location: index.php';

   if (isset($_SESSION['usuario'])){
      switch ($_SESSION['usuario']['rol']) {
        case '1':
           $location = 'Location: panel.php';
           break;
        case '2':
           $location = 'Location: vista/ft/index_ft.php';
           break;
        case '3':
           $location = 'Location: vista/psp/index_psp.php';
           break;
        default:
           $location = 'Location: index.php';
       }
   }

   header($location);
?>