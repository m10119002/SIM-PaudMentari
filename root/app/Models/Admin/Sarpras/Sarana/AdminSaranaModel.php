<?php namespace App\Models\Admin\Sarpras\Sarana;

use CodeIgniter\Model;

class AdminSaranaModel extends Model
{
	protected $DBGroup	  = '';
    protected $table      = 'sarana';
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
		'nama' => 'required|max_length[64]',
		'jumlah' => 'required|numeric'
	];
	
    protected $validationMessages = [
		'jabatan' => [
			'required' => 'Nama Prasarana tidak boleh kosong!',
			'max_length' => 'Nama Prasarana tidak boleh lebih dari 64 karakter!'
		],
		'nama_lengkap' => [
			'required' => 'Jumlah tidak boleh kosong!',
			'numeric' => 'Jumlah harus angka!'
		]
	];
	
    protected $skipValidation     = false;
}