<?php namespace App\Models\Admin;

class AdminProfSekEditModel extends AdminProfSekModel
{
	protected $DBGroup	  = '';
    protected $table      = 'profil_sekolah';
    protected $primaryKey = 'id';

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['nama_lembaga', 'pemilik_tanah', 'luas_tanah', 'luas_bangunan', 'luas_bangun_tanah', 'lokasi', 'telepon', 'email', 'website', 'hari_pembelajaran', 'jam_pembelajaran', 'kegiatan_inti'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}