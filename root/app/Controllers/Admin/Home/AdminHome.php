<?php

namespace App\Controllers\Admin\Home;
use App\Controllers\Admin\Admin;

class AdminHome extends Admin
{	
	public function __construct() {
		helper(['form', 'url']);
	}
	
	public function index() {
		$profsekModel = model('App\Models\Admin\AdminProfSekModel');
		
		$viewData = [
			'loadForm' => $profsekModel->first()
		];
		
		return view('Admin\Home\index', $viewData);
	}
	
	public function edit() {
		if ($this->request->getMethod() == 'post') {
			if ($this->request->getGet('mode') == 'visi') {
				// not yet implemented
			} elseif ($this->request->getGet('mode') == 'profil') {
				
				$formData = [
					'nama_lembaga' => $this->request->getPost('nama_lembaga'),
					'pemilik_tanah' => $this->request->getPost('pemilik_tanah'),
					'luas_tanah' => $this->request->getPost('luas_tanah'),
					'luas_bangunan' => $this->request->getPost('luas_bangunan'),
					'luas_bangun_tanah' => $this->request->getPost('luas_bangun_tanah'),
					'lokasi' => $this->request->getPost('lokasi'),
					'telepon' => $this->request->getPost('telepon'),
					'email' => $this->request->getPost('email'),
					'website' => $this->request->getPost('website'),
					'hari_pembelajaran' => $this->request->getPost('hari_pembelajaran'),
					'jam_pembelajaran' => $this->request->getPost('jam_pembelajaran'),
					'kegiatan_inti' => $this->request->getPost('kegiatan_inti')
				];
				
				$cekManual = \Config\Services::validation();
				
				if (!$cekManual->run($formData, 'profilSekolah')) {
					$viewData = [
						'loadForm' => $formData,
						'validation' => $cekManual->getErrors()
					];
					return view('Admin\Home\edit_profil', $viewData);
				}
				
				$profsekEditModel = model('App\Models\Admin\AdminProfSekEditModel');
				
				if ($profsekEditModel->update(0, $formData) === false) {
					$viewData = [
						'loadForm' => $formData,
						'validation' => $profsekModel->errors()
					];
					return view('Admin\Home\edit_profil', $viewData);
				} else {
					return redirect()->route('admin/home');
				}
			} else {
				return redirect()->route('admin/home');
			}
		} else {
			if ($this->request->getGet('mode') == 'visi') {
				// not yet implemented
			} elseif ($this->request->getGet('mode') == 'profil') {
				
				$profsekModel = model('App\Models\Admin\AdminProfSekModel');
		
				$viewData = [
					'loadForm' => $profsekModel->first()
				];
				return view('Admin\Home\edit_profil', $viewData);
				
			} else {
				return redirect()->route('admin/home');
			}
		}
	}
}