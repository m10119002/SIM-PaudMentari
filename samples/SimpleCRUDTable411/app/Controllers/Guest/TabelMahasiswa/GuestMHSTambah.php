<?php

namespace App\Controllers\Guest\TabelMahasiswa;

class GuestMHSTambah extends GuestMahasiswa
{	
	public function __construct() {
		helper(['form', 'url']);
	}

	public function index($data = []) {
		return view('Guest\TabelMahasiswa\tambah_mahasiswa', $data);
	}
	
	public function proses()
	{
		if ($this->request->getMethod() == 'post') {
			$mahasiswaModel = model('App\Models\Mahasiswa\MHSTambahModel');
			
			
			$data = [
				'nim' => $this->request->getPost('t_nim'),
				'nama_lengkap' => $this->request->getPost('t_namalengkap'),
				'kelas' => $this->request->getPost('t_kelas')
			];
			
			if ($mahasiswaModel->insert($data) === false) {
				$viewData = [
					'loadForm' => $data,
					'validation' => $mahasiswaModel->errors()
				];
				return $this->index($viewData);
			} else {
				return redirect()->route('list');
			}
		} else {
			return redirect()->route('list');
		}
	}
}
?>