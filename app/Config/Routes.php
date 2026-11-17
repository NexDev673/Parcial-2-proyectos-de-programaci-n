<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('clientes', 'Clientes::index');

$routes->get('clientes/crear', 'Clientes::crear');
$routes->post('clientes/guardar', 'Clientes::guardar');

$routes->get('clientes/editar/(:num)', 'Clientes::editar/$1');
$routes->post('clientes/actualizar/(:num)', 'Clientes::actualizar/$1');

$routes->post('clientes/eliminar/(:num)', 'Clientes::eliminar/$1');

