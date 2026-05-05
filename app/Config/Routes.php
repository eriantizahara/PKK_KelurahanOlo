<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

$routes->get('/', 'Layout::index');
$routes->get('pkk/profile', 'Pkk::profile');
$routes->get('pkk/visi-misi', 'Pkk::visiMisi');
$routes->get('pkk/struktur-organisasi', 'Pkk::strukturOrganisasi');


