<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class BarangEntity extends Entity
{
    // protected $datamap = [];
    protected $attributes = [
        'code_gudang' => null,
        'code_barang' => null,
        'nama_barang' => null,
        'harga' => null,
        'kategori_id' => null,
        'stok' => null,
        'id_satuan' => null,
        'tanggal_masuk' => null,
        'deskripsi' => null,
        'created_at' => null,
        'updated_at' => null,
    ];


    // Convert the DATETIME strings to DateTime objects
    protected $dates = [ 'created_at', 'updated_at'];
    protected $casts   = [];
}
