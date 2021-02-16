<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class NoAdminFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
		$noreturn = false;
		if ($arguments !== null) {
			foreach ($arguments as $arg) {
				$noreturn = ($arg == 'noreturn'? true : false);
			}
		}
		
        if (session()->get('no-admin') == 'ya') {
			if (!$noreturn) {
				return redirect()->route('xyz/new');
			}
		} else {
			if ($noreturn) {
				session()->setFlashdata('attempt', true);
				return redirect()->route('/');
			}
		}
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}