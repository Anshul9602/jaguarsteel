<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/ourstory', 'Ourstory::index');
$routes->get('/services', 'Services::index');
$routes->get('/csr', 'Csr::index');
$routes->get('/ferrous', 'Ferrous::index');

$routes->get('/privacy', 'Privacy::index');
$routes->get('/terms', 'Terms::index');


$routes->get('/contact', 'Contact::index');
$routes->get('/career', 'Career::index');



