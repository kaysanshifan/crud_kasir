<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/barang', 'BarangController::index');
$routes->get('/barang/create', 'BarangController::create');
$routes->post('/barang/store', 'BarangController::store');
$routes->get('/barang/edit/(:num)', 'BarangController::edit/$1');
$routes->post('/barang/update/(:num)', 'BarangController::update/$1');
$routes->post('/barang/delete/(:num)', 'BarangController::delete/$1');
