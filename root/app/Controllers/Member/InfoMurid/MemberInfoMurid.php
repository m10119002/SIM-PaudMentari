<?php

namespace App\Controllers\Member\InfoMurid;
use App\Controllers\Member\Member;

class MemberInfoMurid extends Member
{	
	public function index($angkatan = NULL) {
		$infomuridModel = model('App\Models\Member\InfoMurid\MemberInfoMuridModel');
		
		$result = $infomuridModel->orderBy('nama_lengkap ASC', 'tahun_awal ASC')->findAll();
		
		if (empty($result)) {
			return view('Member\InfoMurid\infomurid');
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
			return view('Member\InfoMurid\infomurid', $viewData);
		}
	}
}