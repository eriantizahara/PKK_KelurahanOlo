<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

$routes->get('/', 'Layout::index');
$routes->get('layanan', 'Layout::layanan');
$routes->get('kontak', 'Layout::kontak');

$routes->get('pkk/profile', 'Pkk::profile');
$routes->get('pkk/visi-misi', 'Pkk::visiMisi');
$routes->get('pkk/struktur-organisasi', 'Pkk::strukturOrganisasi');
$routes->get('pkk/pokja1', 'Pkk::pokja1');
$routes->get('pkk/pokja2', 'Pkk::pokja2');
$routes->get('pkk/pokja3', 'Pkk::pokja3');
$routes->get('pkk/pokja4', 'Pkk::pokja4');



$routes->get('profile/umum', 'Profile::umum');
$routes->get('profile/visi-misi', 'Profile::visiMisi');
$routes->get('profile/struktur', 'Profile::struktur');

