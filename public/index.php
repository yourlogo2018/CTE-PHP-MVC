<?php
//**Inicia uma sessao */
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
  }
require '../vendor/autoload.php';
require '../src/routes.php';

use core\Alerts;


$router->run( $router->routes );


