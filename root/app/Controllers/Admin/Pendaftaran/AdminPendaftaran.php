<?php

namespace App\Controllers\Admin\Pendaftaran;
use App\Controllers\Admin\Admin;

class AdminPendaftaran extends Admin
{	
	public function __construct() {
		
	}

	public function index() {
		return view('Admin\Pendaftaran\index');
	}
}