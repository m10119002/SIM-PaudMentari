<?php namespace App\Models\Mahasiswa;

use CodeIgniter\Model;

class MHSEditModel extends MahasiswaModel
{
    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['kelas', 'nama_lengkap'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    protected $skipValidation     = false;
}