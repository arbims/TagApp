<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/posts', 'PostsController::index');
$routes->match(['get', 'post'],'/posts/add', 'PostsController::add');
$routes->match(['get', 'post','put'],'/posts/edit/(:num)', 'PostsController::edit/$1');
$routes->get('/posts/delete/(:num)', 'PostsController::delete/$1');