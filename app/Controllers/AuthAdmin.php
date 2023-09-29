<?php

namespace App\Controllers;

use App\Models\AdminModel;

class AuthAdmin extends BaseController
{
    protected $adminModel;
    public function __construct()
    {
        $this->adminModel = new AdminModel();
    }

    public function index()
    {
        if (session('id_admin')) {
            return redirect()->to('/Admin');
        }
        return view('login-admin/login-view');
    }

    public function simpan_user()
    {
        $this->adminModel->save([
            'nama_admin' => $this->request->getVar('nama_admin'),
            'username_admin' => $this->request->getVar('username_admin'),
            'password_admin' => $this->request->getVar('password_admin'),
        ]);
        return redirect()->back()->with('', '');
    }

    public function proses_login()
    {
        $post = $this->request->getPost();
        $query = $this->adminModel->getWhere(['username_admin' => $post['username_admin']]);
        $user = $query->getRow();

        if ($user) {
            if ($post['password_admin'] == $user->password_admin) {
                $params = [
                    'id_admin' => $user->id_admin,
                    'nama_admin' => $user->nama_admin,
                    'username_admin' => $user->username_admin,
                    'password_admin' => $user->password_admin,
                ];
                session()->set($params);
                return redirect()->to('Admin/index');
            } else {
                return redirect()->back()->with('error', 'Password tidak sesuai');
            }
        } else {
            return redirect()->back()->with('error', 'Username tidak ditemukan');
        }
    }

    public function logout_user()
    {
        session()->remove('id_admin');
        return redirect()->to('/');
    }
}
