<?php

namespace App\Models;

use CodeIgniter\Model;

class NilaiModel extends Model
{
    protected $table            = 'nilai';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_siswa', 'mata_pelajaran', 'kelas', 'semester', 'bobot_kognitif', 'bobot_uas', 'ph1', 'ph2', 'ph3', 'ph4', 'ph5', 'ph6', 'ph7', 'ph8', 'ph9', 'ph10',
                                    'ti1', 'ti2', 'ti3', 'ti4', 'ti5', 'tk1', 'tk2', 'tk3', 'uts', 'uas',];

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

    public function getNilaiDetail($id) {
        $data = $this->where('id_siswa', $id)->findAll();
    
        // agar menampilkan hanya 1 angka di belakang koma
        foreach ($data as &$row) {
            foreach ($row as $key => $value) {
                if (is_numeric($value)) {
                    $row[$key] = round($value, 1);
                }
            }
        }
    
        return $data;
    }

    public function saveNilai($data){

        return $this->insert($data);
    }

    public function updateNilai($data, $id)
    {
        return $this->update($id, $data);
    }

    public function deleteNilai($id)
    {
        return $this->delete($id);
    }

}
