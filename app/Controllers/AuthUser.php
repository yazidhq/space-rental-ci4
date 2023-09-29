<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthUser extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function simpan_user()
    {
        $this->userModel->save([
            'nama_user' => $this->request->getVar('nama_user'),
            'nik_user' => $this->request->getVar('nik_user'),
            'email_user' => $this->request->getVar('email_user'),
            'wa_user' => $this->request->getVar('wa_user'),
            'alamat_user' => $this->request->getVar('alamat_user'),
            'jkel_user' => $this->request->getVar('jkel_user'),
            'username_user' => $this->request->getVar('username_user'),
            'password_user' => $this->request->getVar('password_user'),
        ]);
        return redirect()->back()->with('', '');
    }

    public function proses_login()
    {
        $post = $this->request->getPost();
        $query = $this->userModel->getWhere(['username_user' => $post['username_user']]);
        $user = $query->getRow();

        if ($user) {
            if ($post['password_user'] == $user->password_user) {
                $params = [
                    'id_user' => $user->id_user,
                    'nama_user' => $user->nama_user,
                    'nik_user' => $user->nik_user,
                    'email_user' => $user->email_user,
                    'wa_user' => $user->wa_user,
                    'alamat_user' => $user->alamat_user,
                    'jkel_user' => $user->jkel_user,
                    'username_user' =>  $post['username_user'],
                    'password_user' => $user->password_user,
                ];
                session()->set($params);
                return redirect()->back();
            } else {
                return redirect()->back()->with('error', 'Password tidak sesuai');
            }
        } else {
            return redirect()->back()->with('error', 'Username tidak ditemukan');
        }
    }

    public function logout_user()
    {
        session()->remove('id_user');
        return redirect()->to('Home/index');
    }
}
