<?php

namespace App\Controllers\Visitor\InfoMurid;
use App\Controllers\Visitor\Visitor;

class VisitorInfoMurid extends Visitor
{	
	public function index() {
		return view('Visitor\InfoMurid\infomurid');
	}
}