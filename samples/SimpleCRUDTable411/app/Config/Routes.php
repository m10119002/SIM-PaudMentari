<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Guest');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

// Custom Routes
$routes->add('list', 'Guest\TabelMahasiswa\GuestMahasiswa::index');
$routes->add('tambah', 'Guest\TabelMahasiswa\GuestMHSTambah::index');
$routes->add('tambah/proses', 'Guest\TabelMahasiswa\GuestMHSTambah::proses');
$routes->add('edit', 'Guest\TabelMahasiswa\GuestMHSEdit::index');
$routes->add('edit/proses', 'Guest\TabelMahasiswa\GuestMHSEdit::proses');
$routes->add('hapus', 'Guest\TabelMahasiswa\GuestMHSHapus::index');
$routes->add('error_404', 'Error::error_404');

// akhir Routes
// $routes->add('(.*)', 'Error::error_404');

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Guest::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
