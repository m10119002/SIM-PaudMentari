<?php

namespace App\Controllers\Guest\TabelMahasiswa;

class GuestMHSEdit extends GuestMahasiswa
{	
	public function __construct() {
		helper(['form', 'url']);
	}
	
	private function init() {
		$mahasiswaModel = model('App\Models\Mahasiswa\MHSEditModel');
		$nim = $this->request->getGet('nim');
		
		if ($this->request->getMethod() == 'get') {
			$isValid = ($this->request->getGet('nim') !== null)? true : false;
			if (!$isValid) return false;
		} elseif ($this->request->getMethod() == 'post') {
			$isValid = ($this->request->getPost('t_nim') !== null)? true : false;
			if (!$isValid) return false;
		} else {
			return false;
		}
		
		if ($mahasiswaModel->find($nim) == null) {
			return false;
		} else {
			return true;
		}
	}

	public function index($viewData = [], $skipInit = false) {
		if ((!$skipInit) && (!$this->init())) {
			return redirect()->route('list');
		}
		
		$mahasiswaModel = model('App\Models\Mahasiswa\MHSEditModel');
		$nim = $this->request->getGet('nim');
				
		$mahasiswa = $mahasiswaModel->find($nim);
		
		if (empty($viewData)) {
			$viewData = [
				'loadForm' => $mahasiswa
			];
		}
		
		return view('Guest\TabelMahasiswa\edit_mahasiswa', $viewData);
	}
	
	public function proses()
	{
		if (!$this->init()) {
			return redirect()->route('list');
		}
		
		$mahasiswaModel = model('App\Models\Mahasiswa\MHSEditModel');
		$nim = $this->request->getPost('t_nim');
			
		$data = [
			'nama_lengkap' => $this->request->getPost('t_namalengkap'),
			'kelas' => $this->request->getPost('t_kelas')
		];
			
		if ($mahasiswaModel->update($nim, $data) === false) {
			$viewData = [
				'loadForm' => [
					'nim' => $nim,
					'nama_lengkap' => $data['nama_lengkap'],
					'kelas' => $data['kelas']
				],
				'validation' => $mahasiswaModel->errors()
			];
			return $this->index($viewData, true);
		} else {
			return redirect()->route('list');
		}
	}
}
?>