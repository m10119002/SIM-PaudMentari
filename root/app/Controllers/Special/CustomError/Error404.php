<?php

namespace App\Controllers\Special\CustomError;
use App\Controllers\BaseController;

class Error404 extends BaseController
{
	public function index()
	{
		return view('errors\html\error_404');
	}
}
