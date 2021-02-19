<?php

namespace App\Controllers\Admin\InfoPTK;
use App\Controllers\Admin\Admin;

class AdminInfoPTK extends Admin
{
	public function __construct() {
		helper(['form', 'url']);
	}
	
	public function index() {
		$infoptkModel = model('App\Models\Admin\InfoPTK\AdminInfoPTKModel');
		
		$viewData = [
			'loadTable' => $infoptkModel->findAll()
		];
		
		return view('Admin\InfoPTK\infoptk', $viewData);
	}
	
	public function tambah() {
		if ($this->request->getMethod() == 'post') {
			$infoptkTambahModel = model('App\Models\Admin\InfoPTK\AdminInfoPTKTambahModel');
			
			$formData = [
				'jabatan' => $this->request->getPost('jabatan'),
				'nama_lengkap' => $this->request->getPost('nama_lengkap')
			];
			
			if ($infoptkTambahModel->insert($formData) === false) {
				$viewData = [
					'loadForm' => $formData,
					'validation' => $infoptkModel->errors()
				];
				return view('Admin\InfoPTK\edit_infoptk', $viewData);
			} else {
				return redirect()->route('admin/infoptk');
			}
		} else {
			return view('Admin\InfoPTK\tambah_infoptk');
		}
	}
	
	public function edit() {
		if ($this->request->getMethod() == 'post') {
			if ($this->request->getPost('id') !== NULL) {
				$infoptkModel = model('App\Models\Admin\InfoPTK\AdminInfoPTKModel');
				$id = $this->request->getPost('id');
				
				if (empty($infoptkModel->find($id))) {
					return redirect()->route('admin/infoptk');
				} else {
					$infoptkEditModel = model('App\Models\Admin\InfoPTK\AdminInfoPTKEditModel');
					
					$formData = [
						'id' => $id,
						'jabatan' => $this->request->getPost('jabatan'),
						'nama_lengkap' => $this->request->getPost('nama_lengkap')
					];
					
					$data = [
						'jabatan' => $formData['jabatan'],
						'nama_lengkap' => $formData['nama_lengkap']
					];
					
					if ($infoptkEditModel->update($id, $data) === false) {
						$viewData = [
							'loadForm' => $formData,
							'validation' => $infoptkModel->errors()
						];
						return view('Admin\InfoPTK\edit_infoptk', $viewData);
					} else {
						return redirect()->route('admin/infoptk');
					}
				}
			} else {
				return redirect()->route('admin/infoptk');
			}
		} else {
			if ($this->request->getGet('id') !== NULL) {
				$infoptkModel = model('App\Models\Admin\InfoPTK\AdminInfoPTKModel');
				$id = $this->request->getGet('id');
				
				if (empty($infoptkModel->find($id))) {
					return redirect()->route('admin/infoptk');
				} else {
					$data = $infoptkModel->find($id);
					
					$viewData = [
						'loadForm' => $data
					];
					return view('Admin\InfoPTK\edit_infoptk', $viewData);
				}
			} else {
				return redirect()->route('admin/infoptk');
			}
		}
	}
	
	public function hapus() {
		if ($this->request->getGet('id') !== NULL) {
			$infoptkModel = model('App\Models\Admin\InfoPTK\AdminInfoPTKModel');
			$id = $this->request->getGet('id');
			
			if (empty($infoptkModel->find($id))) {
				return redirect()->route('admin/infoptk');
			} else {
				$infoptkModel->delete($id);
				return redirect()->route('admin/infoptk');
			}
		} else {
			return redirect()->route('admin/infoptk');
		}
	}
}