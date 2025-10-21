<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\JadwalModel;

class JadwalController extends BaseController
{
    public $jadwalModel;

    public function __construct()
    {
        $this->jadwalModel = new JadwalModel();
    }

    public function index()
    {

        $data = [
            'jadwall7' => $this->jadwalModel->getJadwalKelas7(),
            'jadwall8' => $this->jadwalModel->getJadwalKelas8(),
            'jadwall9' => $this->jadwalModel->getJadwalKelas9(),
        ];

        return view('data-akademik/jadwal-mapel', $data);
    }

    public function getDetail($kelas)
    {

        $data = [
            'jadwall' => $this->jadwalModel->getJadwalDetail($kelas),
        ];

        return view('data-akademik/detail-jadwal-mapel', $data);
    }

    public function tambah()
    {

        $this->jadwalModel->saveJadwal([
            'kelas' => $this->request->getVar('kelas'),
            'hari' => $this->request->getVar('hari'),
            'mapel1' => $this->request->getVar('mapel1'),
            'mapel2' => $this->request->getVar('mapel2'),
            'mapel3' => $this->request->getVar('mapel3'),
            'mapel4' => $this->request->getVar('mapel4'),
            'mapel5' => $this->request->getVar('mapel5'),
            'mapel6' => $this->request->getVar('mapel6'),
        ]);

        return redirect()->to(base_url('/jadwalmapel'));
    }

    public function update($id)
    {
       
        $data = [
            'kelas'  => $this->request->getPost('kelas'),
            'hari'   => $this->request->getPost('hari'),
            'mapel1' => $this->request->getPost('mapel1'),
            'mapel2' => $this->request->getPost('mapel2'),
            'mapel3' => $this->request->getPost('mapel3'),
            'mapel4' => $this->request->getPost('mapel4'),
            'mapel5' => $this->request->getPost('mapel5'),
            'mapel6' => $this->request->getPost('mapel6'),
        ];
    
        $this->jadwalModel->updateJadwal($data, $id);
    
        return redirect()->to('/jadwalmapel');
    }

    public function delete($id)
    {   
    
        $result = $this->jadwalModel->deleteJadwal($id);

        if($result){
            return redirect()->to('/jadwalmapel');
        }
    }
}
