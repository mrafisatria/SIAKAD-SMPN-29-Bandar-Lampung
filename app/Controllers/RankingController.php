<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NilaiAkhirModel;
use CodeIgniter\HTTP\ResponseInterface;

class RankingController extends BaseController
{
    public $nilaiakhirModel;


    public function index7()
    {
        $this->nilaiakhirModel= new NilaiAkhirModel();

        $data=[
            'nilaiakhirr'=>$this->nilaiakhirModel->getNilaiAkhirKelas7()
        ];
        return view ("evaluasi/ranking7.php", $data);
    }

    public function index8()
    {
        $this->nilaiakhirModel= new NilaiakhirModel();

        $data=[
            'nilaiakhirr'=>$this->nilaiakhirModel->getNilaiAkhirKelas8()
        ];
        return view ("evaluasi/ranking8.php", $data);
    }

    public function index9()
    {
        $this->nilaiakhirModel= new NilaiakhirModel();

        $data=[
            'nilaiakhirr'=>$this->nilaiakhirModel->getNilaiAkhirKelas9()
        ];
        return view ("evaluasi/ranking9.php", $data);
    }
}
