<?php namespace App\Models\Admin\InfoPTK;

use CodeIgniter\Model;

class AdminInfoPTKModel extends Model
{
	protected $DBGroup	  = '';
    protected $table      = 'info_ptk';
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
		'jabatan' => 'required|max_length[64]',
		'nama_lengkap' => 'required|max_length[64]'
	];
	
    protected $validationMessages = [
		'jabatan' => [
			'required' => 'Jabatan tidak boleh kosong!',
			'max_length' => 'Jabatan tidak boleh lebih dari 64 karakter!'
		],
		'nama_lengkap' => [
			'required' => 'Nama Lengkap tidak boleh kosong!',
			'max_length' => 'Nama Lengkap tidak boleh lebih dari 64 karakter!'
		]
	];
	
    protected $skipValidation     = false;
}