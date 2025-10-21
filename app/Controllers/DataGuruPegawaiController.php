<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\GuruModel;
use App\Models\PegawaiModel;

class DataGuruPegawaiController extends BaseController
{
    public $guruModel;
    public $pegawaiModel;

    public function __construct()
    {
        $this->guruModel = new GuruModel();
        $this->pegawaiModel = new PegawaiModel();
    }
    
    public function index()
    {
        $data = [
            'guruu' => $this->guruModel->getGuru(),
            'pegawaii' => $this->pegawaiModel->getPegawai(),
        ];
        return view('data-akademik/data-guru-pegawai', $data);
    }

    public function tambahGuru()
    {
        $nip = trim($this->request->getVar('nip'));
        $nuptk = trim($this->request->getVar('nuptk'));
    
        $existingNip = $this->guruModel->where('nip', $nip)->first();
        $existingNuptk = $this->guruModel->where('nuptk', $nuptk)->first();
    
        if ($existingNip && $existingNuptk) {
            session()->setFlashdata('error', 'NIP dan NUPTK sudah terdaftar, mohon masukkan yang unik!');
            return redirect()->back()->withInput();
        } elseif ($existingNip) {
            session()->setFlashdata('error', 'NIP sudah terdaftar, mohon masukkan NIP yang unik!');
            return redirect()->back()->withInput();
        } elseif ($existingNuptk) {
            session()->setFlashdata('error', 'NUPTK sudah terdaftar, mohon masukkan NUPTK yang unik!');
            return redirect()->back()->withInput();
        }
    
        // Jika kedua-duanya unik, simpan data guru baru
        $this->guruModel->saveGuru([
            'nip' => $nip,
            'nuptk' => $nuptk,
            'nama' => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'alamat' => $this->request->getVar('alamat'),
            'telepon' => $this->request->getVar('telepon'),
            'email' => $this->request->getVar('email'),
        ]);
    
        return redirect()->to(base_url('/datagurupegawai'));
    }


    public function updateGuru($id)
    {
        $nip = trim($this->request->getPost('nip'));
        $nuptk = trim($this->request->getPost('nuptk'));
    
        // Cek apakah NIP sudah ada di data lain selain yang sedang diupdate
        $existingNip = $this->guruModel
            ->where('nip', $nip)
            ->where('id !=', $id)
            ->first();
    
        // Cek apakah NUPTK sudah ada di data lain selain yang sedang diupdate
        $existingNuptk = $this->guruModel
            ->where('nuptk', $nuptk)
            ->where('id !=', $id)
            ->first();
    
        if ($existingNip && $existingNuptk) {
            session()->setFlashdata('error', 'NIP dan NUPTK sudah terdaftar pada data lain, mohon masukkan yang unik!');
            return redirect()->back()->withInput();
        } elseif ($existingNip) {
            session()->setFlashdata('error', 'NIP sudah terdaftar pada data lain, mohon masukkan NIP yang unik!');
            return redirect()->back()->withInput();
        } elseif ($existingNuptk) {
            session()->setFlashdata('error', 'NUPTK sudah terdaftar pada data lain, mohon masukkan NUPTK yang unik!');
            return redirect()->back()->withInput();
        }
    
        // Jika validasi lolos, lakukan update data
        $data = [
            'nip'          => $nip,
            'nuptk'        => $nuptk,
            'nama'         => $this->request->getPost('nama'),
            'jenis_kelamin'=> $this->request->getPost('jenis_kelamin'),
            'alamat'       => $this->request->getPost('alamat'),
            'telepon'      => $this->request->getPost('telepon'),
            'email'        => $this->request->getPost('email'),
        ];
    
        $this->guruModel->updateGuru($data, $id);
    
        return redirect()->to('/datagurupegawai');
    }


    public function deleteGuru($id)
    {   
    
        $result = $this->guruModel->deleteGuru($id);

        if($result){
            return redirect()->to('/datagurupegawai');
        }
    }

    public function tambahPegawai()
    {
        $nip = trim($this->request->getVar('nip'));
    
        // Cek apakah NIP sudah ada di database
        $existingNip = $this->pegawaiModel->where('nip', $nip)->first();
    
        if ($existingNip) {
            session()->setFlashdata('error', 'NIP sudah terdaftar, mohon masukkan NIP yang unik!');
            return redirect()->back()->withInput();
        }
    
        // Jika NIP unik, simpan data pegawai baru
        $this->pegawaiModel->savePegawai([
            'nip' => $nip,
            'jabatan' => $this->request->getVar('jabatan'),
            'nama' => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'alamat' => $this->request->getVar('alamat'),
            'no_telepon' => $this->request->getVar('telepon'),
            'email' => $this->request->getVar('email'),
            'status_kepegawaian' => $this->request->getVar('status_kepegawaian'),
        ]);
    
        return redirect()->to(base_url('/datagurupegawai'));
    }


    public function updatePegawai($id)
    {
        $nip = trim($this->request->getPost('nip'));
    
        // Cek apakah NIP sudah ada pada data lain selain yang sedang diupdate
        $existingNip = $this->pegawaiModel
            ->where('nip', $nip)
            ->where('id !=', $id)
            ->first();
    
        if ($existingNip) {
            session()->setFlashdata('error', 'NIP sudah terdaftar pada data lain, mohon masukkan NIP yang unik!');
            return redirect()->back()->withInput();
        }
    
        $data = [
            'nip' => $nip,
            'jabatan' => $this->request->getPost('jabatan'),
            'nama' => $this->request->getPost('nama'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'status_kepegawaian' => $this->request->getPost('status_kepegawaian'),
            'alamat' => $this->request->getPost('alamat'),
            'no_telepon' => $this->request->getPost('telepon'),
            'email' => $this->request->getPost('email'),
        ];
    
        $this->pegawaiModel->updatePegawai($data, $id);
    
        return redirect()->to('/datagurupegawai');
    }


    public function deletePegawai($id)
    {   
    
        $result = $this->pegawaiModel->deletePegawai($id);

        if($result){
            return redirect()->to('/datagurupegawai');
        }
    }
}
