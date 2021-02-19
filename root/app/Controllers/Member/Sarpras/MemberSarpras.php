<?php

namespace App\Controllers\Member\Sarpras;
use App\Controllers\Member\Member;

class MemberSarpras extends Member
{	
	public function __construct() {
		
	}

	public function index() {
		$saranaModel = model('App\Models\Member\Sarpras\Sarana\MemberSaranaModel');
		$prasaranaModel = model('App\Models\Member\Sarpras\Prasarana\MemberPrasaranaModel');
		
		$viewData = [
			'loadTable1' => $saranaModel->findAll(),
			'loadTable2' => $prasaranaModel->findAll()
		];
		
		return view('Member\Sarpras\sarpras', $viewData);
	}
}