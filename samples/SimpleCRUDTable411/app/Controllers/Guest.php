<?php

namespace App\Controllers;

class Guest extends BaseController
{
	/**
	 * Pengunjung, tidak ada session user / user tidak login
	 * 
	 */
	public function index()
	{
		return redirect()->to('list');
	}
}
