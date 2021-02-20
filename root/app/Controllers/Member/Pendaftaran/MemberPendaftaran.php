<?php

namespace App\Controllers\Member\Pendaftaran;
use App\Controllers\Member\Member;

class MemberPendaftaran extends Member
{	
	public function __construct() {
		helper(['form', 'url']);
		
		$formulirModel = model('App\Models\Pendaftaran\Formulir\FormulirModel');
		
		if ($formulirModel->isExist(session()->get('user_id'))) {
			session()->set('formulir', true);
		} else {
			session()->set('formulir', false);
		}
	}

	public function index() {
		$user_id = session()->get('user_id');
		
		$formulirModel = model('App\Models\Pendaftaran\Formulir\FormulirModel');
		
		$viewData = [
			'status' => $formulirModel->getStatus($user_id),
			'pesan' => $formulirModel->getStatusMessage($user_id)
		];
		
		return view('Member\Pendaftaran\status_formulir', $viewData);
	}
	
	public function daftar() {
		if (session()->get('formulir')) {
			return redirect()->route('member/pendaftaran/formulir');
		} else {
			$user_id = session()->get('user_id');
			
			$formulirModel = model('App\Models\Pendaftaran\Formulir\FormulirInitModel');
			$datapribadiModel = model('App\Models\Pendaftaran\DataPribadi\DataPribadiInitModel');
			$dataortuModel = model('App\Models\Pendaftaran\DataOrtu\DataOrtuInitModel');
			$datakontakModel = model('App\Models\Pendaftaran\DataKontak\DataKontakInitModel');
			
			$formulirModel->insert(['username' => $user_id]);
			
			$form_id = $formulirModel->getId($user_id);
			
			$datapribadiModel->insert(['id_form' => $form_id]);
			$dataortuModel->insert(['id_form' => $form_id, 'tipe' => 'ayah']);
			$dataortuModel->insert(['id_form' => $form_id, 'tipe' => 'ibu']);
			$dataortuModel->insert(['id_form' => $form_id, 'tipe' => 'wali']);
			$datakontakModel->insert(['id_form' => $form_id]);
			
			session()->set('formulir', true);
			return redirect()->route('member/pendaftaran/formulir');
		}
	}
	
	public function formulir() {
		$user_id = session()->get('user_id');
		
		$formulirModel = model('App\Models\Pendaftaran\Formulir\FormulirModel');
		$datapribadiModel = model('App\Models\Pendaftaran\DataPribadi\DataPribadiModel');
		$dataortuModel = model('App\Models\Pendaftaran\DataOrtu\DataOrtuModel');
		$datakontakModel = model('App\Models\Pendaftaran\DataKontak\DataKontakModel');
		
		$form_id = $formulirModel->getId($user_id);
		
		$viewData = [
			'loadForm' => $datapribadiModel->where(['id_form' => $form_id])->first(),
			'loadForm2' => $dataortuModel->where(['id_form' => $form_id, 'tipe' => 'ayah'])->first(),
			'loadForm3' => $dataortuModel->where(['id_form' => $form_id, 'tipe' => 'ibu'])->first(),
			'loadForm4' => $dataortuModel->where(['id_form' => $form_id, 'tipe' => 'wali'])->first(),
			'loadForm5' => $datakontakModel->where(['id_form' => $form_id])->first()
		];
		return view('Member\Pendaftaran\lihat_formulir', $viewData);
	}
	
