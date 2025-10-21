<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NilaiModel;
use App\Models\NilaiAkhirModel;
use App\Models\RiwayatNilaiAkhirModel;
use App\Models\SiswaModel;
use CodeIgniter\HTTP\ResponseInterface;

class EraportController extends BaseController
{
    public $siswaModel;
    public $nilaiakhirModel;
    public $nilaiModel;
    public $riwayatnilaiakhirModel;

    public function __construct()
    {
        $this->siswaModel= new SiswaModel();
        $this->nilaiakhirModel= new NilaiAkhirModel();
        $this->nilaiModel= new NilaiModel();
        $this->riwayatnilaiakhirModel = new RiwayatNilaiAkhirModel();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        if($keyword){
            $siswa = $this->siswaModel->search($keyword);
        }else{
            $siswa = $this->siswaModel; 
        }

        $data = [
            'siswaa' => $siswa->getSiswa(),
        ];

        return view('evaluasi/eraport', $data);
    }

    public function getDetail($id, $kelas, $semester)
    {

        $data=[
            'siswaa'=>$this->siswaModel->getSiswa($id),
            'rankingg'=>$this->nilaiakhirModel->getRankingSiswa($id, $kelas),
            'nilaii'=>$this->nilaiModel->getNilaiDetail($id),
            'nilaiakhirr'=>$this->nilaiakhirModel->getNilaiAkhir($id, $semester, $kelas),
            'kemajuanbelajarr'=>$this->riwayatnilaiakhirModel->getRiwayatNilaiAkhir($id),
        ];

        return view ('evaluasi/detaileraport.php', $data);
    }
}
