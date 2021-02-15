<?php

namespace App\Controllers\Special\Kickstart;
use App\Controllers\BaseController;

class Kickstarter extends BaseController
{
	public function index()
	{
		$data = [
			
		];
		
		return view('Special\Kickstart\register_admin', $data);
	}
}
