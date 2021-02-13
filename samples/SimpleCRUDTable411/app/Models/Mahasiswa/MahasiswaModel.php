<?php namespace App\Models\Mahasiswa;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
	protected $DBGroup	  = '';
    protected $table      = 'mahasiswa';
    protected $primaryKey = 'nim';

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    /**
	 * protected $allowedFields = ['nim', 'kelas', 'nama_lengkap']; <- insert/save
	 * protected $allowedFields = ['kelas', 'nama_lengkap']; <- edit/save
	 */

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    protected $skipValidation     = false;
	
	protected $validationRules    = [
        'nim'			=> 'required|numeric|exact_length[8]|is_unique[mahasiswa.nim]',
        'nama_lengkap'	=> 'required|alpha_space|max_length[64]',
        'kelas'			=> 'required|alpha_dash|min_length[3]|max_length[6]',
    ];

    protected $validationMessages = [
        'nim' => [
            'required'		=> 'NIM tidak boleh kosong!',
			'numeric'		=> 'NIM harus berisi angka!',
			'exact_length'	=> 'NIM harus 8 digit!',
			'is_unique'		=> 'Sudah ada Mahasiswa yang menggunakan NIM tersebut!'
        ],
		'nama_lengkap' => [
            'required'		=> 'Nama Lengkap tidak boleh kosong!',
			'alpha_space'	=> 'Nama Lengkap tidak boleh mengandung simbol!',
			'max_length'	=> 'Nama Lengkap maksimal 64 huruf!'
        ],
		'kelas' => [
            'required'		=> 'Kelas tidak boleh kosong!',
			'alpha_dash'	=> 'Kelas tidak boleh mengandung simbol selain dash("-") atau underscore("_")!',
			'min_length'	=> 'Kelas minimal 3 huruf!',
			'max_length'	=> 'Kelas maksimal 6 huruf!'
        ],
    ];
}