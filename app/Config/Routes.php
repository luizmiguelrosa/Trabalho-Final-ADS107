<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/(:any)/(:any)', 'Home::interno/$1/$2');
$routes->get('/(:any)', 'Home::bloco/$1');