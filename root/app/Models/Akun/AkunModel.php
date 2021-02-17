<?php namespace App\Models\Akun;

use CodeIgniter\Model;

class AkunModel extends Model
{
	protected $DBGroup	  = '';
    protected $table      = 'akun';
    protected $primaryKey = 'username';

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = [];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    protected $validationRules    = [
		'username' => 'required|alpha_dash|max_length[32]|is_unique[akun.username]',
		'password' => 'required'
	];
	
    protected $validationMessages = [
		'username' => [
			'required' => 'Username tidak boleh kosong!',
			'alpha_dash' => 'Username tidak boleh mengandung spasi atau simbol selain dash(-), underscore(_)!',
			'max_length' => 'Username tidak boleh melebihi 32 karakter!',
			'is_unique' => 'Username ini sudah ada yang menggunakan!'
		],
		'password' => [
			'required' => 'Password tidak boleh kosong!'
		]
	];
	
    protected $skipValidation     = false;
}