<?php

namespace App\Controllers\Member;
use App\Controllers\BaseController;

class Member extends BaseController
{	
	public function __construct() {
		helper(['form', 'url']);
	}
	
	public function logout() {
		session()->remove('username');
		session()->remove('tipeUser');
		return redirect()->route('/');
	}
}