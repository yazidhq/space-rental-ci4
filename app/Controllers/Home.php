<?php

namespace App\Controllers;

class Home extends Admin
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'lahan' => $this->lahanModel->orderBy('id_lahan', 'DESC')->findAll(3),
        ];
        return view('user/index', $data);
    }
}
