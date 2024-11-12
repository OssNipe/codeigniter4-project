<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/form', 'FormController::index', ['filter' => 'session']);

$routes->post('form/submit', 'FormController::submit');
$routes->get('/student/create', 'StudentController::create', ['filter' => 'session']);
$routes->post('/student/store', 'StudentController::store', ['filter' => 'session']);
$routes->get('/students/manage', 'StudentController::manageMembers', ['filter' => 'session']);


service('auth')->routes($routes);


