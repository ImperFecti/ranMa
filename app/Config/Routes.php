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
$routes->get('/create', 'Laporan::create');
$routes->post('/save', 'Laporan::save');

// admin
$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin, superadmin']);
$routes->get('/tableadmin', 'Admin::tableadmin', ['filter' => 'role:superadmin']);
$routes->get('/tablelaporan', 'Admin::tablelaporan', ['filter' => 'role:admin, superadmin']);
$routes->post('admin/tambahlaporan', 'Admin::tambahlaporan', ['filter' => 'role:admin, superadmin']);
$routes->post('/admin/updatelaporan', 'Admin::updatelaporan', ['filter' => 'role:admin, superadmin']);
$routes->post('admin/deletelaporan', 'Admin::deletelaporan', ['filter' => 'role:admin, superadmin']);
