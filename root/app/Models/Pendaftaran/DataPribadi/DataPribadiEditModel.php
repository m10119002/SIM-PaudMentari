<?php namespace App\Models\Pendaftaran\DataPribadi;

class DataPribadiEditModel extends DataPribadiModel
{
	// protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = [
		'nama_lengkap', 'jenis_kelamin', 'nisn',
		'nik_nokitas', 'tempat_lahir', 'tanggal_lahir',
		'reg_akta_lahir', 'agama', 'kewarganegaraan',
		'kebutuhan_khusus', 'alamat_jalan', 'rt',
		'rw', 'nama_dusun', 'nama_kelurahandesa', 'kecamatan',
		'kode_pos', 'lintang', 'bujur', 'tempat_tinggal',
		'moda_transportasi', 'nomor_kks', 'anak_ke',
		'penerima_kpspkh', 'no_kpskph', 'usulan_sekolah',
		'nama_kip', 'fisik_kartu_kip', 'alasan_layak_pip',
		'bank', 'no_rek_bank', 'no_rek_an'
	];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}