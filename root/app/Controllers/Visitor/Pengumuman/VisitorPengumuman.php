<?php

namespace App\Controllers\Visitor\Pengumuman;
use App\Controllers\Visitor\Visitor;

class VisitorPengumuman extends Visitor
{	
	public function index() {
		return view('Visitor\Pengumuman\pengumuman');
	}
}