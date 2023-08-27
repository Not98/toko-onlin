<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class SettingBarangEntity extends Entity
{
    protected $datamap = [];
    protected $id;
    protected $code_barang;
    protected $harga;
    protected $harga_jual;
    protected $id_satuan;
    protected $satuan;
    protected $user;
    protected $created_at;
    protected $updated_at;

    // Convert the DATETIME strings to DateTime objects
    protected $dates = ['created_at', 'updated_at'];
    protected $casts   = [];
}
