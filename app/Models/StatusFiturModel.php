<?php

namespace App\Models;

use CodeIgniter\Model;

class StatusFiturModel extends Model
{
    protected $table            = 'statusfitur';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['fitur', 'status'];

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

    public function cekStatus()
    {
        return $this->table('statusfitur')->where('fitur', 'nilai')->Where('status', 1)->countAllResults();
    }

    public function updateStatus()
    {
        return $this->update(1, ['status' => 1]);
    }

    public function updateStatusTutup()
    {
        return $this->update(1, ['status' => 0]);
    }
}
