<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	public $akun    = [
		'user' => 'required|alpha_dash|max_length[32]',
		'pass' => 'required|max_length[50]',
		'pass_ulang' => 'required|matches[pass]'
	];
	
    public $akun_errors = [
		'user' => [
			'required' => 'Username tidak boleh kosong!',
			'alpha_dash' => 'Username tidak boleh mengandung spasi atau simbol selain dash(-), underscore(_)!',
			'max_length' => 'Username tidak boleh melebihi 32 karakter!',
		],
		'pass' => [
			'required' => 'Password tidak boleh kosong!',
			'max_length' => 'Password tidak boleh melebihi 50 karakter!'
		],
		'pass_ulang' => [
			'required' => 'Password Ulang tidak boleh kosong!',
			'matches' => 'Password Ulang harus sama dengan Password!'
		]
	];
	
	public $login    = [
		'username' => 'required',
		'password' => 'required'
	];
	
	public $login_errors = [
		'username' => [
			'required' => 'Username tidak boleh kosong!'
		],
		'password' => [
			'required' => 'Password tidak boleh kosong!'
		]
	];
	
	public $profilSekolah = [
		'nama_lembaga' => 'required|max_length[64]',
		'pemilik_tanah' => 'required|max_length[64]',
		'luas_tanah' => 'required|max_length[16]',
		'luas_bangunan' => 'required|max_length[16]',
		'luas_bangun_tanah' => 'required|max_length[16]',
		'lokasi' => 'required|max_length[128]',
		'telepon' => 'required|max_length[20]',
		'email' => 'required|max_length[64]',
		'website' => 'required|max_length[64]',
		'hari_pembelajaran' => 'required|max_length[128]',
		'jam_pembelajaran' => 'required|max_length[128]',
		'kegiatan_inti' => 'required|max_length[128]'
	];
	
	public $profilSekolah_errors = [
		'nama_lembaga' => [
			'required' => 'Nama Lembaga tidak boleh kosong!',
			'max_length' => 'Nama Lembaga tidak boleh dari 64 karakter!'
		],
		'pemilik_tanah' => [
			'required' => 'Kepemilikan Tanah tidak boleh kosong!',
			'max_length' => 'Kepemilikan Tanah tidak boleh dari 64 karakter!'
		],
		'luas_tanah' => [
			'required' => 'Luas Tanah tidak boleh kosong!',
			'max_length' => 'Luas Tanah tidak boleh dari 16 karakter!'
		],
		'luas_bangunan' => [
			'required' => 'Luas Bangunan tidak boleh kosong!',
			'max_length' => 'Luas Bangunan tidak boleh dari 16 karakter!'
		],
		'luas_bangun_tanah' => [
			'required' => 'Luas Bangun Tanah tidak boleh kosong!',
			'max_length' => 'Luas Bangun Tanah tidak boleh dari 16 karakter!'
		],
		'lokasi' => [
			'required' => 'Lokasi tidak boleh kosong!',
			'max_length' => 'Lokasi tidak boleh dari 128 karakter!'
		],
		'telepon' => [
			'required' => 'Telepon tidak boleh kosong!',
			'max_length' => 'Telepon tidak boleh dari 20 karakter!'
		],
		'email' => [
			'required' => 'Email tidak boleh kosong!',
			'max_length' => 'Email tidak boleh dari 64 karakter!'
		],
		'website' => [
			'required' => 'Website tidak boleh kosong!',
			'max_length' => 'Website tidak boleh dari 64 karakter!'
		],
		'hari_pembelajaran' => [
			'required' => 'Hari Pembelajaran tidak boleh kosong!',
			'max_length' => 'Hari Pembelajaran tidak boleh dari 128 karakter!'
		],
		'jam_pembelajaran' => [
			'required' => 'Jam Pembelajaran tidak boleh kosong!',
			'max_length' => 'Jam Pembelajaran tidak boleh dari 128 karakter!'
		],
		'kegiatan_inti' => [
			'required' => 'Kegiatan Inti tidak boleh kosong!',
			'max_length' => 'Kegiatan Inti tidak boleh dari 128 karakter!'
		],
	];
}
