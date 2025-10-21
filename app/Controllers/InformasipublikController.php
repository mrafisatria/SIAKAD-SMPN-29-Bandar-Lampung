<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EkstrakurikulerModel;
use App\Models\GalerikegiatanModel;
use App\Models\PrestasiModel;
use App\Models\SejarahModel;
use CodeIgniter\HTTP\ResponseInterface;

class InformasipublikController extends BaseController
{
    public $sejarahModel;
    public $galerikegiatanModel;
    public $prestasiModel;
    public $ekstrakurikulerModel;

    public function index()
    {
        $this->sejarahModel = new SejarahModel();
        $this->galerikegiatanModel = new GalerikegiatanModel();
        $this->prestasiModel = new PrestasiModel();
        $this->ekstrakurikulerModel = new EkstrakurikulerModel();

        $data = [
            'sejarahh' => $this->sejarahModel->getSejarah(),
            'kegiatann' => $this->galerikegiatanModel->getKegiatan(3),
            'prestasii' => $this->prestasiModel->getPrestasi(3),
            'ekstrakurikulerr' => $this->ekstrakurikulerModel->getEkstrakurikuler()
        ];

        return view("informasipublik/informasipublik.php", $data);
    }

    public function storeSejarah()
    {
        $this->sejarahModel=new SejarahModel();

        $this->sejarahModel->saveSejarah([
            'sejarahkepemimpinan'=> $this->request->getVar('periodekepemimpinan')
        ]);

        return redirect ()-> to(base_url('/'));
    }
    
    public function updateSejarah($id)
    {
        $this->sejarahModel = new SejarahModel();
        
        $this->sejarahModel->updateSejarah([
            'sejarahkepemimpinan'=>$this->request->getPost('periodekepemimpinan'),
        ], $id);

        return redirect()->to(base_url('/'));
    }
    
    public function deleteSejarah($id)
    {
        $this->sejarahModel = new SejarahModel();
        
        $this->sejarahModel->deleteSejarah($id);

        return redirect()->to(base_url('/'));
    }


    public function semuaGaleri()
    {
        $this->galerikegiatanModel = new GalerikegiatanModel();

        $data = [
            'kegiatann' => $this->galerikegiatanModel->getKegiatan(),
        ];

        return view("informasipublik/galerikegiatan.php", $data);
    }

    public function storeGaleri()
    {
        $this->galerikegiatanModel = new GalerikegiatanModel();

        $path = 'assets/upload/';
        $foto = $this->request->getFile('foto');

        if($foto->isValid()){
            $name = $foto->getRandomName();

            if($foto->move($path, $name)){
                $foto_path = base_url($path . $name);
            }
        }

        $this->galerikegiatanModel->saveKegiatan([
            'judul' => $this->request->getVar('judul'),
            'tanggal' => $this->request->getVar('tanggal'),
            'isi' => $this->request->getVar('isi'),
            'foto' => $foto_path
        ]);
        
        return redirect()->to(base_url('/informasipublik/galerikegiatan/semuagaleri')); 
    }

    public function updateKegiatan($id)
    {
        $this->galerikegiatanModel = new GalerikegiatanModel();
        
        $path = 'assets/upload/';
        $foto = $this->request->getFile('foto');

        if($foto->isValid()){
            $name = $foto->getRandomName();

            if($foto->move($path, $name)){
                $foto_path = base_url($path . $name);
            }
        }

        $this->galerikegiatanModel->updateKegiatan([
            'judul' => $this->request->getPost('judul'),
            'tanggal' => $this->request->getPost('tanggal'),
            'isi' => $this->request->getPost('isi'),
            'foto' => $foto_path,
        ], $id);
        
        return redirect()->to(base_url('/informasipublik/galerikegiatan/semuagaleri')); 
    }

    public function deleteKegiatan($id)
    {
        $this->galerikegiatanModel = new GalerikegiatanModel();
        
        $this->galerikegiatanModel->deleteKegiatan($id);

        return redirect()->to(base_url('/informasipublik/galerikegiatan/semuagaleri'));
    }
//

    public function semuaPrestasi()
    {
        $this->prestasiModel = new PrestasiModel();

        $data = [
            'prestasii' => $this->prestasiModel->getPrestasi(),
        ];

        return view("informasipublik/prestasi.php", $data);
    }

    public function storePrestasi()
    {
        $this->prestasiModel = new PrestasiModel();

        $path = 'assets/upload/';
        $foto = $this->request->getFile('foto');

        if($foto->isValid()){
            $name = $foto->getRandomName();

            if($foto->move($path, $name)){
                $foto_path = base_url($path . $name);
            }
        }

        $this->prestasiModel->savePrestasi([
            'tanggal'=> $this->request->getVar('tanggal'),
            'judul' => $this->request->getVar('judul'),
            'perwakilan' => $this->request->getVar('perwakilan'),
            'isi' => $this->request->getVar('isi'),
            'foto' => $foto_path
        ]);
        
        return redirect()->to(base_url('/informasipublik/prestasi/semuaprestasi')); 
    }

    public function updatePrestasi($id)
    {
        $this->prestasiModel = new PrestasiModel();

        $path = 'assets/upload/';
        $foto = $this->request->getFile('foto');

        if($foto->isValid()){
            $name = $foto->getRandomName();

            if($foto->move($path, $name)){
                $foto_path = base_url($path . $name);
            }
        }

        $this->prestasiModel->updatePrestasi([
            'tanggal' => $this->request->getPost('tanggal'),
            'judul' => $this->request->getPost('judul'),
            'perwakilan' => $this->request->getPost('perwakilan'),
            'isi' => $this->request->getPost('isi'),
            'foto' => $foto_path,
        ], $id);

        return redirect()->to(base_url('/informasipublik/prestasi/semuaprestasi')); 
    }

    public function deletePrestasi($id)
    {
        $this->prestasiModel = new PrestasiModel();
        
        $this->prestasiModel->deletePrestasi($id);

        return redirect()->to(base_url('/informasipublik/prestasi/semuaprestasi'));
    }
//

    public function storeEkstrakurikuler()
    {
        $this->ekstrakurikulerModel = new EkstrakurikulerModel();

        $this->ekstrakurikulerModel->saveEkstrakurikuler([
            'nama'=>$this->request->getVar('nama'),
            'warna'=>$this->request->getVar('warna'),
        ]);

        return redirect()->to(base_url('/'));
    }

    public function updateEkstrakurikuler($id)
    {
        $this->ekstrakurikulerModel = new EkstrakurikulerModel();
        
        $this->ekstrakurikulerModel->updateEkstrakurikuler([
            'nama'=>$this->request->getPost('nama'),
            'warna'=>$this->request->getPost('warna'),
        ], $id);

        return redirect()->to(base_url('/'));
    }
    
    public function deleteEkstrakurikuler($id)
    {
        $this->ekstrakurikulerModel = new EkstrakurikulerModel();
        
        $this->ekstrakurikulerModel->deleteEkstrakurikuler($id);

        return redirect()->to(base_url('/'));
    }
}
