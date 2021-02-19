<?php

namespace App\Controllers\Admin\Pengumuman;
use App\Controllers\Admin\Admin;

class AdminPengumuman extends Admin
{	
	public function __construct() {
		helper(['form', 'url']);
	}
	
	public function index() {
		$pengumumanModel = model('App\Models\Admin\Pengumuman\AdminPengumumanModel');
		
		$viewData = [
			'loadTable' => $pengumumanModel->findAll()
		];
		
		return view('Admin\Pengumuman\pengumuman', $viewData);
	}
	
	public function tambah() {
		if ($this->request->getMethod() == 'post') {
			$pengumumanTambahModel = model('App\Models\Admin\Pengumuman\AdminPengumumanTambahModel');
			
			$formData = [
				'isi' => $this->request->getPost('isi')
			];
			
			if ($pengumumanTambahModel->insert($formData) === false) {
				$viewData = [
					'loadForm' => $formData,
					'validation' => $pengumumanTambahModel->errors()
				];
				return view('Admin\Pengumuman\tambah_pengumuman', $viewData);
			} else {
				return redirect()->route('admin/pengumuman');
			}
		} else {
			return view('Admin\Pengumuman\tambah_pengumuman');
		}
	}
	
	public function edit() {
		if ($this->request->getMethod() == 'post') {
			if ($this->request->getPost('id') !== NULL) {
				$pengumumanModel = model('App\Models\Admin\Pengumuman\AdminPengumumanModel');
				$id = $this->request->getPost('id');
				
				if (empty($pengumumanModel->find($id))) {
					return redirect()->route('admin/pengumuman');
				} else {
					$pengumumanEditModel = model('App\Models\Admin\Pengumuman\AdminPengumumanEditModel');
					
					$formData = [
						'id' => $id,
						'isi' => $this->request->getPost('isi')
					];
					
					$data = [
						'isi' => $formData['isi']
					];
					
					if ($pengumumanEditModel->update($id, $data) === false) {
						$viewData = [
							'loadForm' => $formData,
							'validation' => $pengumumanEditModel->errors()
						];
						return view('Admin\Pengumuman\edit_pengumuman', $viewData);
					} else {
						return redirect()->route('admin/pengumuman');
					}
				}
			} else {
				return redirect()->route('admin/pengumuman');
			}
		} else {
			if ($this->request->getGet('id') !== NULL) {
				$pengumumanModel = model('App\Models\Admin\Pengumuman\AdminPengumumanModel');
				$id = $this->request->getGet('id');
				
				if (empty($pengumumanModel->find($id))) {
					return redirect()->route('admin/pengumuman');
				} else {
					$data = $pengumumanModel->find($id);
					
					$viewData = [
						'loadForm' => $data
					];
					return view('Admin\Pengumuman\edit_pengumuman', $viewData);
				}
			} else {
				return redirect()->route('admin/pengumuman');
			}
		}
	}
	
	public function hapus() {
		if ($this->request->getGet('id') !== NULL) {
			$pengumumanModel = model('App\Models\Admin\Pengumuman\AdminPengumumanModel');
			$id = $this->request->getGet('id');
			
			if (empty($pengumumanModel->find($id))) {
				return redirect()->route('admin/pengumuman');
			} else {
				$pengumumanModel->delete($id);
				return redirect()->route('admin/pengumuman');
			}
		} else {
			return redirect()->route('admin/pengumuman');
		}
	}
}