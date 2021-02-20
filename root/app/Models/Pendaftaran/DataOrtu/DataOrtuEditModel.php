<?php namespace App\Models\Pendaftaran\DataOrtu;

class DataOrtuEditModel extends DataOrtuModel
{
	// protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = [
		'nama_lengkap', 'nik', 'tahun_lahir',
		'pendidikan', 'pekerjaan',
		'penghasilan', 'kebutuhan_khusus'
	];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}