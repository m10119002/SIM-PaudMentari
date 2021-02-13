<?php

namespace App\Controllers;

class Error extends BaseController
{
	public function error_404() {
		return view('errors\html\error_404');
	}
}
?>