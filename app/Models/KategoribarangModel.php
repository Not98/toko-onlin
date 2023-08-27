<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoribarangModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'kategoribarang';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'App\Entities\KategoribarangEntity';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id' ,
        'code' ,
        'nama' ,
        'status' ,
        'deleted_at' ,
        'created_at' ,
        'updated_at' ,
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    // Validation
    protected $validationRules      = [
        'code' => 'required|max_length[255]',
       
        // 'status' => 'required|integer',
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function updateFiledBycode($by,$data){
        return $this->where('code', $by)->update($data);
    }
    
}
