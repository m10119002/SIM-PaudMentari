<?php

namespace App\Controllers\Admin\Sarpras;
use App\Controllers\Admin\Admin;

class AdminSarpras extends Admin
{	
	public function __construct() {
		
	}

	public function index() {
		$saranaModel = model('App\Models\Admin\Sarpras\Sarana\AdminSaranaModel');
		$prasaranaModel = model('App\Models\Admin\Sarpras\Prasarana\AdminPrasaranaModel');
		
		$viewData = [
			'loadTable1' => $saranaModel->findAll(),
			'loadTable2' => $prasaranaModel->findAll()
		];
		
		return view('Admin\Sarpras\sarpras', $viewData);
	}
}