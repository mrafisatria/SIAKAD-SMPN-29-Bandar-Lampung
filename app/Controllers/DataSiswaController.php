<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SiswaModel;

class DataSiswaController extends BaseController
{
    public $siswaModel;

    public function __construct()
    {
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

        return view('data-akademik/data-siswa', $data);
    }

    public function tambah()
    {
        $nisn = trim($this->request->getVar('nisn'));
    
        $existingSiswa = $this->siswaModel->where('nisn', $nisn)->first();
    
        if ($existingSiswa) {
            session()->setFlashdata('error', 'NISN sudah terdaftar, mohon masukkan NISN yang unik!');
            return redirect()->back()->withInput();
        }
    
        $this->siswaModel->saveSiswa([
            'nisn' => $nisn,
            'nama' => $this->request->getVar('nama'),
            'kelas' => $this->request->getVar('kelas'),
            'semester' => $this->request->getVar('semester'),
            'jeniskelamin' => $this->request->getVar('jeniskelamin'),
            'alamat' => $this->request->getVar('alamat'),
            'wali' => $this->request->getVar('wali'),
            'nowali' => $this->request->getVar('nowali'),
        ]);
    
        return redirect()->to(base_url('/datasiswa'));
    }


    public function update($id)
    {
        $nisn = trim($this->request->getPost('nisn'));
    
        // Cek apakah NISN sudah ada pada data lain selain yang sedang diupdate
        $existingSiswa = $this->siswaModel
            ->where('nisn', $nisn)
            ->where('id !=', $id)
            ->first();
    
        if ($existingSiswa) {
            session()->setFlashdata('error', 'NISN sudah terdaftar pada data lain, mohon masukkan NISN yang unik!');
            return redirect()->back()->withInput();
        }
    
        $data = [
            'nisn'         => $nisn,
            'nama'         => $this->request->getPost('nama'),
            'kelas'        => $this->request->getPost('kelas'),
            'semester'     => $this->request->getPost('semester'),
            'jeniskelamin' => $this->request->getPost('jeniskelamin'),
            'alamat'       => $this->request->getPost('alamat'),
            'wali'         => $this->request->getPost('wali'),
            'nowali'       => $this->request->getPost('nowali'),
        ];
    
        $this->siswaModel->updateSiswa($data, $id);
    
        return redirect()->to('/datasiswa');
    }


    public function delete($id)
    {   
    
        $result = $this->siswaModel->deleteSiswa($id);

        if($result){
            return redirect()->to('/datasiswa');
        }
    }
}
