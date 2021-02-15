<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class VisitorFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->get('tipeUser') == 'admin') {
			return redirect()->route('admin/home');
		} elseif (session()->get('tipeUser') == 'member') {
			return redirect()->route('member/home');
		} else {
			// do nothing
		}
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}