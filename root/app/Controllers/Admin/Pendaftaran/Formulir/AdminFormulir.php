<?php

namespace App\Controllers\Admin\Pendaftaran\Formulir;
use App\Controllers\Admin\Pendaftaran\AdminPendaftaran;

class AdminFormulir extends AdminPendaftaran
{	
	public function __construct() {
		helper(['form', 'url']);
	}

	public function index() {
		return view('Admin\Pendaftaran\index');
	}
	
	public function lihat() {
		
	}
}