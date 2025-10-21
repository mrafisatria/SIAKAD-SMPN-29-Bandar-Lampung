<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class HomeController extends BaseController
{
    public function auth()
    {
        if(logged_in()){
            if(in_groups('admin')){
                return redirect()->to('/datasiswa');
            }else if(in_groups('guru')){
                return redirect()->to('/datasiswa');
            }else if(in_groups('pegawai')){
                return redirect()->to('/datasiswa');
            }else if(in_groups('siswa')){
                return redirect()->to('/datasiswa');
            }else if(in_groups('waka')){
                return redirect()->to('/datasiswa');
            }
            
        }
    }

    public function landingPage()
    {
        return view('informasipublik/informasipublik');
    }

}
