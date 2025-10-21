<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['email', 'username', 'password_hash', 'active'];

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

    public function getUser()
    {
        return $this->select('users.*, auth_groups.name as role')
                    ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
                    ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
                    ->whereIn('auth_groups.name', ['siswa', 'guru', 'pegawai', 'admin', 'waka'])
                    ->findAll();
    }

    public function getUserNorole()
    {
        return $this->select('users.*, auth_groups.name as role')
                    ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
                    ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
                    ->whereIn('auth_groups.name', ['norole'])
                    ->findAll();
    }

    public function saveUser($data)
    {
        $this->insert($data);

        db_connect()->table('auth_groups_users')->insert(['user_id'  => $this->getInsertID(), 'group_id' => 1,]);
    }

    public function updateUser($data, $id)
    {
        return $this->update($id, $data);
    }

    public function deleteUser($id)
    {
         return $this->delete($id);
    }

    public function search($keyword)
    {
        return $this->table('users')->where('email', $keyword)->orWhere('username', $keyword);
    }

    public function aktivasiUser($id)
    {
        return $this->set('active', '1')->where('id', $id)->update();
    
    }

}
