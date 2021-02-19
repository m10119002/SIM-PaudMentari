<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Admin extends BaseController
{	
	public function __construct() {
		
	}

	public function logout() {
		session()->remove('username');
		session()->remove('tipeUser');
		return redirect()->route('/');
	}
}