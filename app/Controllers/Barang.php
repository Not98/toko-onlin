<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;
use App\Models\KategoribarangModel;
use App\Entities\BarangEntity;
use App\Entities\KategoribarangEntity;

class Barang extends BaseController
{
    public function __construct()
    {

        $this->modelBarang = new BarangModel();
        $this->modelKategoriBarang = new KategoribarangModel();
        
    }
    public function kategoriAdd(){
        $codeBarang= generate_code_kategori_barang();
        $entity = new KategoribarangEntity($this->request->getPost());
        $entity->code=generate_code_kategori_barang();
        $entity->status =1;
        $entity->created_at ="";
        if (!$this->validate($this->modelKategoriBarang->getValidationRules())) {
            $error = $this->validator->getErrors();
            $error = str_replace("_"," ",implode('<br>', $error));
            return $this->response->setStatusCode(400)->setJSON(['errors' => $error,"satatus"=>"validasi"]);  
        }
        if(!$this->modelKategoriBarang->insert($entity)){
            $dbError = $this->db->error();
            return $this->response->setStatusCode(400)->setJSON(['errors' => $dbError['message']]);
        }  
        return $this->response->setStatusCode(200)->setJSON(['success' => "Kategori Barang Dengan Kode".$codeBarang." Berhasil Di Simanpan"]);
    }
    public function kategoriUpdate(){
        $entity = new KategoribarangEntity($this->request->getPost());
        $entity->updated_at ="";
        return $this->response->setStatusCode(200)->setJSON($entity);
        if (!$this->validate($this->modelKategoriBarang->getValidationRules())) {
            $error = $this->validator->getErrors();
            $error = str_replace("_"," ",implode('<br>', $error));
            return $this->response->setStatusCode(400)->setJSON(['errors' => $error,"satatus"=>"validasi"]);  
        }
        if(!$this->modelKategoriBarang->updateFiledBycode($entity->code,$entity)){
            $dbError = $this->db->error();
            return $this->response->setStatusCode(400)->setJSON(['errors' => $dbError['message']]);
        }  
        return $this->response->setStatusCode(200)->setJSON(['success' => "Kategori Barang Dengan Kode ".$codeBarang." Berhasil Di Di Update"]);
    }

    public function index()
    {
        echo generate_code_barang();
    
    }

    public function addBarang(){
            $codeBarang= generate_code_barang();
            $entity = new BarangEntity($this->request->getPost());
            $entity->code_barang =$codeBarang;
            return $this->response->setStatusCode(200)->setJSON([$entity]);

            if (!$this->validate($this->modelBarang->getValidationRules())) {
                $error = $this->validator->getErrors();
                $error = str_replace("_"," ",implode('<br>', $error));
                return $this->response->setStatusCode(400)->setJSON(['errors' => $error]);
            }
            if(!$this->modelBarang->insert($entity)){
                $dbError = $this->db->error();
                return $this->response->setStatusCode(400)->setJSON(['errors' => $dbError['message']]);
            }  
            return $this->response->setStatusCode(200)->setJSON(['success' => "Conde Barang ".$codeBarang." Berhasil Di Simanpan"]);
    }
}
