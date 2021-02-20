<?php

namespace App\Controllers\Admin\InfoMurid;
use App\Controllers\Admin\Admin;

class AdminInfoMurid extends Admin
{	
	public function __construct() {
		helper(['form', 'url']);
	}

	public function index($angkatan = NULL) {
		$infomuridModel = model('App\Models\Admin\InfoMurid\AdminInfoMuridModel');
		
		$result = $infomuridModel->orderBy('nama_lengkap ASC', 'tahun_awal ASC')->findAll();
		
		if (empty($result)) {
			return view('Admin\InfoMurid\infomurid');
		} else {
			$qTemp1 = $infomuridModel->orderBy('tahun_mulai', 'asc')->first();
			$qTemp2 = $infomuridModel->orderBy('tahun_akhir', 'desc')->first();
			
			$tahun_awal = $qTemp1['tahun_mulai'];
			$tahun_akhir = $qTemp2['tahun_akhir'];
			$tahun_akhir = $tahun_akhir-1;
			
			if (($angkatan < $tahun_awal) || ($angkatan === NULL)) {
				$url = 'infomurid/'.$tahun_awal;
				return redirect()->to($url);
			}
			
			$db      = \Config\Database::connect();
			$builder = $db->table('info_murid');
			
			$builder->where('tahun_mulai <=', $angkatan);
			$builder->where('tahun_akhir >', $angkatan);
			$builder->orderBy('nama_lengkap ASC', 'tahun_mulai ASC');
			
			$mode;
			$loadTable = $builder->get()->getResultArray();
			if (($angkatan == $tahun_awal) && (($tahun_awal == $tahun_akhir) || ($tahun_akhir == ($tahun_awal+1)))) {
				$mode = 'satu';
			} elseif (($angkatan == $tahun_awal) && ($tahun_awal !== $tahun_akhir)) {
				$mode = 'awal';
			} elseif (($angkatan > $tahun_awal) && ($angkatan < $tahun_akhir)) {
				$mode = 'tengah';
			} else {
				$mode = 'akhir';
			}
			
			$viewData = [
				'loadTable' => $loadTable,
				'angkatan' => $angkatan,
				'mode' => $mode
			];
			return view('Admin\InfoMurid\infomurid', $viewData);
		}
	}
	
	public function tambah() {
		if ($this->request->getMethod() == 'post') {
			$infomuridTambahModel = model('App\Models\Admin\InfoMurid\AdminInfoMuridTambahModel');
			
			$formData = [
				'nama_lengkap' => $this->request->getPost('nama_lengkap'),
				'tahun_mulai' => $this->request->getPost('tahun_mulai'),
				'tahun_akhir' => $this->request->getPost('tahun_akhir')
			];
			
			if ($infomuridTambahModel->insert($formData) === false) {
				$viewData = [
					'loadForm' => $formData,
					'validation' => $infomuridTambahModel->errors()
				];
				return view('Admin\InfoMurid\tambah_infomurid', $viewData);
			} else {
				return redirect()->route('admin/infomurid');
			}
		} else {
			return view('Admin\InfoMurid\tambah_infomurid');
		}
	}
	
	public function edit() {
		if ($this->request->getMethod() == 'post') {
			if ($this->request->getPost('id') !== NULL) {
				$infomuridModel = model('App\Models\Admin\InfoMurid\AdminInfoMuridModel');
				$id = $this->request->getPost('id');
				
				if (empty($infomuridModel->find($id))) {
					return redirect()->route('admin/infomurid');
				} else {
					$infomuridEditModel = model('App\Models\Admin\InfoMurid\AdminInfoMuridEditModel');
					
					$formData = [
						'id' => $id,
						'nama_lengkap' => $this->request->getPost('nama_lengkap'),
						'tahun_mulai' => $this->request->getPost('tahun_mulai'),
						'tahun_akhir' => $this->request->getPost('tahun_akhir')
					];
					
					$data = [
						'nama_lengkap' => $this->request->getPost('nama_lengkap'),
						'tahun_mulai' => $this->request->getPost('tahun_mulai'),
						'tahun_akhir' => $this->request->getPost('tahun_akhir')
					];
					
					if ($infomuridEditModel->update($id, $data) === false) {
						$viewData = [
							'loadForm' => $formData,
							'validation' => $infomuridEditModel->errors()
						];
						return view('Admin\InfoMurid\edit_infomurid', $viewData);
					} else {
						return redirect()->route('admin/infomurid');
					}
				}
			} else {
				return redirect()->route('admin/infomurid');
			}
		} else {
			if ($this->request->getGet('id') !== NULL) {
				$infomuridModel = model('App\Models\Admin\InfoMurid\AdminInfoMuridModel');
				$id = $this->request->getGet('id');
				
				if (empty($infomuridModel->find($id))) {
					return redirect()->route('admin/infomurid');
				} else {
					$data = $infomuridModel->find($id);
					
					$viewData = [
						'loadForm' => $data
					];
					return view('Admin\InfoMurid\edit_infomurid', $viewData);
				}
			} else {
				return redirect()->route('admin/infomurid');
			}
		}
	}
	
	public function hapus() {
		if ($this->request->getGet('id') !== NULL) {
			$infomuridModel = model('App\Models\Admin\InfoMurid\AdminInfoMuridModel');
			$id = $this->request->getGet('id');
			
			if (empty($infomuridModel->find($id))) {
				return redirect()->route('admin/infomurid');
			} else {
				$infomuridModel->delete($id);
				return redirect()->route('admin/infomurid');
			}
		} else {
			return redirect()->route('admin/infomurid');
		}
	}
}