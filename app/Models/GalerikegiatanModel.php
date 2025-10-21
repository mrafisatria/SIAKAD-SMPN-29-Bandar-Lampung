<?php

namespace App\Models;

use CodeIgniter\Model;

class GalerikegiatanModel extends Model
{
    protected $table            = 'galerikegiatan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["judul", "foto", "tanggal", "isi"];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
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

    public function getKegiatan($limit=null){

        if($limit != null){

            return $this->orderBy('tanggal', 'DESC')->findAll($limit);
        }
        return $this->findAll();
    }

    public function saveKegiatan($data){
        $this->insert($data);
    }

    public function updateKegiatan($data,$id){
        return $this->update($id,$data);
    }
    
    public function deleteKegiatan($id){
        return $this->delete($id);
    }

}
