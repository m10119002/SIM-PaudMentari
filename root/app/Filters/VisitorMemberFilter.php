<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class VisitorMemberFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->get('tipeUser') == 'admin') {
			return redirect()->route('admin/home');
		} elseif (session()->get('tipeUser') == 'member') {
			// do nothing
		} else {
			// do nothing
		}
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}