<?php

namespace App\Controllers\Visitor\Sarpras;
use App\Controllers\Visitor\Visitor;

class VisitorSarpras extends Visitor
{	
	public function index() {
		return view('Visitor\Sarpras\sarpras');
	}
}