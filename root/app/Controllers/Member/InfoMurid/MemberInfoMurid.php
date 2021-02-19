<?php

namespace App\Controllers\Member\InfoMurid;
use App\Controllers\Member\Member;

class MemberInfoMurid extends Member
{	
	public function index() {
		return view('Member\InfoMurid\infomurid');
	}
}