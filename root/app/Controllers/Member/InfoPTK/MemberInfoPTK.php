<?php

namespace App\Controllers\Member\InfoPTK;
use App\Controllers\Member\Member;

class MemberInfoPTK extends Member
{	
	public function __construct() {
		helper(['form', 'url']);
	}
	
	public function index() {
		$infoptkModel = model('App\Models\Member\InfoPTK\MemberInfoPTKModel');
		
		$viewData = [
			'loadTable' => $infoptkModel->findAll()
		];
		
		return view('Member\InfoPTK\infoptk', $viewData);
	}
}