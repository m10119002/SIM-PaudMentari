<?php namespace App\Models\Admin\InfoMurid;

use CodeIgniter\Model;

class AdminInfoMuridModel extends Model
{
	protected $DBGroup	  = '';
    protected $table      = 'info_murid';
    protected $primaryKey = 'id';

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    // protected $allowedFields = [];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    protected $validationRules    = [
		'nama_lengkap' => 'required|max_length[64]|is_unique[info_murid.nama_lengkap]',
		'tahun_mulai' => 'required|numeric',
		'tahun_akhir' => 'required|numeric'
	];
	
    protected $validationMessages = [
		'nama_lengkap' => [
			'required' => 'Nama Lengkap tidak boleh kosong!',
			'max_length' => 'Nama Lengkap tidak boleh lebih dari 64 karakter!',
			'is_unique' => 'Murid sudah ada!'
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