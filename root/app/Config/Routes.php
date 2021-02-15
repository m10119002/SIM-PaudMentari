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
$routes->setDefaultController('Launcher');
$routes->setDefaultMethod('start');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

$routes->match(['get', 'post'], 'xyz/new', 'Launcher::adminBaru', ['filter' => 'noadmin:noreturn']);
$routes->match(['get', 'post'], 'login', 'Visitor\Visitor::login', ['filter' => 'visitor']);
$routes->get('home', 'Visitor\Visitor::home', ['filter' => 'visitor']);
$routes->get('infoptk', 'Visitor\InfoPTK\VisitorInfoPTK::index', ['filter' => 'visitor']);
$routes->get('sarpras', 'Visitor\Sarpras\VisitorSarpras::index', ['filter' => 'visitor']);
$routes->get('infomurid', 'Visitor\InfoMurid\VisitorInfoMurid::index', ['filter' => 'visitor']);
$routes->get('pengumuman', 'Visitor\Pengumuman\VisitorPengumuman::index', ['filter' => 'visitor']);
$routes->get('error_404', 'Special\CustomError\Error404::index');
/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Launcher::start');

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
