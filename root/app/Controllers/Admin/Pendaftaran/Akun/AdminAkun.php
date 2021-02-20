<?php

namespace App\Controllers\Admin\Pendaftaran\Akun;
use App\Controllers\Admin\Pendaftaran\AdminPendaftaran;

class AdminAkun extends AdminPendaftaran
{	
	public function __construct() {
		helper(['form', 'url']);
	}

	public function index() {
		$db      = \Config\Database::connect();
		$builder = $db->table('akun');
			
		$builder->select('username, is_admin');
		$builder->orderBy('username', 'ASC');
		
		$loadTable = $builder->get()->getResultArray();
		
		$viewData = [
			'loadTable' => $loadTable,
			'formMessage' => session()->get('formMessage')
		];
		
		return view('Admin\Pendaftaran\Akun\akun', $viewData);
	}
	
	public function tambah() {
		if ($this->request->getMethod() == 'post') {
			$cekManual = \Config\Services::validation();
			$cekData = [
				'user' => $this->request->getPost('user'),
				'pass' => $this->request->getPost('pass'),
				'pass_ulang' => $this->request->getPost('pass_ulang')
			];
			
			$formData = [
				'user' => $cekData['user'],
				'pass' => $cekData['pass'],
				'pass_ulang' => $cekData['pass_ulang'],
				'admin' => $this->request->getPost('admin')
			];
			
			if (!$cekManual->run($cekData, 'akun')) {
				$viewData = [
					'loadForm' => $formData,
					'validation' => $cekManual->getErrors()
				];
				return view('Admin\Pendaftaran\Akun\tambah_akun', $viewData);
			}
			
			if (($this->request->getPost('admin') !== NULL) && ($this->request->getPost('admin')[0] == 1)) {
				$akunGodModel = model('App\Models\Akun\AkunGodModel');
				$data = [
					'username' => $formData['user'],
					'password' => password_hash($formData['pass'], PASSWORD_DEFAULT),
					'is_admin' => 1
				];
				
				if ($akunGodModel->insert($data) === false) {
					$viewData = [
						'loadForm' => $formData,
						'validation' => [
							'user' => $akunGodModel->getError('username'),
							'pass' => $akunGodModel->getError('password')
						],
					];
					return view('Admin\Pendaftaran\Akun\tambah_akun', $viewData);
				} else {
					session()->setFlashdata('formMessage', 'Berhasil mendaftarkan akun "'.$formData['user'].'" !');
					return redirect()->route('admin/pendaftaran/akun');
				}
			} else {
				$akunTambahModel = model('App\Models\Akun\AkunTambahModel');
				$data = [
					'username' => $formData['user'],
					'password' => password_hash($formData['pass'], PASSWORD_DEFAULT)
				];
			
				if ($akunTambahModel->insert($data) === false) {
					$viewData = [
						'loadForm' => $formData,
						'validation' => [
							'user' => $akunTambahModel->getError('username'),
							'pass' => $akunTambahModel->getError('password')
						],
					];
					return view('Admin\Pendaftaran\Akun\tambah_akun', $viewData);
				} else {
					session()->setFlashdata('formMessage', 'Berhasil mendaftarkan akun "'.$formData['user'].'" !');
					return redirect()->route('admin/pendaftaran/akun');
				}
			}
		} else {
			return view('Admin\Pendaftaran\Akun\tambah_akun');
		}
	}
	
	public function ubahpass() {
		if ($this->request->getMethod() == 'post') {
			$user_id = $this->request->getPost('user');
			if ($user_id == session()->get('user_id')) {
				return redirect()->route('admin/pendaftaran/akun');
			} else {
				$akunModel = model('App\Models\Akun\AkunModel');
				
				$result = $akunModel->find($user_id);
				
				if (empty($result) || !isset($result['is_admin'])) {
					return redirect()->route('admin/pendaftaran/akun');
				} else {
					if ($result['is_admin']) {
						return redirect()->route('admin/pendaftaran/akun');
					} else {
						$cekManual = \Config\Services::validation();
						
						$cekData = [
							'pass' => $this->request->getPost('pass'),
							'pass_ulang' => $this->request->getPost('pass_ulang')
						];
						
						if (!$cekManual->run($cekData, 'ubahpass')) {
							$viewData = [
								'loadForm' => [
									'user' => $user_id,
									'pass' => $cekData['pass'],
									'pass_ulang' => $cekData['pass_ulang']
								],
								'validation' => $cekManual->getErrors()
							];
							return view('Admin\Pendaftaran\Akun\ubahpass_akun', $viewData);
						}
						
						$akunPassModel = model('App\Models\Akun\AkunPassModel');
						
						$data = [
							'password' => PASSWORD_HASH($cekData['pass'], PASSWORD_DEFAULT)
						];
						
						if ($akunPassModel->update($user_id, $data) === false) {
							$viewData = [
								'loadForm' => [
									'user' => $user_id,
									'pass' => $cekData['pass'],
									'pass_ulang' => $cekData['pass_ulang']
								],
								'validation' => $akunPassModel->errors()
							];
							return view('Admin\Pendaftaran\Akun\ubahpass_akun', $viewData);
						} else {
							session()->setFlashdata('formMessage', 'Sukses menggantikan password untuk akun "'.$user_id.'" !');
							return redirect()->route('admin/pendaftaran/akun');
						}
					}
				}
			}
		} else {
			$user_id = $this->request->getGet('user_id');
			if ($user_id == session()->get('user_id')) {
				return redirect()->route('admin/pendaftaran/akun');
			} else {
				$akunModel = model('App\Models\Akun\AkunModel');
				
				$result = $akunModel->find($user_id);
				
				if (empty($result) || !isset($result['is_admin'])) {
					return redirect()->route('admin/pendaftaran/akun');
				} else {
					if ($result['is_admin']) {
						return redirect()->route('admin/pendaftaran/akun');
					} else {
						$viewData = [
							'loadForm' => [
								'user' => $result['username']
							]
						];
						return view('Admin\Pendaftaran\Akun\ubahpass_akun', $viewData);
					}
				}
			}
		}
	}
	
	public function hapus() {
		$user_id = $this->request->getGet('user_id');
		if ($user_id == session()->get('user_id')) {
			return redirect()->route('admin/pendaftaran/akun');
		} else {
			$akunModel = model('App\Models\Akun\AkunModel');
			
			$result = $akunModel->find($user_id);
			
			if (empty($result) || !isset($result['is_admin'])) {
				return redirect()->route('admin/pendaftaran/akun');
			} else {
				$akunModel->delete($user_id);
					
				session()->setFlashdata('formMessage', 'Berhasil menghapus akun "'.$user_id.'" !');
				return redirect()->route('admin/pendaftaran/akun');
			}
		}
	}
}