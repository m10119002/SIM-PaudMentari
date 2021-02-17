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
$routes->match(['get', 'post'], 'register', 'Visitor\Visitor::register', ['filter' => 'visitor']);
$routes->get('home', 'Visitor\Visitor::home', ['filter' => 'v_mem']);
$routes->get('infoptk', 'Visitor\InfoPTK\VisitorInfoPTK::index', ['filter' => 'v_mem']);
$routes->get('sarpras', 'Visitor\Sarpras\VisitorSarpras::index', ['filter' => 'v_mem']);
$routes->get('infomurid', 'Visitor\InfoMurid\VisitorInfoMurid::index', ['filter' => 'v_mem']);
$routes->get('pengumuman', 'Visitor\Pengumuman\VisitorPengumuman::index', ['filter' => 'v_mem']);
$routes->get('error_404', 'Special\CustomError\Error404::index');
$routes->group('member', function($routes) {
	$routes->get('home', 'Member\Member::home', ['filter' => 'member']);
	$routes->get('pendaftaran', 'Member\Member::pendaftaran', ['filter' => 'member']);
	$routes->get('logout', 'Member\Member::logout', ['filter' => 'member']);
});
$routes->group('admin', function($routes) {
	$routes->get('home', 'Admin\Admin::home', ['filter' => 'admin']);
	$routes->get('logout', 'Admin\Admin::logout', ['filter' => 'admin']);
});
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
