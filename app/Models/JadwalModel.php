<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    protected $table            = 'jadwal';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kelas', 'hari', 'mapel1', 'mapel2', 'mapel3', 'mapel4', 'mapel5', 'mapel6'];

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

    public function getJadwalDetail($kelas){

        return $this->where('kelas', $kelas)->orderBy("FIELD(hari, 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu')", '', false)->findAll();      
    }

    public function getJadwalKelas7(){

        return $this->distinct()->select('kelas')->like('kelas', '7.', 'after')->orderBy('kelas', 'ASC')->findAll();
    }
    
    public function getJadwalKelas8(){

        return $this->distinct()->select('kelas')->like('kelas', '8.', 'after')->orderBy('kelas', 'ASC')->findAll();
    }
    
    public function getJadwalKelas9(){

        return $this->distinct()->select('kelas')->like('kelas', '9.', 'after')->orderBy('kelas', 'ASC')->findAll();
    }

    public function saveJadwal($data){

        return $this->insert($data);
    }

    public function updateJadwal($data, $id)
    {
        return $this->update($id, $data);
    }

    public function deleteJadwal($id)
    {
        return $this->delete($id);
    }
}
