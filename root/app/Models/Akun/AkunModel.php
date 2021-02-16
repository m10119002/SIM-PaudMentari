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

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}