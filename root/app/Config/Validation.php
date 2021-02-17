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
}
