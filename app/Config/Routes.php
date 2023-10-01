<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/main', 'Home::index');
$routes->get('/', 'UserController::index');

$routes->get('/fPass', 'AdminController::fPass');
$routes->get('/signup', 'UserController::signup');
//adminlte
$routes->get('/AdminPage', 'AdminController::AdminPage');
$routes->get('/tables', 'AdminController::tables');
$routes->get('/tables/(:any)', 'AdminController::tables/$1');

$routes->get('/insert', 'AdminController::insert');
$routes->post('/save', 'AdminController::save/$id');
$routes->get('/delete/(:any)', 'AdminController::delete/$1');
$routes->get('/edit/(:any)', 'AdminController::edit/$1');

//user
$routes->get('/about', 'UserController::about');
$routes->get('/contact', 'UserController::contact');
$routes->get('/shop', 'UserController::shop');
$routes->get('/vegetables', 'UserController::vegetables');
$routes->get('/prod1', 'UserController::prod1');
$routes->get('/prod2', 'UserController::prod2');
$routes->get('/prod3', 'UserController::prod3');
$routes->get('/prod4', 'UserController::prod4');
$routes->get('/prod5', 'UserController::prod5');
