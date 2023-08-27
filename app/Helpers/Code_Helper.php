<?php


    function generate_code_barang()
    {
        
        $model = new \App\Models\BarangModel();
        $lastCode = $model->selectMax('code_barang')->get()->getRowArray()['code_barang'];
        $kategori = $model->select('kategori_id')->get()->getRowArray();

        if (!$lastCode) {
            return 'BRG-001'; 
        }
        $nextCode = 'BRG-'. str_pad((int)substr($lastCode, 4) + 1, 3, '0', STR_PAD_LEFT);

        return $nextCode;
    }
   
    function generate_code_kategori_barang()
    {
        
        $model = new \App\Models\KategoribarangModel();
        $lastCode = $model->selectMax('code')->get()->getRowArray()['code'];
        if (!$lastCode) {
            return 'KBRG-001'; 
        }
        $nextCode = 'KBRG-'. str_pad((int)substr($lastCode, 5) + 1, 3, '0', STR_PAD_LEFT);

        return $nextCode;
    }
   