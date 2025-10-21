<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NilaiModel;
use App\Models\SiswaModel;
use App\Models\NilaiAkhirModel;
use App\Models\StatusFiturModel;
use CodeIgniter\HTTP\ResponseInterface;

class NilaiController extends BaseController
{
    public $nilaiModel;
    public $siswaModel;
    public $nilaiAkhirModel;
    public $statusFiturModel;

    public function __construct()
    {
        $this->nilaiModel = new NilaiModel();
        $this->siswaModel = new SiswaModel();
        $this->nilaiAkhirModel = new NilaiAkhirModel();
        $this->statusFiturModel = new StatusFiturModel();
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
            'statusfitur' => $this->statusFiturModel->cekStatus(),
            'siswaa' => $siswa->getSiswa(),
        ];

        return view('pembelajaran/nilai', $data);
    }


    public function getDetail($id, $semester, $kelas)
    {

        $data = [
            'statusfitur' => $this->statusFiturModel->cekStatus(),
            'siswaa' => $this->siswaModel->getSiswa($id),
            'nilaii' => $this->nilaiModel->getNilaiDetail($id),
            'nilaiakhirr' => $this->nilaiAkhirModel->getNilaiAkhir($id, $semester, $kelas),
        ];

        return view('pembelajaran/detail-nilai', $data);
    }

    public function updateStatus()
    {
       
        $this->statusFiturModel->updateStatus();
    
        return redirect()->to('/nilai');
    }

    public function updateStatusTutup()
    {
       
        $this->statusFiturModel->updateStatusTutup();
    
        return redirect()->to('/nilai');
    }



    public function tambah()
    {
        // Cek status fitur di sini
        if (!$this->statusFiturModel->cekStatus() > 0) {
            session()->setFlashdata('error', 'Penilaian saat ini tidak aktif.');
            return redirect()->back()->withInput();
        }

        if($this->request->getVar('bobot_kognitif') + $this->request->getVar('bobot_uas') > 100){
            session()->setFlashdata('error', 'Bobot Berlebihan.');
            return redirect()->back()->withInput();
        }

        $this->nilaiModel->saveNilai([
            'kelas' => $this->request->getVar('kelas'),
            'semester' => $this->request->getVar('semester'),
            'id_siswa' => $this->request->getVar('id_siswa'),
            'mata_pelajaran' => $this->request->getVar('mata_pelajaran'),
            'bobot_kognitif' => $this->request->getVar('bobot_kognitif') / 100,
            'bobot_uas' => $this->request->getVar('bobot_uas') / 100,
            'ph1' => $this->request->getVar('ph1'),
            'ph2' => $this->request->getVar('ph2'),
            'ph3' => $this->request->getVar('ph3'),
            'ph4' => $this->request->getVar('ph4'),
            'ph5' => $this->request->getVar('ph5'),
            'ph6' => $this->request->getVar('ph6'),
            'ph7' => $this->request->getVar('ph7'),
            'ph8' => $this->request->getVar('ph8'),
            'ph9' => $this->request->getVar('ph9'),
            'ph10' => $this->request->getVar('ph10'),
            'ti1' => $this->request->getVar('ti1'),
            'ti2' => $this->request->getVar('ti2'),
            'ti3' => $this->request->getVar('ti3'),
            'ti4' => $this->request->getVar('ti4'),
            'ti5' => $this->request->getVar('ti5'),
            'tk1' => $this->request->getVar('tk1'),
            'tk2' => $this->request->getVar('tk2'),
            'tk3' => $this->request->getVar('tk3'),
            'uts' => $this->request->getVar('uts'),
            'uas' => $this->request->getVar('uas'),
        ]);

        return redirect()->to(base_url('/nilai'));
    }

    public function update($id)
    {
        // Cek status fitur di sini
        if (!$this->statusFiturModel->cekStatus() > 0) {
            session()->setFlashdata('error', 'Penilaian saat ini tidak aktif.');
            return redirect()->back()->withInput();
        }
       
        $data = [
            'kelas' => $this->request->getPost('kelas'),
            'semester' => $this->request->getPost('semester'),
            'id_siswa' => $this->request->getPost('id_siswa'),
            'mata_pelajaran' => $this->request->getPost('mata_pelajaran'),
            'bobot_kognitif' => $this->request->getPost('bobot_kognitif') / 100,
            'bobot_uas' => $this->request->getPost('bobot_uas') / 100,
            'ph1' => $this->request->getPost('ph1'),
            'ph2' => $this->request->getPost('ph2'),
            'ph3' => $this->request->getPost('ph3'),
            'ph4' => $this->request->getPost('ph4'),
            'ph5' => $this->request->getPost('ph5'),
            'ph6' => $this->request->getPost('ph6'),
            'ph7' => $this->request->getPost('ph7'),
            'ph8' => $this->request->getPost('ph8'),
            'ph9' => $this->request->getPost('ph9'),
            'ph10' => $this->request->getPost('ph10'),
            'ti1' => $this->request->getPost('ti1'),
            'ti2' => $this->request->getPost('ti2'),
            'ti3' => $this->request->getPost('ti3'),
            'ti4' => $this->request->getPost('ti4'),
            'ti5' => $this->request->getPost('ti5'),
            'tk1' => $this->request->getPost('tk1'),
            'tk2' => $this->request->getPost('tk2'),
            'tk3' => $this->request->getPost('tk3'),
            'uts' => $this->request->getPost('uts'),
            'uas' => $this->request->getPost('uas'),
        ];
    
        $this->nilaiModel->updateNilai($data, $id);
    
        return redirect()->to('/nilai');
    }

    public function delete($id)
    {   
        // Cek status fitur di sini
        if (!$this->statusFiturModel->cekStatus() > 0) {
            session()->setFlashdata('error', 'Penilaian saat ini tidak aktif.');
            return redirect()->back()->withInput();
        }
    
        $result = $this->nilaiModel->deleteNilai($id);

        if($result){
            return redirect()->to('/nilai');
        }
    }
}
