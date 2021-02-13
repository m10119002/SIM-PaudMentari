<?php

namespace App\Controllers\Guest\TabelMahasiswa;
use App\Controllers\Guest;

class GuestMahasiswa extends Guest
{	
	public function index()
	{
		$mahasiswaModel = model('App\Models\Mahasiswa\MahasiswaModel');
		$data = [
			'hasildata' => $mahasiswaModel->findAll(),
			'ses' => session()->get('tipeUser')
		];
		return view('Guest\TabelMahasiswa\halaman_utama', $data);
	}
	
	public function edit()
	{
		if ($this->request->getMethod() == 'get')
		{
			
		} else {
			return $this->index();
		}
	}
	
	public function hapus()
	{
		
	}
}
