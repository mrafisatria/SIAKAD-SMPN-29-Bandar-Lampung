<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RiwayatNilaiAkhirModel;
use App\Models\SiswaModel;
use CodeIgniter\HTTP\ResponseInterface;

class KemajuanBelajarController extends BaseController
{
    public $riwayatnilaiakhirModel;
    public $siswaModel;

    public function __construct()
    {
        $this->riwayatnilaiakhirModel = new RiwayatNilaiAkhirModel();
        $this->siswaModel = new SiswaModel();
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

        return view('pembelajaran/kemajuan-belajar', $data);
    }

    public function getDetail($id)
    {

        $data = [
            'id_siswa' => $id,
            'riwayatnilaiakhirr' => $this->riwayatnilaiakhirModel->getRiwayatNilaiAkhir($id),
        ];

        return view('pembelajaran/detail-kemajuan-belajar', $data);
    }
}