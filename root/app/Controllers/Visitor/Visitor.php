<?php

namespace App\Controllers\Visitor;
use App\Controllers\BaseController;

class Visitor extends BaseController
{	
	public function login() {
		return view('Visitor\login');
	}
	
	public function home() {
		return view('Visitor\index');
	}
}
