<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RiwayatAdministrasiModel;
use App\Models\SiswaModel;
use CodeIgniter\HTTP\ResponseInterface;

class RiwayatAdministrasiController extends BaseController
{
    public $riwayatAdministrasiModel;
    public $siswaModel;

    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->riwayatAdministrasiModel = new RiwayatAdministrasiModel();
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

        return view('data-akademik/riwayat-administrasi', $data);
    }

    public function getDetail($id)
    {

        $data = [
            'id_siswa' => $id,
            'riwayatt' => $this->riwayatAdministrasiModel->getRiwayatDetail($id),
        ];

        return view('data-akademik/detail-riwayat-administrasi', $data);
    }

    public function tambah()
    {

        $this->riwayatAdministrasiModel->saveRiwayat([
            'id_siswa' => $this->request->getPost('id_siswa'),
            'pembayaran_ke' => $this->request->getVar('pembayaran_ke'),
            'tanggal' => date('Y-m-d H:i:s'),
            'nominal' => $this->request->getVar('nominal'),
        ]);

        return redirect()->to(base_url('/riwayatadministrasi'));
    }

    public function update($id)
    {
       
        $data = [
            'id_siswa' => $this->request->getPost('id_siswa'),
            'pembayaran_ke' => $this->request->getPost('pembayaran_ke'),
            'tanggal' => $this->request->getPost('tanggal'),
            'tanggaldiubah' => date('Y-m-d H:i:s'),
            'nominal' => $this->request->getPost('nominal'),
        ];
    
        $this->riwayatAdministrasiModel->updateRiwayat($data, $id);
    
        return redirect()->to('/riwayatadministrasi');
    }

    public function delete($id)
    {   
    
        $result = $this->riwayatAdministrasiModel->deleteRiwayat($id);

        if($result){
            return redirect()->to('/riwayatadministrasi');
        }
    }
}
