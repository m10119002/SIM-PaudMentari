<?php

namespace App\Controllers\Visitor\InfoPTK;
use App\Controllers\Visitor\Visitor;

class VisitorInfoPTK extends Visitor
{	
	public function index() {
		return view('Visitor\InfoPTK\infoptk');
	}
}