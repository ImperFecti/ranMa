<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//route to codeigniter welcome message
$routes->get('/codeigniter', 'Home::index');

//home route
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/contact', 'Home::contact');
//laporan route
$routes->get('/laporan', 'Laporan::index');
