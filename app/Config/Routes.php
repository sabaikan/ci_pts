<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'NasiBekepor::index');
$routes->get('nasi-bekepor', 'NasiBekepor::index');

// Halaman Detail
$routes->get('makanan/detail/(:num)', 'NasiBekepor::detail/$1');
$routes->get('detail/(:num)', 'NasiBekepor::detail/$1');

// CRUD Routes
$routes->post('makanan/store', 'NasiBekepor::store');
$routes->post('makanan/update/(:num)', 'NasiBekepor::update/$1');
$routes->get('makanan/delete/(:num)', 'NasiBekepor::delete/$1');
$routes->post('makanan/delete/(:num)', 'NasiBekepor::delete/$1');
