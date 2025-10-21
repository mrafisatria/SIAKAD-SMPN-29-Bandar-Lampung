<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Models\GroupModel;
use Myth\Auth\Password;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    public $userModel;
    public $groupModel;

    public function __construct()
    {
        $this->userModel = new UsersModel();
        $this->groupModel = new GroupModel();
    }

    public function index()
    {

        $keyword = $this->request->getVar('keyword');
        if($keyword){
            $user = $this->userModel->search($keyword);
        }else{
            $user = $this->userModel; 
        }

        $data = [
            'userr' => $user->getUser(),
            'usernorolee' => $user->getUserNorole(),
        ];

        return view('manajemenakun', $data);
    }

    public function tambah()
    {

        $this->userModel->saveUser([
            'email'    => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'password_hash' => Password::hash($this->request->getVar('password')),
        ]);

        return redirect()->to(base_url('/manajemenakun'));
    }

    public function update($id)
    {
       
        $data = [
            'email'         => $this->request->getPost('email'),
            'username'         => $this->request->getPost('username'),
            'password_hash'        => Password::hash($this->request->getPost('password')),
        ];
    
        $this->userModel->updateUser($data, $id);
    
        return redirect()->to('/manajemenakun');
    }

    public function delete($id)
    {   
    
        $result = $this->userModel->deleteUser($id);

        if($result){
            return redirect()->to('/manajemenakun');
        }
    }

    public function aktivasi($user_id)
    {

        $group_id = $this->request->getPost('role');

        $this->userModel->aktivasiUser($user_id);
        $this->groupModel->aktivasiUser($group_id, $user_id);
    
        return redirect()->to('/manajemenakun');
    }
}
    