	public function ubah() {
		$user_id = session()->get('user_id');
		
		$formulirModel = model('App\Models\Pendaftaran\Formulir\FormulirModel');
		$datapribadiModel = model('App\Models\Pendaftaran\DataPribadi\DataPribadiModel');
		$dataortuModel = model('App\Models\Pendaftaran\DataOrtu\DataOrtuModel');
		$datakontakModel = model('App\Models\Pendaftaran\DataKontak\DataKontakModel');
		
		$form_id = $formulirModel->getId($user_id);
		if ($this->request->getMethod() == 'post') {
			$formData = [
				'nama_lengkap' => $this->request->getPost('nama_lengkap'),
				'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
				'nisn' => $this->request->getPost('nisn'),
				'nik_nokitas' => $this->request->getPost('nik_nokitas'),
				'tempat_lahir' => $this->request->getPost('tempat_lahir'),
				'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
				'reg_akta_lahir' => $this->request->getPost('reg_akta_lahir'),
				'agama' => $this->request->getPost('agama'),
				'kewarganegaraan' => $this->request->getPost('kewarganegaraan'),
				'kebutuhan_khusus' => $this->request->getPost('kebutuhan_khusus'),
				'alamat_jalan' => $this->request->getPost('alamat_jalan'),
				'rt' => $this->request->getPost('rt'),
				'rw' => $this->request->getPost('rw'),
				'nama_dusun' => $this->request->getPost('nama_dusun'),
				'nama_kelurahandesa' => $this->request->getPost('nama_kelurahandesa'),
				'kecamatan' => $this->request->getPost('kecamatan'),
				'kode_pos' => $this->request->getPost('kode_pos'),
				'lintang' => $this->request->getPost('lintang'),
				'bujur' => $this->request->getPost('bujur'),
				'tempat_tinggal' => $this->request->getPost('tempat_tinggal'),
				'moda_transportasi' => $this->request->getPost('moda_transportasi'),
				'nomor_kks' => $this->request->getPost('nomor_kks'),
				'anak_ke' => $this->request->getPost('anak_ke'),
				'penerima_kpspkh' => $this->request->getPost('penerima_kpspkh'),
				'no_kpskph' => $this->request->getPost('no_kpskph'),
				'usulan_sekolah' => $this->request->getPost('usulan_sekolah'),
				'nama_kip' => $this->request->getPost('nama_kip'),
				'fisik_kartu_kip' => $this->request->getPost('fisik_kartu_kip'),
				'alasan_layak_pip' => $this->request->getPost('alasan_layak_pip'),
				'bank' => $this->request->getPost('bank'),
				'no_rek_bank' => $this->request->getPost('no_rek_bank'),
				'no_rek_an' => $this->request->getPost('no_rek_an')
			];
			$formData2 = [
				'nama_lengkap' => $this->request->getPost('a_nama_lengkap'),
				'nik' => $this->request->getPost('a_nik'),
				'tahun_lahir' => $this->request->getPost('a_tahun_lahir'),
				'pendidikan' => $this->request->getPost('a_pendidikan'),
				'pekerjaan' => $this->request->getPost('a_pekerjaan'),
				'penghasilan' => $this->request->getPost('a_penghasilan'),
				'kebutuhan_khusus' => $this->request->getPost('a_kebutuhan_khusus')
			];
			$formData3 = [
				'nama_lengkap' => $this->request->getPost('b_nama_lengkap'),
				'nik' => $this->request->getPost('b_nik'),
				'tahun_lahir' => $this->request->getPost('b_tahun_lahir'),
				'pendidikan' => $this->request->getPost('b_pendidikan'),
				'pekerjaan' => $this->request->getPost('b_pekerjaan'),
				'penghasilan' => $this->request->getPost('b_penghasilan'),
				'kebutuhan_khusus' => $this->request->getPost('b_kebutuhan_khusus')
			];
			$formData4 = [
				'nama_lengkap' => $this->request->getPost('c_nama_lengkap'),
				'nik' => $this->request->getPost('c_nik'),
				'tahun_lahir' => $this->request->getPost('c_tahun_lahir'),
				'pendidikan' => $this->request->getPost('c_pendidikan'),
				'pekerjaan' => $this->request->getPost('c_pekerjaan'),
				'penghasilan' => $this->request->getPost('c_penghasilan'),
				'kebutuhan_khusus' => $this->request->getPost('c_kebutuhan_khusus')
			];
			$formData5 = [
				'telepon' => $this->request->getPost('telepon'),
				'nohp' => $this->request->getPost('nohp')
			];
			
			$datapribadiEditModel = model('App\Models\Pendaftaran\DataPribadi\DataPribadiEditModel');
			$dataortuEditModel = model('App\Models\Pendaftaran\DataOrtu\DataOrtuEditModel');
			$datakontakEditModel = model('App\Models\Pendaftaran\DataKontak\DataKontakEditModel');
			
			$ortu_1 = $dataortuModel->getId($form_id, 'ayah');
			$ortu_2 = $dataortuModel->getId($form_id, 'ibu');
			$ortu_3 = $dataortuModel->getId($form_id, 'wali');
			
			$datapribadiEditModel->update($form_id, $formData);
			$dataortuEditModel->update($ortu_1, $formData2);
			$dataortuEditModel->update($ortu_2, $formData3);
			$dataortuEditModel->update($ortu_3, $formData4);
			$datakontakEditModel->update($form_id, $formData5);
			return redirect()->route('member/pendaftaran/formulir');
		} else {
			$viewData = [
				'loadForm' => $datapribadiModel->where(['id_form' => $form_id])->first(),
				'loadForm2' => $dataortuModel->where(['id_form' => $form_id, 'tipe' => 'ayah'])->first(),
				'loadForm3' => $dataortuModel->where(['id_form' => $form_id, 'tipe' => 'ibu'])->first(),
				'loadForm4' => $dataortuModel->where(['id_form' => $form_id, 'tipe' => 'wali'])->first(),
				'loadForm5' => $datakontakModel->where(['id_form' => $form_id])->first()
			];
			return view('Member\Pendaftaran\ubah_formulir', $viewData);
		}
	}
}