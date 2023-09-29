<?php

namespace App\Controllers;

class User extends Admin
{

    // user admin-sitee
    public function tampil_user()
    {
        $data = [
            'title' => 'Daftar User',
            'user' => $this->userModel->orderBy('id_user', 'DESC')->findAll(),
        ];
        return view('admin/user/tampil_user', $data);
    }
    public function hapus_user($id_user)
    {
        $this->userModel->where('id_user', $id_user)->delete();
        return redirect()->back()->with('', '');
    }
}
