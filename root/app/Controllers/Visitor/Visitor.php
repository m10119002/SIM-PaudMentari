<?php

namespace App\Controllers\Visitor;
use App\Controllers\BaseController;

class Visitor extends BaseController
{	
	public function __construct() {
		helper(['form', 'url']);
	}

	public function login() {
		if ($this->request->getMethod() == 'post') {
			$cekManual = \Config\Services::validation();
			$formData = [
				'username' => $this->request->getPost('user'),
				'password' => $this->request->getPost('pass')
			];
			
			if (!$cekManual->run($formData, 'login')) {
				$viewData = [
					'loadForm' => $formData,
					'validation' => $cekManual->getErrors()
				];
				return view('Visitor\login', $viewData);
			}
			
			$akunModel = model('App\Models\Akun\AkunModel');
			
			$result = $akunModel->find($formData['username']);
			
			if (empty($result)) {
				$viewData = [
					'loadForm' => $formData,
					'formMessage' => 'Username belum terdaftar!'
				];
				return view('Visitor\login', $viewData);
			}
			
			if (password_verify($formData['password'], $result['password'])) {
				if ($result['is_admin']) {
					session()->set('user_id', $result['username']);
					session()->set('tipeUser', 'admin');
					return redirect()->route('admin/home');
				} else {
					session()->set('user_id', $result['username']);
					session()->set('tipeUser', 'member');
					return redirect()->route('member/home');
				}
			} else {
				$viewData = [
					'loadForm' => $formData,
					'formMessage' => 'Salah password!'
				];
				return view('Visitor\login', $viewData);
			}
		} else {
			if (session()->get('formMessage') !== NULL) {
				$msg = session()->get('formMessage');
				$viewData = ['formMessage' => $msg];
				return view('Visitor\login', $viewData);
			} else {
				return view('Visitor\login');
			}
		}
	}
	
	public function register() {
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
				return view('Visitor\register', $viewData);
			}
			
			$akunTambahModel = model('App\Models\Akun\AkunTambahModel');
			$data = [
				'username' => $formData['user'],
				'password' => password_hash($formData['pass'], PASSWORD_DEFAULT)
			];
			
			if ($akunTambahModel->insert($data) === false) {
				$viewData = [
					'loadForm' => $formData,
					'validation' => $cekManual->getErrors()
				];
				return view('Visitor\register', $viewData);
			} else {
				session()->setFlashdata('formMessage', 'Berhasil mendaftar! silahkan masuk menggunakan username dan password yang telah didaftarkan!');
				return redirect()->route('login');
			}
		} else {
			return view('Visitor\register');
		}
	}
	
	public function home() {
		return view('Visitor\index');
	}
}
