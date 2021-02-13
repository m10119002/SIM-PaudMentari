<?php

namespace App\Controllers\Guest\TabelMahasiswa;

class GuestMHSHapus extends GuestMahasiswa
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
		} else {
			return false;
		}
		
		if ($mahasiswaModel->find($nim) == null) {
			return false;
		} else {
			return true;
		}
	}
	
	public function index() {
		if ($this->init()) {
			$mahasiswaModel = model('App\Models\Mahasiswa\MHSHapusModel');
			$nim = $this->request->getGet('nim');
			
			$mahasiswaModel->delete($nim);
			
			return redirect()->route('list');
		}
	}
}