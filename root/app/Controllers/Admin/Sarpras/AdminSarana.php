<?php

namespace App\Controllers\Admin\Sarpras;

class AdminSarana extends AdminSarpras
{	
	public function __construct() {
		helper(['form', 'url']);
	}
	
	public function tambah() {
		if ($this->request->getMethod() == 'post') {
			$saranaTambahModel = model('App\Models\Admin\Sarpras\Sarana\AdminSaranaTambahModel');
			
			$formData = [
				'nama' => $this->request->getPost('nama'),
				'jumlah' => $this->request->getPost('jumlah')
			];
			
			if ($saranaTambahModel->insert($formData) === false) {
				$viewData = [
					'loadForm' => $formData,
					'validation' => $saranaTambahModel->errors()
				];
				return view('Admin\Sarpras\Sarana\edit_sarana', $viewData);
			} else {
				return redirect()->route('admin/sarpras');
			}
		} else {
			return view('Admin\Sarpras\Sarana\tambah_sarana');
		}
	}
	
	public function edit() {
		if ($this->request->getMethod() == 'post') {
			if ($this->request->getPost('id') !== NULL) {
				$saranaModel = model('App\Models\Admin\Sarpras\Sarana\AdminSaranaModel');
				$id = $this->request->getPost('id');
				
				if (empty($saranaModel->find($id))) {
					return redirect()->route('admin/sarpras');
				} else {
					$saranaEditModel = model('App\Models\Admin\Sarpras\Sarana\AdminSaranaEditModel');
					
					$formData = [
						'id' => $id,
						'nama' => $this->request->getPost('nama'),
						'jumlah' => $this->request->getPost('jumlah')
					];
					
					$data = [
						'nama' => $formData['nama'],
						'jumlah' => $formData['jumlah']
					];
					
					if ($saranaEditModel->update($id, $data) === false) {
						$viewData = [
							'loadForm' => $formData,
							'validation' => $saranaEditModel->errors()
						];
						return view('Admin\Sarpras\Sarana\edit_sarana', $viewData);
					} else {
						return redirect()->route('admin/sarpras');
					}
				}
			} else {
				return redirect()->route('admin/sarpras');
			}
		} else {
			if ($this->request->getGet('id') !== NULL) {
				$saranaModel = model('App\Models\Admin\Sarpras\Sarana\AdminSaranaModel');
				$id = $this->request->getGet('id');
				
				if (empty($saranaModel->find($id))) {
					return redirect()->route('admin/sarpras');
				} else {
					$data = $saranaModel->find($id);
					
					$viewData = [
						'loadForm' => $data
					];
					return view('Admin\Sarpras\Sarana\edit_sarana', $viewData);
				}
			} else {
				return redirect()->route('admin/sarpras');
			}
		}
	}
	
	public function hapus() {
		if ($this->request->getGet('id') !== NULL) {
			$saranaModel = model('App\Models\Admin\Sarpras\Sarana\AdminSaranaModel');
			$id = $this->request->getGet('id');
			
			if (empty($saranaModel->find($id))) {
				return redirect()->route('admin/sarpras');
			} else {
				$saranaModel->delete($id);
				return redirect()->route('admin/sarpras');
			}
		} else {
			return redirect()->route('admin/sarpras');
		}
	}
}