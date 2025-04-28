<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/signup', 'Home::signup');
// $routes->get('/dashboard', 'Home::dashboard');
// $routes->get('/dashboard(:any)', 'Home::dashboardparam/$1');
$routes->get('/adminlogin', 'AdminController::index');
$routes->match(['get', 'post'], '/adminloginsubmit', 'AdminController::adminlloginsubmit');

$routes->get('/adminregister', 'AdminController::register');

$routes->match(['get', 'post'], '/adminstore', 'AdminController::store');

// dashboard
$routes->get('/admindashboard', 'AdminController::dash');
