<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Views::index');
$routes->get('/home', 'Views::index');
$routes->get('/index', 'Views::index');
$routes->get('/beranda', 'Views::index');
$routes->get('/allhalal', 'Views::allmen');
$routes->get('/halalfood', 'Views::hllfood');
$routes->get('/halaldrink', 'Views::hlldrink');
$routes->get('/addon', 'Views::addon');
$routes->get('/menumanagement', 'Views::magmenu');
$routes->get('/transaction', 'Views::trans');
$routes->get('/settings', 'Views::setmenu');
