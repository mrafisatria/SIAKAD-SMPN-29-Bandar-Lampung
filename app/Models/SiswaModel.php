<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table            = 'siswa';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nisn', 'nama', 'kelas', 'semester', 'jeniskelamin', 'alamat', 'wali', 'nowali'];

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

    public function getSiswa($id=null){

        if($id != null){

            return $this->where('id', $id)->findAll();
        }
        return $this->findAll();        
    }

    public function saveSiswa($data){
        $this->insert($data);
    }

    public function updateSiswa($data, $id)
    {
        return $this->update($id, $data);
    }

    public function deleteSiswa($id)
    {
         return $this->delete($id);
    }

    public function search($keyword)
    {
        return $this->table('siswa')->where('nisn', $keyword)->orWhere('nama', $keyword);
    }
}
