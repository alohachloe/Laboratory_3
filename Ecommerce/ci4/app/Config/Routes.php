<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/products', 'AdminController::index');
$routes->post('/insert', 'AdminController::insert');
$routes->get('/edit', 'AdminController::edit');
$routes->get('/accounts', 'AdminController::accounts');
$routes->get('/login', 'AdminController::login');
