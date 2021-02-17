<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Launcher extends BaseController
{	
	public function __construct() {
		helper(['form', 'url']);
	}

	public function start()
	{			
		if (session()->get('no-admin') == NULL) {
			if (session()->get('attempt') === true) {
				return redirect()->route('error_404');
			} else {
				return redirect()->route('login');
			}
		} else if (session()->get('no-admin') === true) {
			return redirect()->route('xyz/new');
		} else {
			return redirect()->route('error_404');
		}
	}
	
	public function adminBaru()
	{
		if ($this->request->getMethod() == 'post') {
			$cekManual = \Config\Services::validation();
			$formData = [
				'user' => $this->request->getPost('user'),
				'pass' => $this->request->getPost('pass'),
				'pass_ulang' => $this->request->getPost('pass_ulang')
			];
			
			if (!$cekManual->run($formData, 'akun')) {
				$viewData = [
					'loadForm' => $formData,
					'validation' => $cekManual->getErrors()
				];
				return view('Special\register_admin', $viewData);
			}
			
			$akunGodModel = model('App\Models\Akun\AkunGodModel');
			$data = [
				'username' => $formData['user'],
				'password' => password_hash($formData['pass'], PASSWORD_DEFAULT),
				'is_admin' => 1
			];
			
			if ($akunGodModel->insert($data) === false) {
				$viewData = [
					'loadForm' => $formData,
					'validation' => $akunGodModel->errors()
				];
				return view('Special\register_admin', $viewData);
			} else {
				session()->remove('no-admin');
				return redirect()->route('login');
			}
		} else {
			return view('Special\register_admin');
		}
	}
}
