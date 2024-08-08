<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// home route
$routes->get('/', 'Home::index');
$routes->get('/contact', 'Home::contact');

// laporan route
$routes->get('/laporan', 'Laporan::index');

// superadmin
$routes->post('admin/tambahadmin', 'Admin::tambahadmin', ['filter' => 'role:superadmin']);
$routes->post('admin/updateadmin/(:num)', 'Admin::updateadmin/$1', ['filter' => 'role:superadmin']);
$routes->post('admin/deleteadmin', 'Admin::deleteadmin', ['filter' => 'role:superadmin']);

// superadmin and admin can access
$routes->get('/ubahpassword', 'Admin::ubahpassword', ['filter' => 'role:admin, superadmin']);
$routes->post('/updatepassword/(:num)', 'Admin::updatepassword/$1', ['filter' => 'role:admin, superadmin']);

// admin
$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin, superadmin']);
$routes->get('/tableadmin', 'Admin::tableadmin', ['filter' => 'role:superadmin']);
$routes->get('/tablelaporan', 'Admin::tablelaporan', ['filter' => 'role:admin, superadmin']);
$routes->post('admin/tambahlaporan', 'Admin::tambahlaporan', ['filter' => 'role:admin, superadmin']);
$routes->post('/admin/updatelaporan', 'Admin::updatelaporan', ['filter' => 'role:admin, superadmin']);
$routes->post('admin/deletelaporan', 'Admin::deletelaporan', ['filter' => 'role:admin, superadmin']);
