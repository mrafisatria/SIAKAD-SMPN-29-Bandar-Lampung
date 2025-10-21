<?php

namespace App\Models;

use CodeIgniter\Model;

class NilaiAkhirModel extends Model
{
    protected $table            = 'nilai_akhir';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

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

    public function getNilaiAkhir($id, $semester, $kelas) {
        $data = $this->where('id_siswa', $id)
                     ->where('semester', $semester)
                     ->where('kelas', $kelas)
                     ->findAll();
        
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

    public function getNilaiAkhirKelas7()
    {
        return $this->select('nilai_akhir.*, siswa.nama, siswa.kelas')
                    ->join('siswa', 'siswa.id = nilai_akhir.id_siswa')
                    ->like('siswa.kelas', '7', 'after') // hanya kelas yang diawali dengan '7'
                    ->where('nilai_akhir.nilai_akhir !=', 0) // nilai akhir tidak sama dengan 0
                    ->orderBy('nilai_akhir.nilai_akhir', 'DESC')
                    ->findAll();
    }

    public function getNilaiAkhirKelas8()
    {
        return $this->select('nilai_akhir.*, siswa.nama, siswa.kelas')
                    ->join('siswa', 'siswa.id = nilai_akhir.id_siswa')
                    ->like('siswa.kelas', '8', 'after') // hanya kelas yang diawali dengan '8'
                    ->where('nilai_akhir.nilai_akhir !=', 0) // nilai akhir tidak sama dengan 0
                    ->orderBy('nilai_akhir.nilai_akhir', 'DESC')
                    ->findAll();
    }

    public function getNilaiAkhirKelas9()
    {
        return $this->select('nilai_akhir.*, siswa.nama, siswa.kelas')
                    ->join('siswa', 'siswa.id = nilai_akhir.id_siswa')
                    ->like('siswa.kelas', '9', 'after') // hanya kelas yang diawali dengan '9'
                    ->where('nilai_akhir.nilai_akhir !=', 0) // nilai akhir tidak sama dengan 0
                    ->orderBy('nilai_akhir.nilai_akhir', 'DESC')
                    ->findAll();
    }

    public function getRankingSiswa($id, $kelas)
    {
        // Ambil semua siswa di kelas ini, urut dari nilai tertinggi
        $siswaKelas = $this->where('kelas', $kelas)
                        ->orderBy('nilai_akhir', 'DESC')
                        ->findAll();

        $ranking = 1;

        foreach ($siswaKelas as $siswa) {
            if ($siswa['id_siswa'] == $id) {
                return $ranking;
            }
            $ranking++;
        }

        // Jika siswa tidak ditemukan, misalnya karena id tidak cocok
        return null; // atau bisa juga return "Tidak ditemukan"
    }
}
