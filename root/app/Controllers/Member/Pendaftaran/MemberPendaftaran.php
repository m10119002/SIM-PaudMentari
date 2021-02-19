<?php

namespace App\Controllers\Member\Pendaftaran;
use App\Controllers\Member\Member;

class MemberPendaftaran extends Member
{	
	public function index() {
		return view('Member\Pendaftaran\formulir');
	}
}