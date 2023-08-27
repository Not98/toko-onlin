<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/barang', 'Barang::index');
$routes->post('/barang/add', 'Barang::addBarang');
$routes->post('/barang/kategoriAdd', 'Barang::kategoriAdd');
$routes->post('/barang/kategoriUpdate', 'Barang::kategoriUpdate');
