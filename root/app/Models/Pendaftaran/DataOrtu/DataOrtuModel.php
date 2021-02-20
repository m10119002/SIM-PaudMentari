<?php namespace App\Models\Pendaftaran\DataOrtu;

use CodeIgniter\Model;

class DataOrtuModel extends Model
{
	protected $DBGroup	  = '';
    protected $table      = 'data_ortu';
    protected $primaryKey = 'id_data_ortu';

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
	
	public function getId($form_id, $tipe) {
		$result = $this->where(['id_form' => $form_id, 'tipe' => $tipe])->first();
		
		if (empty($result)) {
			return NULL;
		} else {
			return $result['id_data_ortu'];
		}
	}
}