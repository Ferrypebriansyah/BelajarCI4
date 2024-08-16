<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Views::index');
$routes->get('/home', 'Views::index');
$routes->get('/index', 'Views::index');
$routes->get('/beranda', 'Views::index');
$routes->get('/datamahasiswa', 'Views::datamhs');
$routes->get('/tentangmahasiswa', 'Views::ttgmhs');
$routes->get('/infokampus', 'Views::infkampus');