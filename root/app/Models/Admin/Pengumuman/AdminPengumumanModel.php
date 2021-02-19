<?php namespace App\Models\Admin\Pengumuman;

use CodeIgniter\Model;

class AdminPengumumanModel extends Model
{
	protected $DBGroup	  = '';
    protected $table      = 'pengumuman';
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
		'isi' => 'required|max_length[2100]'
	];
	
    protected $validationMessages = [
		'isi' => [
			'required' => 'Isi Pengumuman tidak boleh kosong!',
			'max_length' => 'Isi Pengumuman tidak boleh lebih dari 2100 karakter!'
		]
	];
	
    protected $skipValidation     = false;
}