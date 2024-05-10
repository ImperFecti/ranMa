<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//route to codeigniter welcome message
$routes->get('/codeigniter', 'Home::index');
//home route
$routes->get('/', 'Pages::index');
$routes->get('/about', 'Pages::about');
$routes->get('/contact', 'Pages::contact');
//laporan route
$routes->get('/laporan', 'Laporan::index');
