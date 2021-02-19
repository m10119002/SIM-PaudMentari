<?php

namespace App\Controllers\Admin\InfoMurid;
use App\Controllers\Admin\Admin;

class AdminInfoMurid extends Admin
{	
	public function index() {
		return view('Admin\InfoMurid\infomurid');
	}
}