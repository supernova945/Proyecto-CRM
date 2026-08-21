<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/', 'LoginController::index');
$routes->get('login', 'LoginController::index');
$routes->get('recuperar-contrasena', 'LoginController::recuperar');

$routes->get('usuarios', 'UsuarioController::index');
$routes->get('usuarios/nuevo', 'UsuarioController::crear');

$routes->get(
    'cerrar-sesion',
    'LoginController::cerrarSesionTemporal'
);

