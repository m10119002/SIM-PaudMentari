<?php

namespace App\Controllers\Member\Pengumuman;
use App\Controllers\Member\Member;

class MemberPengumuman extends Member
{	
	public function __construct() {
		helper(['form', 'url']);
	}
	
	public function index() {
		$pengumumanModel = model('App\Models\Member\Pengumuman\MemberPengumumanModel');
		
		$viewData = [
			'loadTable' => $pengumumanModel->findAll()
		];
		
		return view('Member\Pengumuman\pengumuman', $viewData);
	}
}