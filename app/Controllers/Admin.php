<?php

namespace App\Controllers;

use App\Models\LahanModel;
use App\Models\UserModel;
use App\Models\PenyewaanModel;
use App\Models\PembayaranModel;

class Admin extends BaseController
{
    protected $lahanModel;
    protected $userModel;
    protected $sewaModel;
    protected $bayarModel;
    public function __construct()
    {
        $this->lahanModel = new LahanModel();
        $this->userModel = new UserModel();
        $this->sewaModel = new PenyewaanModel();
        $this->bayarModel = new PembayaranModel();
    }

    public function index()
    {
        return view('admin/index');
    }
}
