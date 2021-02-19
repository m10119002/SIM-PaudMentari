<?php

namespace App\Controllers\Member\Home;
use App\Controllers\Member\Member;

class MemberHome extends Member
{	
	public function __construct() {
		helper(['form', 'url']);
	}
	
	public function index() {
		$profsekModel = model('App\Models\Member\MemberProfSekModel');
		
		$viewData = [
			'loadForm' => $profsekModel->first()
		];
		
		return view('Member\Home\index', $viewData);
	}
}