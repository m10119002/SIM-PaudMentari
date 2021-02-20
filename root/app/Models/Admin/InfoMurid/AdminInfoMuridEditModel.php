<?php namespace App\Models\Admin\InfoMurid;

class AdminInfoMuridEditModel extends AdminInfoMuridModel
{
	// protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

   protected $allowedFields = ['nama_lengkap', 'tahun_mulai', 'tahun_akhir'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    protected $validationRules    = [
		'nama_lengkap' => 'required|max_length[64]',
		'tahun_mulai' => 'required|numeric',
		'tahun_akhir' => 'required|numeric'
	];
	
    protected $validationMessages = [
		'nama_lengkap' => [
			'required' => 'Nama Lengkap tidak boleh kosong!',
			'max_length' => 'Nama Lengkap tidak boleh lebih dari 64 karakter!'
		],
		'tahun_mulai' => [
			'required' => 'Tahun Mulai tidak boleh kosong!',
			'numeric' => 'Tahun Mulai harus angka!'
		],
		'tahun_akhir' => [
			'required' => 'Tahun Akhir tidak boleh kosong!',
			'numeric' => 'Tahun Akhir harus angka!'
		]
	];
	
    protected $skipValidation     = false;
}