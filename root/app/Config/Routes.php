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
$routes->get('home', 'Visitor\Visitor::home', ['filter' => 'visitor']);
$routes->get('error_404', 'Special\CustomError\Error404::index');
$routes->group('member', function($routes) {
	$routes->get('/', 'Member\Member::home', ['filter' => 'member']);
	
	$routes->get('home', 'Member\Home\MemberHome::index', ['filter' => 'member']);
	$routes->group('pendaftaran', function($routes) {
		$routes->get('/', 'Member\Pendaftaran\MemberPendaftaran::index', ['filter' => 'member']);
		$routes->get('daftar', 'Member\Pendaftaran\MemberPendaftaran::daftar', ['filter' => 'member']);
		$routes->get('formulir', 'Member\Pendaftaran\MemberPendaftaran::formulir', ['filter' => 'memberForm']);
		$routes->match(['get', 'post'], 'formulir/ubah', 'Member\Pendaftaran\MemberPendaftaran::ubah', ['filter' => 'memberForm']);
	});
	
	$routes->get('infoptk', 'Member\InfoPTK\MemberInfoPTK::index', ['filter' => 'member']);
	$routes->get('sarpras', 'Member\Sarpras\MemberSarpras::index', ['filter' => 'member']);
	
	$routes->group('infomurid', function($routes) {
		$routes->get('', 'Member\InfoMurid\MemberInfoMurid::index', ['filter' => 'member']);
		$routes->get('(:num)', 'Member\InfoMurid\MemberInfoMurid::index/$1', ['filter' => 'member']);
	});
	
	$routes->get('pengumuman', 'Member\Pengumuman\MemberPengumuman::index', ['filter' => 'member']);
	
	$routes->get('logout', 'Member\Member::logout', ['filter' => 'member']);
});
$routes->group('admin', function($routes) {
	$routes->get('/', 'Admin\Home\AdminHome::index', ['filter' => 'admin']);
	
	$routes->group('home', function($routes) {
		$routes->get('/', 'Admin\Home\AdminHome::index', ['filter' => 'admin']);
		$routes->match(['get', 'post'], 'edit', 'Admin\Home\AdminHome::edit', ['filter' => 'admin']);
	});
	
	$routes->group('infoptk', function($routes) {
		$routes->get('/', 'Admin\InfoPTK\AdminInfoPTK::index', ['filter' => 'admin']);
		$routes->match(['get', 'post'], 'tambah', 'Admin\InfoPTK\AdminInfoPTK::tambah', ['filter' => 'admin']);
		$routes->match(['get', 'post'], 'edit', 'Admin\InfoPTK\AdminInfoPTK::edit', ['filter' => 'admin']);
		$routes->get('hapus', 'Admin\InfoPTK\AdminInfoPTK::hapus', ['filter' => 'admin']);
	});
	
	$routes->group('sarpras', function($routes) {
		$routes->get('/', 'Admin\Sarpras\AdminSarpras::index', ['filter' => 'admin']);
		$routes->group('sarana', function($routes) {
			$routes->match(['get', 'post'], 'tambah', 'Admin\Sarpras\AdminSarana::tambah', ['filter' => 'admin']);
			$routes->match(['get', 'post'], 'edit', 'Admin\Sarpras\AdminSarana::edit', ['filter' => 'admin']);
			$routes->get('hapus', 'Admin\Sarpras\AdminSarana::hapus', ['filter' => 'admin']);
		});
		$routes->group('prasarana', function($routes) {
			$routes->match(['get', 'post'], 'tambah', 'Admin\Sarpras\AdminPrasarana::tambah', ['filter' => 'admin']);
			$routes->match(['get', 'post'], 'edit', 'Admin\Sarpras\AdminPrasarana::edit', ['filter' => 'admin']);
			$routes->get('hapus', 'Admin\Sarpras\AdminPrasarana::hapus', ['filter' => 'admin']);
		});
	});
	
	$routes->group('infomurid', function($routes) {
		$routes->get('', 'Admin\InfoMurid\AdminInfoMurid::index', ['filter' => 'admin']);
		$routes->get('(:num)', 'Admin\InfoMurid\AdminInfoMurid::index/$1', ['filter' => 'admin']);
		$routes->match(['get', 'post'], 'tambah', 'Admin\InfoMurid\AdminInfoMurid::tambah/$1', ['filter' => 'admin']);
		$routes->match(['get', 'post'], 'edit', 'Admin\InfoMurid\AdminInfoMurid::edit/$1', ['filter' => 'admin']);
		$routes->get('hapus', 'Admin\InfoMurid\AdminInfoMurid::hapus', ['filter' => 'admin']);
	});
	
	$routes->group('pengumuman', function($routes) {
		$routes->get('/', 'Admin\Pengumuman\AdminPengumuman::index', ['filter' => 'admin']);
		$routes->match(['get', 'post'], 'tambah', 'Admin\Pengumuman\AdminPengumuman::tambah', ['filter' => 'admin']);
		$routes->match(['get', 'post'], 'edit', 'Admin\Pengumuman\AdminPengumuman::edit', ['filter' => 'admin']);
		$routes->get('hapus', 'Admin\Pengumuman\AdminPengumuman::hapus', ['filter' => 'admin']);
	});
	
	$routes->group('pendaftaran', function($routes) {
		$routes->get('/', 'Admin\Pendaftaran\AdminPendaftaran::index', ['filter' => 'admin']);
		
		$routes->get('pendaftar', 'Admin\Pendaftaran\AdminPendaftaran::pendaftar', ['filter' => 'admin']);
		
		$routes->group('formulir', function($routes) {
			$routes->get('/', 'Admin\Pendaftaran\Formulir\AdminFormulir::index', ['filter' => 'admin']);
			$routes->get('lihat', 'Admin\Pendaftaran\Formulir\AdminFormulir::lihat', ['filter' => 'admin']);
			$routes->get('ganti', 'Admin\Pendaftaran\Formulir\AdminFormulir::ganti', ['filter' => 'admin']);
			$routes->get('hapus', 'Admin\Pendaftaran\Formulir\AdminFormulir::hapus', ['filter' => 'admin']);
		});
		
		$routes->group('akun', function($routes) {
			$routes->get('/', 'Admin\Pendaftaran\Akun\AdminAkun::index', ['filter' => 'admin']);
			$routes->match(['get', 'post'], 'tambah', 'Admin\Pendaftaran\Akun\AdminAkun::tambah', ['filter' => 'admin']);
			$routes->match(['get', 'post'], 'ubahpass', 'Admin\Pendaftaran\Akun\AdminAkun::ubahpass', ['filter' => 'admin']);
			$routes->get('hapus', 'Admin\Pendaftaran\Akun\AdminAkun::hapus', ['filter' => 'admin']);
		});
	});
	
	$routes->get('logout', 'Admin\Admin::logout', ['filter' => 'admin']);
});
//$routes->match(['get', 'post'], '(.*)', 'Special\CustomError\Error404::index');
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
