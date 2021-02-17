<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Admin extends BaseController
{	
	public function __construct() {
		helper(['form', 'url']);
	}
}