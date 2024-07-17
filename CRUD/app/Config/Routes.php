<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/saveUser', 'Home::saveUser');
$routes->post('/getSingleUser/(:num)', 'Home::getSingleUser/$1');