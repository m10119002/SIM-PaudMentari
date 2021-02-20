<?php namespace App\Models\Pendaftaran\Formulir;

use CodeIgniter\Model;

class FormulirModel extends Model
{
	protected $DBGroup	  = '';
    protected $table      = 'formulir';
    protected $primaryKey = 'id_form';

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    // protected $allowedFields = [];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
	
	public function isExist($user_id) {
		$db      = \Config\Database::connect();
		$builder = $db->table('formulir');
		
		$builder->where('username', $user_id);
		
		$query = $builder->get()->getResultArray();
		
		if (count($query) == 0) {
			return false;
		} else {
			return true;
		}
	}
	
	public function getId($user_id) {
		$result = $this->where('username', $user_id)->first();
		
		if (empty($result)) {
			return NULL;
		} else {
			return $result['id_form'];
		}
	}
	
	public function getStatus($user_id) {
		$result = $this->where('username', $user_id)->first();
		
		if (empty($result)) {
			return NULL;
		} else {
			return $result['status'];
		}
	}
	
	public function getStatusMessage($user_id) {
		$result = $this->where('username', $user_id)->first();
		
		if (empty($result)) {
			return NULL;
		} else {
			return $result['pesan_status'];
		}
	}
}