<?php

namespace TagPlugin\Config;

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('/', ['namespace' => 'TagPlugin\Controllers'], function($routes) {
    $routes->get('tags', 'TagsController::index');
});
