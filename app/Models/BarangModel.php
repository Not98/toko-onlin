<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\BarangEntity;
class BarangModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'barang';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'App\Entities\BarangEntity';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'code_gudang',
        'code_barang',
        'nama_barang',
        'harga',
        'kategori_id',
        'stok',
        'id_satuan',
        'tanggal_masuk',
        'deskripsi',
        'created_at',
        'updated_at',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules = [
        'code_gudang' => 'required|max_length[255]',
        'code_barang' => 'required|max_length[255]',
        'nama_barang' => 'required|max_length[255]',
        'harga' => 'required|decimal[10,2]',
        'kategori_id' => 'permit_empty|integer',
        'stok' => 'permit_empty|integer',
        'id_satuan' => 'permit_empty|integer',
        'tanggal_masuk' => 'required',
        'deskripsi' => 'permit_empty',
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
}
