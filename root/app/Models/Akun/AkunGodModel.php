<?php namespace App\Models\Akun;

class AkunGodModel extends AkunModel
{
	// protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

	protected $allowedFields = ['username', 'password', 'is_admin'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';
}