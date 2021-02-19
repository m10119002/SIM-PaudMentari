<?php

namespace App\Controllers\Admin\Sarpras;

class AdminPrasarana extends AdminSarpras
{	
	public function __construct() {
		helper(['form', 'url']);
	}
	
	public function tambah() {
		if ($this->request->getMethod() == 'post') {
			$prasaranaTambahModel = model('App\Models\Admin\Sarpras\Prasarana\AdminPrasaranaTambahModel');
			
			$formData = [
				'nama' => $this->request->getPost('nama'),
				'jumlah' => $this->request->getPost('jumlah')
			];
			
			if ($prasaranaTambahModel->insert($formData) === false) {
				$viewData = [
					'loadForm' => $formData,
					'validation' => $prasaranaTambahModel->errors()
				];
				return view('Admin\Sarpras\Prasarana\edit_prasarana', $viewData);
			} else {
				return redirect()->route('admin/sarpras');
			}
		} else {
			return view('Admin\Sarpras\Prasarana\tambah_prasarana');
		}
	}
	
	public function edit() {
		if ($this->request->getMethod() == 'post') {
			if ($this->request->getPost('id') !== NULL) {
				$prasaranaModel = model('App\Models\Admin\Sarpras\Prasarana\AdminPrasaranaModel');
				$id = $this->request->getPost('id');
				
				if (empty($prasaranaModel->find($id))) {
					return redirect()->route('admin/sarpras');
				} else {
					$prasaranaEditModel = model('App\Models\Admin\Sarpras\Prasarana\AdminPrasaranaEditModel');
					
					$formData = [
						'id' => $id,
						'nama' => $this->request->getPost('nama'),
						'jumlah' => $this->request->getPost('jumlah')
					];
					
					$data = [
						'nama' => $formData['nama'],
						'jumlah' => $formData['jumlah']
					];
					
					if ($prasaranaEditModel->update($id, $data) === false) {
						$viewData = [
							'loadForm' => $formData,
							'validation' => $prasaranaEditModel->errors()
						];
						return view('Admin\Sarpras\Prasarana\edit_prasarana', $viewData);
					} else {
						return redirect()->route('admin/sarpras');
					}
				}
			} else {
				return redirect()->route('admin/sarpras');
			}
		} else {
			if ($this->request->getGet('id') !== NULL) {
				$prasaranaModel = model('App\Models\Admin\Sarpras\Prasarana\AdminPrasaranaModel');
				$id = $this->request->getGet('id');
				
				if (empty($prasaranaModel->find($id))) {
					return redirect()->route('admin/sarpras');
				} else {
					$data = $prasaranaModel->find($id);
					
					$viewData = [
						'loadForm' => $data
					];
					return view('Admin\Sarpras\Prasarana\edit_prasarana', $viewData);
				}
			} else {
				return redirect()->route('admin/sarpras');
			}
		}
	}
	
	public function hapus() {
		if ($this->request->getGet('id') !== NULL) {
			$prasaranaModel = model('App\Models\Admin\Sarpras\Prasarana\AdminPrasaranaModel');
			$id = $this->request->getGet('id');
			
			if (empty($prasaranaModel->find($id))) {
				return redirect()->route('admin/sarpras');
			} else {
				$prasaranaModel->delete($id);
				return redirect()->route('admin/sarpras');
			}
		} else {
			return redirect()->route('admin/sarpras');
		}
	}
}