<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class KategoribarangEntity extends Entity
{
    // protected $datamap = [];
    protected $attributes = [
        'code' => null,
        'nama' => null,
        'status' => null,
        'deleted_at' => null,
        'created_at' => null,
        'updated_at' => null,
    ];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];
}
